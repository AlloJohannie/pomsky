@extends('layouts.landing', ['title' => $title ?? 'Chiens'])
<x-hero
  chip="Élevage"
  title="{{ $title ?? 'Chiens' }}"
  subtitle="Découvrez nos reproducteurs {{ \Illuminate\Support\Str::lower($title ?? '') }} actifs."
  size="md"
/>

@section('content')
<section class="bg-white py-17.5 md:py-22.5">
  <div class="container">
    <!-- En-tête -->
    <div class="mb-7.5">
      <div class="inline-flex bg-primary text-dark px-3 py-1 rounded-full text-sm font-medium">Élevage</div>
      <h1 class="mt-3 lg:text-5.5xl md:text-4.6xl text-3.4xl">{{ $title ?? 'Chiens' }}</h1>
      <p class="mt-2 text-slate-700">Découvrez nos reproducteurs {{ Str::lower($title ?? '') }} actifs.</p>
    </div>

    <!-- Filtres rapides -->
    <div class="mb-7.5 flex gap-2.5">
      <a href="{{ route('dogs.femelles') }}"
         class="px-4 py-2 rounded-2xl border @if(($title ?? '')==='Femelles') bg-dark text-white border-dark @else border-neutral-200 hover:bg-neutral-50 @endif">
        Femelles
      </a>
      <a href="{{ route('dogs.males') }}"
         class="px-4 py-2 rounded-2xl border @if(($title ?? '')==='Mâles') bg-dark text-white border-dark @else border-neutral-200 hover:bg-neutral-50 @endif">
        Mâles
      </a>
      <a href="{{ route('litters.index') }}" class="px-4 py-2 rounded-2xl border border-neutral-200 hover:bg-neutral-50">Voir les portées</a>
    </div>

    @if($dogs->isEmpty())
      <div class="bg-body-bg rounded-2xl p-10 text-center">
        Aucun chien à afficher pour le moment.
      </div>
    @else
      <!-- Grille chiens -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7.5">
        @foreach ($dogs as $dog)
          @php
            $img = $dog->photo ? asset('storage/'.$dog->photo) : '/images/team/5.png';
            $dob = $dog->dob ? \Illuminate\Support\Carbon::parse($dog->dob) : null;
            $age = $dob ? $dob->age : null;
          @endphp

          <div class="bg-body-bg rounded-2xl p-5 hover:bg-white border border-transparent hover:border-neutral-200 transition">
            <img src="{{ $img }}" alt="{{ $dog->name }}"
                 class="w-full h-56 object-cover rounded-xl mb-4">

            <div class="flex items-center justify-between">
              <h3 class="text-2xl font-semibold">{{ $dog->name }}</h3>
              <span class="px-2 py-1 rounded-full text-xs
                @class([
                  'bg-pink-100 text-pink-800' => $dog->sex === 'female',
                  'bg-blue-100 text-blue-800' => $dog->sex === 'male',
                ])">
                {{ $dog->sex === 'female' ? 'Femelle' : 'Mâle' }}
              </span>
            </div>

            <ul class="mt-3 text-slate-700 text-sm space-y-1">
              @if($dog->color)
                <li><strong>Couleur :</strong> {{ $dog->color }}</li>
              @endif
              @if($dob)
                <li>
                  <strong>Naissance :</strong>
                  {{ $dob->translatedFormat('d F Y') }}
                  @if(!is_null($age)) ({{ $age }} an{{ $age > 1 ? 's' : '' }}) @endif
                </li>
              @endif
              @if(!is_null($dog->weight_kg))
                <li><strong>Poids :</strong> {{ rtrim(rtrim(number_format($dog->weight_kg,2,'.',' '),'0'),'.') }} kg</li>
              @endif
              <li>
                <strong>Statut :</strong>
                <span class="@class(['text-green-700'=> $dog->is_active, 'text-slate-500'=>!$dog->is_active])">
                  {{ $dog->is_active ? 'Actif' : 'Retiré' }}
                </span>
              </li>
            </ul>

            @if($dog->description)
              <p class="mt-3 text-slate-700 line-clamp-3">{{ $dog->description }}</p>
            @endif
          </div>
        @endforeach
      </div>
    @endif
  </div>
</section>
@endsection
