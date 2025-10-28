<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Puppy extends Model
{
    protected $fillable = [
        'litter_id','name','sex','color','status','price_cents','photo','description','sort','slug',
    ];

    public function litter()
    {
        return $this->belongsTo(Litter::class);
    }

    public function photos()
    {
        // tri par date puis création (la plus récente d’abord)
        return $this->hasMany(PuppyPhoto::class)->orderByDesc('taken_at')->orderByDesc('created_at');
    }

    public function latestPhoto()
    {
        return $this->hasOne(PuppyPhoto::class)->latest('taken_at')->latest('created_at');
    }

    public function primaryPhoto()
    {
        return $this->hasOne(PuppyPhoto::class)->where('is_primary', true);
    }

    // Cover = principale si définie, sinon la plus récente, sinon logo
    public function getCoverPhotoUrlAttribute(): ?string
    {
        // try eagerloaded relation first to éviter requêtes
        $photo = $this->getRelationValue('primaryPhoto')
              ?? $this->getRelationValue('latestPhoto');

        // fallback requête si pas eagerloaded
        if (! $photo) $photo = $this->primaryPhoto()->first();
        if (! $photo) $photo = $this->latestPhoto()->first();

        if ($photo && $photo->path && file_exists(public_path('storage/'.$photo->path))) {
            return asset('storage/'.$photo->path);
        }
        return asset('images/logo/logo_large.jpg');
    }

    // Slug & ordre auto (inchangé)
    protected static function booted()
    {
        static::creating(function (Puppy $puppy) {
            if (empty($puppy->slug)) {
                $puppy->slug = static::makeUniqueSlug($puppy);
            }
            if ($puppy->sort === null) {
                $max = (int) ($puppy->litter?->puppies()->max('sort') ?? 0);
                $puppy->sort = $max + 1;
            }
        });

        static::updating(function (Puppy $puppy) {
            if (empty($puppy->slug) && !empty($puppy->name)) {
                $puppy->slug = static::makeUniqueSlug($puppy);
            }
        });
    }

    protected static function makeUniqueSlug(Puppy $puppy): string
    {
        $base = Str::slug($puppy->name ?: 'chiot');
        $slug = $base; $i = 1;
        while (static::where('slug', $slug)->exists()) $slug = $base.'-'.$i++;
        return $slug;
    }
}
