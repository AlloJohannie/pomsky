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

    // Génère le slug & l'ordre au moment du create / update
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
        $slug = $base;
        $i = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $base.'-'.$i++;
        }

        return $slug;
    }
}
