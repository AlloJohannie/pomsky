<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function femelles()
    {
        $dogs = Dog::where('sex','female')->where('is_active', true)->orderBy('name')->get();
        return view('public.dogs.index', ['title'=>'Femelles', 'dogs'=>$dogs]);
    }

    public function males()
    {
        $dogs = Dog::where('sex','male')->where('is_active', true)->orderBy('name')->get();
        return view('public.dogs.index', ['title'=>'Mâles', 'dogs'=>$dogs]);
    }
}
