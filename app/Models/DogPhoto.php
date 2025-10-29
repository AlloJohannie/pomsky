<?php
// app/Models/DogPhoto.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DogPhoto extends Model {
    protected $fillable = ['dog_id','path','is_primary','sort'];
    public function dog(){ return $this->belongsTo(Dog::class); }
    protected static function booted(){
        static::saving(function(DogPhoto $p){
            if($p->is_primary){
                static::where('dog_id',$p->dog_id)
                    ->when($p->id, fn($q)=>$q->where('id','!=',$p->id))
                    ->update(['is_primary'=>false]);
            }
        });
    }
}
