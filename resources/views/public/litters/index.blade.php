@extends('layouts.landing', ['title' => 'Nos portées'])

@section('content')
@php
  $lStatusLabel = [
    'planned'   => 'Planifiée',
    'pregnant'  => 'Gestante',
    'born'      => 'Née',
    'available' => 'Disponible',
  ];
  $lStatusClass = [
    'planned'   => 'bg-yellow-100 text-yellow-800',
    'pregnant'  => 'bg-yellow-100 text-yellow-800',
    'born'      => 'bg-green-100 text-green-800',
    'available' => 'bg-green-100 text-green-800',
  ];
  $pStatusLabel = [
    'available'     => 'Disponible',
    'reserved'      => 'Réservé',
    'adopted'       => 'Adopté',
    'hold'          => 'En attente',
    'not_available' => 'Non disponible',
  ];
  $pStatusClass = [
    'available'     => 'bg-green-100 text-green-800',
    'reserved'      => 'bg-blue-100 text-blue-800',
    'adopted'       => 'bg-neutral-200 text-neutral-800',
    'hold'          => 'bg-yellow-100 text-yellow-800',
    'not_available' => 'bg-neutral-100 text-neutral-700',
  ];
@endphp

{{-- Hero Section avec image de fond --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  <div class="absolute inset-0 -z-10 bg-center bg-cover"
       style="background-image:url('{{ asset('photos/proprietaire-portee.jpg') }}');"></div>
  <div class="absolute inset-0 -z-0 bg-black/30"></div>

  <div class="container relative z-10">
    <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-center text-white drop-shadow">
      Nos portées
    </h1>
  </div>
</section>

<section class="bg-white py-12">
  <div class="container space-y-14">
    {{-- Portées disponibles --}}
    <div>
      <h2 class="text-3xl font-bold mb-6">Portées disponibles</h2>

      @if($availableLitters->isEmpty())
        <div class="text-slate-600">Aucune portée disponible pour le moment.</div>
      @else
        <div class="space-y-8">
          @foreach($availableLitters as $litter)
            <div class="bg-white rounded-2xl border border-neutral-200 p-5 shadow-sm">
              {{-- En-tête de la portée --}}
              <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="min-w-0">
                  <a href="{{ route('litters.show', $litter->slug) }}"
                     class="text-2xl font-semibold hover:underline truncate">
                    {{ $litter->code }}
                  </a>
                  <div class="mt-1 text-sm text-slate-600">
                    {{-- Parents (photos + noms) --}}
                    <div class="flex items-center gap-5">
                      <div class="flex items-center gap-2">
                        <div class="size-16 rounded-full overflow-hidden bg-neutral-100 ring-1 ring-neutral-200">
                          <img
                            src="{{ $litter->sire?->photo ? asset('storage/'.$litter->sire->photo) : '/images/team/5.png' }}"
                            class="w-full h-full object-cover"
                            alt="Père: {{ $litter->sire->name ?? '-' }}"
                          >
                        </div>
                        <div class="leading-tight">
                          <div class="text-xs text-slate-500">Père</div>
                          <div class="font-medium">{{ $litter->sire->name ?? '-' }}</div>
                        </div>
                      </div>

                      <div class="flex items-center gap-2">
                        <div class="size-16 rounded-full overflow-hidden bg-neutral-100 ring-1 ring-neutral-200">
                          <img
                            src="{{ $litter->dam?->photo ? asset('storage/'.$litter->dam->photo) : '/images/team/6.png' }}"
                            class="w-full h-full object-cover"
                            alt="Mère: {{ $litter->dam->name ?? '-' }}"
                          >
                        </div>
                        <div class="leading-tight">
                          <div class="text-xs text-slate-500">Mère</div>
                          <div class="font-medium">{{ $litter->dam->name ?? '-' }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <span class="shrink-0 rounded-full text-sm px-3 py-1 {{ $lStatusClass[$litter->status] ?? 'bg-neutral-200 text-neutral-800' }}">
                  {{ $lStatusLabel[$litter->status] ?? ucfirst($litter->status) }}
                </span>
              </div>

              {{-- Grille de chiots : PHOTOS GRANDES, sans description ni prix --}}
              @if($litter->puppies->count())
                <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                  @foreach($litter->puppies as $puppy)
                    <div class="group overflow-hidden rounded-xl border border-neutral-200 bg-white">
                      <div class="relative">
                        <div class="w-full h-64 md:h-72 bg-neutral-100">
                          <img
                            src="{{ $puppy->photo ? asset('storage/'.$puppy->photo) : '/images/about/12.png' }}"
                            class="w-full h-full object-cover"
                            alt="{{ $puppy->name ?: 'Chiot' }}"
                          >
                        </div>
                        {{-- Badges en surimpression --}}
                        <div class="absolute top-3 left-3 flex gap-2">
                          @if($puppy->sex)
                            <span class="text-xs px-2 py-1 rounded-full bg-black/70 text-white">
                              {{ $puppy->sex === 'male' ? 'Mâle' : 'Femelle' }}
                            </span>
                          @endif
                          <span class="text-xs px-2 py-1 rounded-full {{ $pStatusClass[$puppy->status] ?? 'bg-neutral-100 text-neutral-700' }}">
                            {{ $pStatusLabel[$puppy->status] ?? $puppy->status }}
                          </span>
                        </div>
                      </div>
                      <div class="p-3">
                        <div class="font-medium truncate">{{ $puppy->name ?: 'Chiot' }}</div>
                      </div>
                    </div>
                  @endforeach
                </div>
              @endif

              <div class="mt-5">
                <a href="{{ route('litters.show', $litter->slug) }}"
                   class="inline-block rounded-2xl bg-dark text-white px-5 py-3 hover:text-primary transition">
                  Voir la portée
                </a>
              </div>
            </div>
          @endforeach
        </div>
      @endif
    </div>

    {{-- Portées à venir --}}
    <div>
      <h2 class="text-3xl font-bold mb-6">Portées à venir</h2>

      @if($upcomingLitters->isEmpty())
        <div class="text-slate-600">Aucune portée à venir pour le moment.</div>
      @else
        <div class="space-y-6">
          @foreach($upcomingLitters as $litter)
            <div class="bg-white rounded-2xl border border-neutral-200 p-5 shadow-sm">
              <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="min-w-0">
                  <div class="text-2xl font-semibold truncate">{{ $litter->code }}</div>
                  {{-- Parents (photos + noms) --}}
                  <div class="mt-2 text-sm text-slate-600">
                    <div class="flex items-center gap-5">
                      <div class="flex items-center gap-2">
                        <div class="size-16 rounded-full overflow-hidden bg-neutral-100 ring-1 ring-neutral-200">
                          <img
                            src="{{ $litter->sire?->photo ? asset('storage/'.$litter->sire->photo) : '/images/team/5.png' }}"
                            class="w-full h-full object-cover"
                            alt="Père: {{ $litter->sire->name ?? '-' }}"
                          >
                        </div>
                        <div class="leading-tight">
                          <div class="text-xs text-slate-500">Père</div>
                          <div class="font-medium">{{ $litter->sire->name ?? '-' }}</div>
                        </div>
                      </div>

                      <div class="flex items-center gap-2">
                        <div class="size-16 rounded-full overflow-hidden bg-neutral-100 ring-1 ring-neutral-200">
                          <img
                            src="{{ $litter->dam?->photo ? asset('storage/'.$litter->dam->photo) : '/images/team/6.png' }}"
                            class="w-full h-full object-cover"
                            alt="Mère: {{ $litter->dam->name ?? '-' }}"
                          >
                        </div>
                        <div class="leading-tight">
                          <div class="text-xs text-slate-500">Mère</div>
                          <div class="font-medium">{{ $litter->dam->name ?? '-' }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                {{-- <span class="shrink-0 rounded-full text-sm px-3 py-1 {{ $lStatusClass[$litter->status] ?? 'bg-neutral-200 text-neutral-800' }}">
                  {{ $lStatusLabel[$litter->status] ?? ucfirst($litter->status) }}
                </span> --}}
              </div>

              <div class="mt-3 text-slate-700">
                Portée à venir — restez à l’affût!
              </div>
            </div>
          @endforeach
        </div>
      @endif
    </div>
  </div>
</section>
@endsection
