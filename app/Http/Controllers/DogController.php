<?php

namespace App\Http\Controllers;

use App\Models\Dog;

class DogController extends Controller
{
    public function index()
    {
        $dogs = \App\Models\Dog::where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('public.dogs.index', [
            'title' => 'Chiens',
            'dogs'  => $dogs,
        ]);
    }
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

    public function show(Dog $dog)  // <— résolu par getRouteKeyName()
    {
        return view('public.dogs.show', compact('dog'));
    }
}
