@extends('layouts.landing', ['title' => 'Nos portées'])

@section('content')

@php
  // Libellés / classes
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

  // --- Bannière (mêmes règles que Femelles/Mâles) ---
  $bannerCandidates = [
    public_path('photos/proprietaire-portee.jpg'),
    public_path('photos/pomsky-deux-chiots-02.jpg'),
    public_path('photos/pomsky-chiot-lavande-36.jpg'),
  ];
  $bannerPath = collect($bannerCandidates)->first(fn($p) => file_exists($p));
  $bannerUrl  = $bannerPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $bannerPath)) : null;

  // --- Helpers images (utilisent maintenant cover_photo_url des chiots) ---
  if (!function_exists('puppyImageUrl')) {
    function puppyImageUrl($puppy) {
      return $puppy?->cover_photo_url ?? asset('images/logo/logo_large.jpg');
    }
  }

  if (!function_exists('litterCoverFromPuppies')) {
    function litterCoverFromPuppies($litter) {
      foreach (($litter->puppies ?? []) as $puppy) {
        $url = $puppy?->cover_photo_url;
        if ($url && !str_contains($url, 'images/logo/logo_large.jpg')) {
          return $url;
        }
      }
      // Fallback (si aucune photo de chiot)
      return asset('images/logo/logo_large.jpg');
    }
  }

  if (!function_exists('dogPhotoOrLogo')) {
    function dogPhotoOrLogo($dog) {
      if ($dog?->photo && file_exists(public_path('storage/'.$dog->photo))) {
        return asset('storage/'.$dog->photo);
      }
      return asset('images/logo/logo_large.jpg');
    }
  }

  // Affichage d’un badge "Format" si dispo (champ `format`/`format_label` sur Litter)
  if (!function_exists('litterFormatLabel')) {
    function litterFormatLabel($litter) {
      // Essaie d’abord un accessor/attribut déjà prévu
      $label = $litter->format_label ?? $litter->format ?? null;
      // Normalise quelques valeurs communes
      return match($label) {
        'standard', 'Standard'   => 'Standard',
        'miniature','Miniature'  => 'Miniature',
        'toy','Toy'              => 'Toy',
        default => null,
      };
    }
  }
@endphp

