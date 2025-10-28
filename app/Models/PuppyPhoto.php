<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PuppyPhoto extends Model
{
    protected $fillable = ['puppy_id','path','taken_at','week','is_primary','sort'];

    public function puppy()
    {
        return $this->belongsTo(Puppy::class);
    }

    protected static function booted()
    {
        // Si on sauve une photo principale, dé-marquer les autres de ce chiot
        static::saving(function (PuppyPhoto $photo) {
            if ($photo->is_primary) {
                // Le record peut ne pas encore avoir d'ID lors du create
                static::where('puppy_id', $photo->puppy_id)
                    ->when($photo->id, fn($q) => $q->where('id', '!=', $photo->id))
                    ->update(['is_primary' => false]);
            }
        });
    }
}
