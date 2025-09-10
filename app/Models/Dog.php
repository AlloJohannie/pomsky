<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Dog extends Model
{
    protected $fillable = [
        'name','sex','dob','color','weight_kg','photo','description','is_active','slug'
    ];

    public function sireLitters() { return $this->hasMany(Litter::class, 'sire_id'); }
    public function damLitters()  { return $this->hasMany(Litter::class, 'dam_id'); }

    protected static function booted(): void
    {
        static::creating(function (Dog $dog) {
            self::ensureSlug($dog);
        });

        static::updating(function (Dog $dog) {
            self::ensureSlug($dog);
        });
    }

    protected static function ensureSlug(Dog $dog): void
    {
        if (blank($dog->slug) && filled($dog->name)) {
            $base = Str::slug($dog->name);
            $slug = $base;
            $i = 2;

            // éviter les collisions; ignorer l’ID courant si on met à jour
            while (
                static::where('slug', $slug)
                    ->when($dog->exists, fn ($q) => $q->where('id', '!=', $dog->id))
                    ->exists()
            ) {
                $slug = "{$base}-{$i}";
                $i++;
            }

            $dog->slug = $slug;
        }
    }
}
