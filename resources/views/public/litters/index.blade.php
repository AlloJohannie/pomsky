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
  <div class="container space-y-12">
    {{-- Portées disponibles --}}
    <div>
      <h2 class="text-3xl font-bold mb-5">Portées disponibles</h2>

      @if($availableLitters->isEmpty())
        <div class="text-slate-600">Aucune portée disponible pour le moment.</div>
      @else
        <div class="space-y-6">
          @foreach($availableLitters as $litter)
            <div class="bg-body-bg rounded-2xl p-5 border border-neutral-200 hover:bg-white transition">
              <div class="flex items-start justify-between gap-4">
                <div>
                  <a href="{{ route('litters.show', $litter->slug) }}"
                     class="text-2xl font-semibold hover:underline">
                    {{ $litter->code }}
                  </a>
                  <div class="mt-1 text-sm text-slate-600">
                    <div><strong>Père :</strong> {{ $litter->sire->name ?? '—' }}</div>
                    <div><strong>Mère :</strong> {{ $litter->dam->name ?? '—' }}</div>
                  </div>
                </div>
                <span class="shrink-0 rounded-full text-sm px-3 py-1 {{ $lStatusClass[$litter->status] ?? 'bg-neutral-200 text-neutral-800' }}">
                  {{ $lStatusLabel[$litter->status] ?? ucfirst($litter->status) }}
                </span>
              </div>

              {{-- Chiots (mise en valeur, SANS prix) --}}
              @if($litter->puppies->count())
                <div class="mt-4 grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                  @foreach($litter->puppies as $puppy)
                    <div class="bg-white border border-neutral-200 rounded-xl p-3">
                      <div class="flex items-start gap-3">
                        <div class="w-16 h-16 rounded-lg overflow-hidden shrink-0 bg-neutral-100">
                          <img
                            src="{{ $puppy->photo ? asset('storage/'.$puppy->photo) : '/images/team/5.png' }}"
                            class="w-full h-full object-cover"
                            alt="{{ $puppy->name }}"
                          >
                        </div>
                        <div class="min-w-0">
                          <div class="flex items-center gap-2">
                            <div class="font-medium truncate">{{ $puppy->name ?: 'Chiot' }}</div>
                            @if($puppy->sex)
                              <span class="text-xs px-2 py-0.5 rounded-full bg-neutral-100 text-neutral-700">
                                {{ $puppy->sex === 'male' ? 'Mâle' : 'Femelle' }}
                              </span>
                            @endif
                            <span class="text-xs px-2 py-0.5 rounded-full {{ $pStatusClass[$puppy->status] ?? 'bg-neutral-100 text-neutral-700' }}">
                              {{ $pStatusLabel[$puppy->status] ?? $puppy->status }}
                            </span>
                          </div>
                          @if($puppy->description)
                            <div class="text-sm text-slate-600 mt-0.5 line-clamp-2">{{ $puppy->description }}</div>
                          @endif
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              @endif

              <div class="mt-4">
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
      <h2 class="text-3xl font-bold mb-5">Portées à venir</h2>

      @if($upcomingLitters->isEmpty())
        <div class="text-slate-600">Aucune portée à venir pour le moment.</div>
      @else
        <div class="space-y-6">
          @foreach($upcomingLitters as $litter)
            <div class="bg-body-bg rounded-2xl p-5 border border-neutral-200">
              <div class="flex items-start justify-between gap-4">
                <div>
                  <div class="text-2xl font-semibold">{{ $litter->code }}</div>
                  <div class="mt-1 text-sm text-slate-600">
                    <div><strong>Père :</strong> {{ $litter->sire->name ?? '—' }}</div>
                    <div><strong>Mère :</strong> {{ $litter->dam->name ?? '—' }}</div>
                  </div>
                </div>
                <span class="shrink-0 rounded-full text-sm px-3 py-1 {{ $lStatusClass[$litter->status] ?? 'bg-neutral-200 text-neutral-800' }}">
                  {{ $lStatusLabel[$litter->status] ?? ucfirst($litter->status) }}
                </span>
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
