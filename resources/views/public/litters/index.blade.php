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

  // --- Helper couverture de portée : 1ère photo chiot existante ---
  if (!function_exists('litterCoverUrl')) {
    function litterCoverUrl($litter) {
      foreach ($litter->puppies ?? [] as $puppy) {
        if ($puppy->photo && file_exists(public_path('storage/'.$puppy->photo))) {
          return asset('storage/'.$puppy->photo);
        }
      }
      // fallbacks globaux
      foreach ([
        'pomsky-deux-chiots-02.jpg',
        'pomsky-chiot-studio-30.jpg',
        'pomsky-chiot-panier-45.jpg',
        'pomsky-chiot-fleurs-31.jpg',
      ] as $c) {
        if (file_exists(public_path('photos/'.$c))) {
          return asset('photos/'.$c);
        }
      }
      return asset('/images/team/5.png');
    }
  }

  // --- Helper vignette chiot ---
  if (!function_exists('puppyImageUrl')) {
    function puppyImageUrl($puppy) {
      if ($puppy->photo && file_exists(public_path('storage/'.$puppy->photo))) {
        return asset('storage/'.$puppy->photo);
      }
      foreach ([
        'pomsky-chiot-studio-30.jpg',
        'pomsky-chiot-panier-45.jpg',
        'pomsky-chiot-fleurs-31.jpg',
        'pomsky-gros-plan-11.jpg',
      ] as $c) {
        if (file_exists(public_path('photos/'.$c))) {
          return asset('photos/'.$c);
        }
      }
      return asset('/images/team/5.png');
    }
  }
@endphp

{{-- HERO / BANDEAU (cohérent avec Chiens) --}}
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
            <div class="bg-body-bg rounded-2xl overflow-hidden border border-neutral-200 hover:bg-white transition">
              {{-- Couverture de portée (même ratio que Chiens) --}}
              <img src="{{ litterCoverUrl($litter) }}" alt="Portée {{ $litter->code }}"
                   loading="lazy" class="w-full aspect-[16/9] object-cover">

              <div class="p-5">
                <div class="flex items-start justify-between gap-4">
                  <div>
                    <a href="{{ route('litters.show', $litter->slug) }}" class="text-2xl font-semibold hover:underline">
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

                {{-- Chiots (mini-vignettes) --}}
                @php $maxPreview = 6; @endphp
                @if($litter->puppies->count())
                  <div class="mt-4 grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    @foreach($litter->puppies->take($maxPreview) as $puppy)
                      <div class="bg-white border border-neutral-200 rounded-xl p-3">
                        <div class="flex items-start gap-3">
                          <div class="w-12 aspect-square rounded-lg overflow-hidden shrink-0 bg-neutral-100">
                            <img src="{{ puppyImageUrl($puppy) }}" alt="{{ $puppy->name ?: 'Chiot' }}"
                                 loading="lazy" class="w-full h-full object-cover">
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
                              <div class="text-xs text-slate-600 mt-0.5 line-clamp-2">{{ $puppy->description }}</div>
                            @endif
                          </div>
                        </div>
                      </div>
                    @endforeach

                    @if($litter->puppies->count() > $maxPreview)
                      <div class="bg-white border border-dashed border-neutral-300 rounded-xl p-3 flex items-center justify-center text-sm text-slate-600">
                        + {{ $litter->puppies->count() - $maxPreview }} autres
                      </div>
                    @endif
                  </div>
                @endif

                <div class="mt-5">
                  <a href="{{ route('litters.show', $litter->slug) }}"
                     class="inline-block rounded-2xl bg-dark text-white px-5 py-3 hover:text-primary transition">
                    Voir la portée
                  </a>
                </div>
              </div>
            </div>
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
              <img src="{{ litterCoverUrl($litter) }}" alt="Portée {{ $litter->code }}"
                   loading="lazy" class="w-full aspect-[16/9] object-cover">

              <div class="p-5">
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
            </div>
          @endforeach
        </div>
      @endif
    </div>

  </div>
</section>
@endsection
