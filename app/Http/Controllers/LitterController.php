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
                'puppies' => fn ($q) => $q->orderBy('sort')->orderBy('name'),
            ])
            ->withCount([
                'puppies as available_puppies_count' => fn ($q) => $q->where('status', 'available'),
            ])
            ->orderByDesc('born_at')
            ->orderByDesc('created_at')
            ->get();

        // Portées "disponibles" = au moins 1 chiot dispo OU statut born/available
        $availableLitters = $litters->filter(function ($l) {
            return ($l->available_puppies_count ?? 0) > 0
                || in_array($l->status, ['born', 'available']);
        });

        // Portées "à venir" = planned/pregnant
        $upcomingLitters = $litters->filter(fn ($l) => in_array($l->status, ['planned','pregnant']));

        return view('public.litters.index', compact('availableLitters', 'upcomingLitters'));
    }

// App\Http\Controllers\LitterController.php
public function show(string $slug)
{
    $litter = Litter::public()
        ->with([
            'sire','dam',
            'puppies' => fn ($q) => $q->orderBy('sort'),
        ])
        ->where('slug', $slug)
        ->firstOrFail();

    return view('public.litters.show', compact('litter'));
}

}
