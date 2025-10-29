@extends('layouts.landing', ['title' => $litter->code])

@section('content')
@include('public.partials.status-maps')
@if($isDisabled)
  <div class="bg-yellow-100 border border-yellow-300 text-yellow-800 px-4 py-3 rounded mb-4">
    Cette portée est désactivée. Réactivez-la dans l’administration pour la rendre visible sur les pages de listes.
  </div>
@endif
@php
  // Photo d’un chien (ou logo)
  if (! function_exists('dogPhotoOrLogo')) {
      function dogPhotoOrLogo($dog) {
          if ($dog?->photo && file_exists(public_path('storage/'.$dog->photo))) {
              return asset('storage/'.$dog->photo);
          }
          return asset('images/logo/logo_large.jpg');
      }
  }

  // Libellé de format
  if (! function_exists('litterFormatLabel')) {
      function litterFormatLabel($litter) {
          $label = $litter->format_label ?? $litter->format ?? null;
          return match ($label) {
              'standard','Standard'   => 'Standard',
              'miniature','Miniature' => 'Miniature',
              'toy','Toy'             => 'Toy',
              default                 => null,
          };
      }
  }
@endphp
@php
  // Libellés FR des statuts de portée
  $lStatusLabel = [
    'planned'   => 'Planifiée',
    'pregnant'  => 'Gestante',
    'born'      => 'Née',
    'available' => 'Disponible',
    'reserved'  => 'Réservée',
    'closed'    => 'Fermée',
  ];

  // (optionnel) classes si tu veux harmoniser les couleurs
  $lStatusClass = [
    'planned'   => 'bg-yellow-100 text-yellow-800',
    'pregnant'  => 'bg-yellow-100 text-yellow-800',
    'born'      => 'bg-green-100 text-green-800',
    'available' => 'bg-green-100 text-green-800',
    'reserved'  => 'bg-blue-100 text-blue-800',
    'closed'    => 'bg-neutral-200 text-neutral-800',
  ];

  // Libellés FR des statuts de chiot
  $pStatusLabel = [
    'available'     => 'Disponible',
    'reserved'      => 'Réservé',
    'adopted'       => 'Adopté',
    'hold'          => 'En attente',
    'not_available' => 'Non disponible',
  ];

  // (optionnel) classes pour les chiots
  $pStatusClass = [
    'available'     => 'bg-green-100 text-green-800',
    'reserved'      => 'bg-blue-100 text-blue-800',
    'adopted'       => 'bg-neutral-200 text-neutral-800',
    'hold'          => 'bg-yellow-100 text-yellow-800',
    'not_available' => 'bg-neutral-100 text-neutral-700',
  ];
@endphp

<x-hero
  title="Nos portées"
  subtitle="Portées disponibles et à venir."
  bg="{{ asset('photos/proprietaire-portee.jpg') }}"
  size="lg"