{{-- HERO / BANDEAU --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  @if($bannerUrl)
    <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>
  @else
    <div class="absolute inset-0 -z-10 bg-body-bg"></div>
  @endif

  <div class="container relative z-10 text-center">
    <div class="inline-flex bg-primary text-dark px-3 py-1 rounded-full text-sm font-medium">Élevage</div>
    <h1 class="mt-3 lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-white drop-shadow">Nos portées</h1>
    <p class="text-white/90 drop-shadow">Chiots issus de parents suivis et socialisés avec soin.</p>

    {{-- Ancres comme des onglets --}}
    <div class="mt-6 flex gap-2.5 justify-center">
      <a href="#disponibles" class="px-4 py-2 rounded-2xl border border-white/50 text-white hover:bg-white/10">Disponibles</a>
      <a href="#venir" class="px-4 py-2 rounded-2xl border border-white/50 text-white hover:bg-white/10">À venir</a>
    </div>
  </div>
</section>

<section class="bg-white py-12">
  <div class="container space-y-12">

    {{-- Portées disponibles --}}
    <div id="disponibles">
      <h2 class="text-3xl font-bold mb-5">Portées disponibles</h2>

      @if($availableLitters->isEmpty())
        <div class="text-slate-600">Aucune portée disponible pour le moment.</div>
      @else
        <div class="grid md:grid-cols-2 gap-7.5">
          @foreach($availableLitters as $litter)
            <a href="{{ route('litters.show', $litter->slug) }}" class="group block">
<div class="bg-body-bg rounded-2xl overflow-hidden border border-neutral-200 group-hover:bg-white transition">

  {{-- Bande parents (comme "À venir") --}}
  <div class="p-2 bg-white">
    <div class="grid grid-cols-2 gap-2">
      <div class="relative">
        <img src="{{ dogPhotoOrLogo($litter->sire) }}"
             alt="Père: {{ $litter->sire->name ?? '-' }}"
             class="w-full aspect-square object-cover rounded-xl">
        <span class="absolute bottom-2 left-2 text-xs px-2 py-1 rounded-full bg-black/60 text-white">Père</span>
      </div>
      <div class="relative">
        <img src="{{ dogPhotoOrLogo($litter->dam) }}"
             alt="Mère: {{ $litter->dam->name ?? '-' }}"
             class="w-full aspect-square object-cover rounded-xl">
        <span class="absolute bottom-2 left-2 text-xs px-2 py-1 rounded-full bg-black/60 text-white">Mère</span>
      </div>
    </div>
  </div>

  <div class="p-5">
    <div class="flex items-start justify-between gap-4">
      <div>
        <div class="text-2xl font-semibold group-hover:underline">{{ $litter->code }}</div>
        <div class="mt-1 text-sm text-slate-600">
          <div><strong>Père :</strong> {{ $litter->sire->name ?? '—' }}</div>
          <div><strong>Mère :</strong> {{ $litter->dam->name ?? '—' }}</div>
        </div>
        @php $fmt = litterFormatLabel($litter); @endphp
        @if($fmt)
          <div class="mt-2 inline-flex items-center text-xs px-2.5 py-1 rounded-full bg-neutral-100 text-neutral-700">
            Format&nbsp;: {{ $fmt }}
          </div>
        @endif
      </div>
      <span class="shrink-0 rounded-full text-sm px-3 py-1 {{ $lStatusClass[$litter->status] ?? 'bg-neutral-200 text-neutral-800' }}">
        {{ $lStatusLabel[$litter->status] ?? ucfirst($litter->status) }}
      </span>
    </div>

    {{-- Mini-galerie : dernières photos des chiots (vignettes seules) --}}
    @php $maxPreview = 6; @endphp
    @if(($litter->puppies?->count() ?? 0) > 0)
      <div class="mt-4 grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-6 gap-3">
        @foreach($litter->puppies->take($maxPreview) as $puppy)
          <div class="relative w-full aspect-square rounded-xl overflow-hidden bg-neutral-100 border border-neutral-200">
            <img src="{{ puppyImageUrl($puppy) }}"
                 alt="{{ $puppy->name ?: 'Chiot' }}"
                 loading="lazy"
                 class="w-full h-full object-cover">
          </div>
        @endforeach

        @if($litter->puppies->count() > $maxPreview)
          <div class="w-full aspect-square rounded-xl border border-dashed border-neutral-300 flex items-center justify-center text-sm text-slate-600 bg-white">
            + {{ $litter->puppies->count() - $maxPreview }}
          </div>
        @endif
      </div>
    @endif

    <div class="mt-5">
      <span class="inline-block rounded-2xl bg-dark text-white px-5 py-3 group-hover:text-primary transition">
        Voir la portée
      </span>
    </div>
  </div>
</div>

            </a>
          @endforeach
        </div>
      @endif
    </div>

    {{-- Portées à venir --}}
    <div id="venir">
      <h2 class="text-3xl font-bold mb-5">Portées à venir</h2>

      @if($upcomingLitters->isEmpty())
        <div class="text-slate-600">Aucune portée à venir pour le moment.</div>
      @else
        <div class="grid md:grid-cols-2 gap-7.5">
          @foreach($upcomingLitters as $litter)
            <div class="bg-body-bg rounded-2xl overflow-hidden border border-neutral-200">
              {{-- Deux grandes images : Père + Mère --}}
              <div class="p-2 bg-white">
                <div class="grid grid-cols-2 gap-2">
                  <div class="relative">
                    <img src="{{ dogPhotoOrLogo($litter->sire) }}"
                         alt="Père: {{ $litter->sire->name ?? '-' }}"
                         class="w-full aspect-square object-cover rounded-xl">
                    <span class="absolute bottom-2 left-2 text-xs px-2 py-1 rounded-full bg-black/60 text-white">Père</span>
                  </div>
                  <div class="relative">
                    <img src="{{ dogPhotoOrLogo($litter->dam) }}"
                         alt="Mère: {{ $litter->dam->name ?? '-' }}"
                         class="w-full aspect-square object-cover rounded-xl">
                    <span class="absolute bottom-2 left-2 text-xs px-2 py-1 rounded-full bg-black/60 text-white">Mère</span>
                  </div>
                </div>
              </div>

              <div class="p-5">
                <div class="flex items-start justify-between gap-4">
                  <div>
                    <div class="text-2xl font-semibold">{{ $litter->code }}</div>
                    <div class="mt-1 text-sm text-slate-600">
                      <div><strong>Père :</strong> {{ $litter->sire->name ?? '—' }}</div>
                      <div><strong>Mère :</strong> {{ $litter->dam->name ?? '—' }}</div>
                    </div>
                    @php $fmt = litterFormatLabel($litter); @endphp
                    @if($fmt)
                      <div class="mt-2 inline-flex items-center text-xs px-2.5 py-1 rounded-full bg-neutral-100 text-neutral-700">
                        Format&nbsp;: {{ $fmt }}
                      </div>
                    @endif
                  </div>
                  <span class="shrink-0 rounded-full text-sm px-3 py-1 {{ $lStatusClass[$litter->status] ?? 'bg-neutral-200 text-neutral-800' }}">
                    {{ $lStatusLabel[$litter->status] ?? ucfirst($litter->status) }}
                  </span>
                </div>

                <div class="mt-3 text-slate-700">
                  Portée à venir — restez à l’affût!
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @endif
    </div>

  </div>
</section>
{{-- Portées passées --}}
@if(isset($closedLitters) && $closedLitters->isNotEmpty())
  <div id="passees" class="pt-6">
    <h2 class="text-3xl font-bold mb-5">Portées passées</h2>
    <div class="grid md:grid-cols-2 gap-7.5">
      @foreach($closedLitters as $litter)
        <a href="{{ route('litters.show', $litter->slug) }}" class="group block">
          <div class="bg-body-bg rounded-2xl overflow-hidden border border-neutral-200 group-hover:shadow-md group-hover:bg-white transition">
            <div class="p-2 bg-white">
              <div class="grid grid-cols-2 gap-2">
                <img src="{{ dogPhotoOrLogo($litter->sire) }}" loading="lazy" class="w-full aspect-square object-cover rounded-xl" alt="">
                <img src="{{ dogPhotoOrLogo($litter->dam) }}"  loading="lazy" class="w-full aspect-square object-cover rounded-xl" alt="">
              </div>
            </div>
            <div class="p-5">
              <div class="flex items-start justify-between gap-4">
                <div>
                  <div class="text-2xl font-semibold group-hover:underline">{{ $litter->code }}</div>
                  <div class="mt-1 text-sm text-slate-600">
                    <div><strong>Père :</strong> {{ $litter->sire->name ?? '—' }}</div>
                    <div><strong>Mère :</strong> {{ $litter->dam->name ?? '—' }}</div>
                  </div>
                </div>
                <span class="shrink-0 rounded-full text-sm px-3 py-1 bg-neutral-200 text-neutral-800">Fermée</span>
              </div>
              <div class="mt-5">
                <span class="inline-block rounded-2xl bg-dark text-white px-5 py-3 group-hover:text-primary transition">Voir la portée</span>
              </div>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endif

@endsection
