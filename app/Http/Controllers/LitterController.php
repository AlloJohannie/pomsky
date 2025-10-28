<?php

namespace App\Http\Controllers;

use App\Models\Litter;

class LitterController extends Controller
{
    public function index()
    {
        $litters = Litter::public()
            ->with([
                'sire:id,name,photo',
                'dam:id,name,photo',
                // charge cover sans gonfler les requêtes
                'puppies' => fn ($q) => $q
                    ->with(['primaryPhoto', 'latestPhoto'])
                    ->orderBy('sort')->orderBy('name'),
            ])
            ->withCount([
                'puppies as available_puppies_count' => fn ($q) => $q->where('status', 'available'),
            ])
            ->orderByDesc('born_at')
            ->orderByDesc('created_at')
            ->get();

        $availableLitters = $litters->filter(fn ($l) =>
            ($l->available_puppies_count ?? 0) > 0 || in_array($l->status, ['born','available'])
        );

        $upcomingLitters = $litters->filter(fn ($l) => in_array($l->status, ['planned','pregnant']));

        return view('public.litters.index', compact('availableLitters', 'upcomingLitters'));
    }

    public function show(string $slug)
    {
        $litter = Litter::public()
            ->with([
                'sire:id,name,photo,color,dob,weight_lb',
                'dam:id,name,photo,color,dob,weight_lb',
                // galerie complète par chiot
                'puppies' => fn ($q) => $q
                    ->with(['photos'])  // tri déjà dans la relation
                    ->orderBy('sort')->orderBy('name'),
            ])
            ->where('slug', $slug)
            ->firstOrFail();

        $availableCount = $litter->puppies->where('status', 'available')->count();

        return view('public.litters.show', compact('litter', 'availableCount'));
    }
}