/>
<section class="bg-white py-17.5 md:py-12.5">
  
  <div class="container">
  <a href="{{ route('litters.index') }}"
     class="inline-flex items-center gap-2 rounded-2xl border border-neutral-200 px-3.5 py-2 text-sm font-medium text-dark hover:bg-neutral-50">
    Retour aux portées
  </a>
  <br><br>
    {{-- Titre + statut (même style) --}}
    <div class="flex items-center justify-between mb-6 gap-3">
      <div class="min-w-0">
        <h1 class="lg:text-5xl md:text-4xl text-3xl font-bold truncate">{{ $litter->code }}</h1>
        @php $fmt = litterFormatLabel($litter); @endphp
        @if($fmt)
          <div class="mt-2 inline-flex items-center text-xs px-2.5 py-1 rounded-full bg-neutral-100 text-neutral-700">
            Format&nbsp;: {{ $fmt }}
          </div>
        @endif
      </div>

      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm {{ $lStatusClass[$litter->status] ?? 'bg-neutral-200 text-neutral-800' }}">
        {{ $lStatusLabel[$litter->status] ?? ucfirst($litter->status) }}
      </span>
    </div>

    <div class="grid md:grid-cols-3 gap-7.5">
      <div class="md:col-span-2">

        @if($litter->description)
          <div class="bg-white rounded-2xl border border-neutral-200 p-5 mb-6">
            <h2 class="text-xl font-semibold mb-3">À propos de la portée</h2>
            <div class="prose max-w-none">{!! nl2br(e($litter->description)) !!}</div>
          </div>
        @endif

        @php $puppies = $litter->puppies ?? collect(); @endphp
        @if($puppies->count())
          <div class="bg-white rounded-2xl border border-neutral-200 p-5">
            <h2 class="text-xl font-semibold mb-4">Chiots</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-2 gap-6">
              @foreach($puppies as $puppy)
              @php
                // 1 seule photo par semaine : on trie par semaine croissante
                $photosByWeek = $puppy->photos->sortBy(fn($p) => $p->week ?? 999);
                $cover  = $puppy->cover_photo_url;
                $weekLabel = fn($w) => is_null($w) ? null : ($w === 0 ? 'Naissance' : "Semaine $w");
              @endphp

            <div class="group overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm">
              <div class="relative">
                <img src="{{ $cover }}"
                    class="w-full aspect-[4/3] object-cover cursor-zoom-in"
                    alt="{{ $puppy->name ?: 'Chiot' }}"
                    data-lightbox-src="{{ $cover }}"
                    data-lightbox-caption="{{ $puppy->name ? ($puppy->name.' – cover') : 'Cover' }}">
                <div class="absolute top-4 left-4 flex gap-2">
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

              <div class="p-5 space-y-3">
                <div class="flex items-center justify-between">
                  <div class="font-semibold text-lg">{{ $puppy->name ?: 'Chiot' }}</div>
                  {{-- Galerie (1 par semaine, triée) --}}
                  @if($photosByWeek->count())
                    <div class="mt-2">
                      <div class="flex flex-wrap gap-2">
                        @foreach($photosByWeek as $ph)
                          @php $full = asset('storage/'.$ph->path); @endphp
                          <button type="button"
                            class="relative w-20 h-20 rounded-lg overflow-hidden border border-neutral-200 bg-neutral-50"
                            data-lightbox-src="{{ $full }}"
                            data-lightbox-caption="{{ $weekLabel($ph->week) }}">
                            <img src="{{ $full }}" loading="lazy" class="w-full h-full object-cover" alt="">
                            @if(!is_null($ph->week))
                              <span class="absolute bottom-1 left-1 text-[10px] px-1.5 py-0.5 rounded bg-black/60 text-white">
                                {{ $weekLabel($ph->week) }}
                              </span>
                            @endif
                            @if($ph->is_primary)
                              <span class="absolute top-1 right-1 text-[10px] px-1.5 py-0.5 rounded bg-emerald-600/90 text-white">
                                Cover
                              </span>
                            @endif
                          </button>
                        @endforeach
                      </div>
                    </div>
                  @endif

                </div>

                <ul class="text-sm text-slate-700 space-y-1">
                  @php
                    $cents = $puppy->price_cents;
                    $priceFormatted = !is_null($cents) ? number_format($cents , 2, ',', ' ') . ' $' : null;
                  @endphp
                  @if($puppy->color) <li><strong>Couleur :</strong> {{ $puppy->color }}</li> @endif
                  @if(!is_null($priceFormatted)) <li><strong>Prix :</strong> {{ $priceFormatted }}</li> @endif
                </ul>

                @if($puppy->description)
                  <div class="text-sm text-slate-700 leading-relaxed">{!! nl2br(e($puppy->description)) !!}</div>
                @endif
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @else
      <div class="text-slate-600">Aucun chiot listé pour cette portée pour le moment.</div>
    @endif
  </div>

  <aside class="md:col-span-1">
    
    <div class="bg-body-bg rounded-2xl p-5 mt-5">
      <h3 class="font-semibold mb-3">Informations</h3>
      <ul class="space-y-1 text-slate-700 text-sm">
        @php $fmt = litterFormatLabel($litter); @endphp
        @if($fmt)                    <li><strong>Format :</strong> {{ $fmt }}</li>@endif
        @if($litter->born_at)        <li><strong>Nés le :</strong> {{ \Illuminate\Support\Carbon::parse($litter->born_at)->translatedFormat('d F Y') }}</li>@endif
        @if($litter->ready_at)       <li><strong>Prêts à partir :</strong> {{ \Illuminate\Support\Carbon::parse($litter->ready_at)->translatedFormat('d F Y') }}</li>@endif
        @if(!is_null($litter->puppies_count)) <li><strong>Nombre de chiots :</strong> {{ $litter->puppies_count }}</li>@endif
      </ul>

      {{-- @if(in_array($litter->status, ['available','born','pregnant','planned']))
        <div class="mt-5">
          <a href="{{ url('/#comment-reserver') }}"
            class="block text-center rounded-2xl bg-dark text-white px-6 py-4 text-base md:text-lg hover:text-primary transition">
            Faire une demande de réservation
          </a>
        </div>
      @endif --}}
    </div>
    <div class="bg-white rounded-2xl border border-neutral-200 p-5">
      <h2 class="text-xl font-semibold mb-4">Parents</h2>

      {{-- Père --}}
      <div class="mb-6">
        <div class="rounded-xl overflow-hidden bg-neutral-100 ring-1 ring-neutral-200">
          <img src="{{ dogPhotoOrLogo($litter->sire) }}" alt="Père: {{ $litter->sire->name ?? '-' }}"
              class="w-full aspect-[4/3] object-cover">
        </div>
        <div class="mt-3">
          <div class="text-xs text-slate-500">Père</div>
          <div class="font-semibold text-lg">{{ $litter->sire->name ?? '-' }}</div>
          @if($litter->sire)
            <ul class="text-sm text-slate-700 space-y-0.5 mt-1">
              @if($litter->sire->color) <li>Couleur&nbsp;: {{ $litter->sire->color }}</li> @endif
              @if($litter->sire->dob)   <li>Né&nbsp;: {{ \Illuminate\Support\Carbon::parse($litter->sire->dob)->translatedFormat('d F Y') }}</li> @endif
              @if($litter->sire->weight_lb)
                <li>Poids&nbsp;: {{ rtrim(rtrim(number_format((float)$litter->sire->weight_lb, 1, '.', ''), '0'), '.') }} lb</li>
              @endif
            </ul>
          @endif
        </div>
      </div>

      {{-- Mère --}}
      <div>
        <div class="rounded-xl overflow-hidden bg-neutral-100 ring-1 ring-neutral-200">
          <img src="{{ dogPhotoOrLogo($litter->dam) }}" alt="Mère: {{ $litter->dam->name ?? '-' }}"
              class="w-full aspect-[4/3] object-cover">
        </div>
        <div class="mt-3">
          <div class="text-xs text-slate-500">Mère</div>
          <div class="font-semibold text-lg">{{ $litter->dam->name ?? '-' }}</div>
          @if($litter->dam)
            <ul class="text-sm text-slate-700 space-y-0.5 mt-1">
              @if($litter->dam->color) <li>Couleur&nbsp;: {{ $litter->dam->color }}</li> @endif
              @if($litter->dam->dob)   <li>Née&nbsp;: {{ \Illuminate\Support\Carbon::parse($litter->dam->dob)->translatedFormat('d F Y') }}</li> @endif
              @if($litter->dam->weight_lb)
                <li>Poids&nbsp;: {{ rtrim(rtrim(number_format((float)$litter->dam->weight_lb, 1, '.', ''), '0'), '.') }} lb</li>
              @endif
            </ul>
          @endif
        </div>
      </div>
    </div>

  </aside>

    </div>
  </div>
</section>
@endsection
