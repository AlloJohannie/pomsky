<?php

namespace App\Http\Controllers;

use App\Models\Litter;
use Illuminate\Http\Request;

class LitterController extends Controller
{
    public function index()
    {
        $litters = Litter::with(['sire','dam','photos'])->orderByDesc('born_at')->get();
        return view('public.litters.index', compact('litters'));
    }

    public function show(string $slug)
    {
        $litter = Litter::with(['sire','dam','photos'])->where('slug',$slug)->firstOrFail();
        return view('public.litters.show', compact('litter'));
    }
}
