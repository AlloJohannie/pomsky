<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Litter extends Model
{
    protected $fillable = [
        'code','born_at','ready_at','sire_id','dam_id','puppies_count','status','description','slug','size',
    ];

    public function sire()  { return $this->belongsTo(Dog::class, 'sire_id'); }
    
    public function dam()   { return $this->belongsTo(Dog::class, 'dam_id'); }

    public function photos(){ return $this->hasMany(LitterPhoto::class)->orderBy('sort'); }

    public function puppies() { return $this->hasMany(Puppy::class)->orderBy('sort'); }

    // + cast & nouveaux scopes
    protected $casts = ['is_active' => 'boolean', 'born_at'=>'date', 'ready_at'=>'date'];

    public function scopeVisible($q) {         // 👈 remplace l’ancien "public()"
        return $q->where('is_active', true);   // "fermée" (status=closed) affiche quand même si active
    }

    // Garde l’existant mais NE FILTRE PLUS sur "closed"
    public function scopePublic($q) { return $this->scopeVisible($q); } // pour compat ascendante

    // Compte dérivé (si tu souhaites retirer la saisie manuelle)
    public function getPuppiesCountAttribute(): int {
        return (int) ($this->relationLoaded('puppies')
            ? $this->puppies->count()
            : $this->puppies()->count());
    }

}
