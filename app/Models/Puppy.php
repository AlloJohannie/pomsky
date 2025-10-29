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
        // 👉 Tri par semaine croissante d’abord, puis date si égalité
        return $this->hasMany(PuppyPhoto::class)
            ->orderBy('week')               // 0,1,2...
            ->orderBy('taken_at')
            ->orderBy('created_at');
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
        $photo = $this->getRelationValue('primaryPhoto')
            ?? $this->getRelationValue('latestPhoto')
            ?? $this->primaryPhoto()->first()
            ?? $this->latestPhoto()->first();

        if ($photo && $photo->path && file_exists(public_path('storage/'.$photo->path))) {
            return asset('storage/'.$photo->path);
        }
        return null; // 👈 pas d’image par défaut
    }
    // Slug & ordre auto (inchangé)
    protected static function booted()
    {
        static::created(fn(Puppy $p) => optional($p->litter)->update(['puppies_count' => $p->litter->puppies()->count()]));
        static::deleted(fn(Puppy $p) => optional($p->litter)->update(['puppies_count' => $p->litter->puppies()->count()]));

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

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Pré-remplit week0..week12 si une photo existe déjà
        $photos = $this->record->photos()->get()->keyBy('week');
        for ($w = 0; $w <= 12; $w++) {
            $key = 'week'.$w;
            $data[$key] = isset($photos[$w]) ? $photos[$w]->path : null; // FileUpload accepte le path sur 'public'
        }
        return $data;
    }
}
