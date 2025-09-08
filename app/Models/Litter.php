<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Litter extends Model
{
    protected $fillable = [
        'code','born_at','ready_at','sire_id','dam_id','puppies_count','status','description','slug'
    ];

    public function sire()  { return $this->belongsTo(Dog::class, 'sire_id'); }
    public function dam()   { return $this->belongsTo(Dog::class, 'dam_id'); }
    public function photos(){ return $this->hasMany(LitterPhoto::class)->orderBy('sort'); }
}
