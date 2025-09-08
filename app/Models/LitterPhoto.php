<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LitterPhoto extends Model
{
    protected $fillable = ['litter_id','path','caption','sort'];

    public function litter(){ return $this->belongsTo(Litter::class); }
}
