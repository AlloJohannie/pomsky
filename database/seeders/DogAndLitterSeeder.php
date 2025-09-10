<?php

namespace Database\Seeders;

use App\Models\Dog;
use App\Models\Litter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DogAndLitterSeeder extends Seeder
{
    public function run(): void
    {
        $sire = Dog::firstOrCreate(['slug'=>'boris'],[
            'name'=>'Boris', 'sex'=>'male', 'is_active'=>true, 'slug'=>'boris'
        ]);
        $dam  = Dog::firstOrCreate(['slug'=>'luna'],[
            'name'=>'Luna', 'sex'=>'female', 'is_active'=>true, 'slug'=>'luna'
        ]);

        Litter::firstOrCreate(['slug'=>'p2025-01'],[
            'code'=>'P2025-01',
            'status'=>'planned',
            'sire_id'=>$sire->id,
            'dam_id'=>$dam->id,
            'puppies_count'=>6,
            'slug'=>Str::slug('P2025-01'),
        ]);
    }
}
