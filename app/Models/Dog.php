<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $fillable = [
        'name','sex','dob','color','weight_kg','photo','description','is_active','slug'
    ];

    public function sireLitters() { return $this->hasMany(Litter::class, 'sire_id'); }
    public function damLitters()  { return $this->hasMany(Litter::class, 'dam_id'); }
}
