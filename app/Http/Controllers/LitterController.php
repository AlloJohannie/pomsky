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
                'puppies' => fn ($q) => $q->with(['primaryPhoto', 'latestPhoto'])->orderBy('sort')->orderBy('name'),
            ])
            ->orderByDesc('born_at')->orderByDesc('created_at')
            ->get();

        $availableLitters = $litters->filter(fn ($l) =>
            ($l->puppies()->where('status','available')->count() > 0) || in_array($l->status, ['born','available'])
        );

        $upcomingLitters  = $litters->filter(fn ($l) => in_array($l->status, ['planned','pregnant']));

        // 👇 Nouveau : section "passées" (fermées)
        $closedLitters    = $litters->filter(fn ($l) => $l->status === 'closed');

        return view('public.litters.index', compact('availableLitters', 'upcomingLitters', 'closedLitters'));
    }

    public function show(string $slug)
    {
        $litter = Litter::query() // on permet l’accès même si fermée tant que active
            ->where('slug', $slug)
            ->with([
                'sire:id,name,photo,color,dob,weight_lb',
                'dam:id,name,photo,color,dob,weight_lb',
                'puppies' => fn ($q) => $q->with('photos')->orderBy('sort')->orderBy('name'),
            ])
            ->firstOrFail();

        // pour l’alerte en haut de page :
        $isDisabled = ! $litter->is_active;

        $availableCount = $litter->puppies->where('status','available')->count();

        return view('public.litters.show', compact('litter','availableCount','isDisabled'));
    }
}
