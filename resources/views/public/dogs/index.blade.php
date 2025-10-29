@extends('layouts.landing', ['title' => $title ?? 'Chiens'])

@section('content')
@php
  use Illuminate\Support\Str;

  // --- BANNIÈRE : choisit une image selon l'onglet ---
  $bannerCandidates = match(($title ?? '')) {
    'Femelles' => [
      public_path('photos/pomsky-chiot-fleurs-31.jpg'),
      public_path('photos/pomsky-fleur-printemps-01.jpg'),
    ],
    'Mâles' => [
      public_path('photos/pomsky-chiot-lavande-49.jpg'),
      public_path('photos/pomsky-gros-plan-11.jpg'),
    ],
    default => [
      public_path('photos/proprietaire-portee.jpg'),
      public_path('photos/pomsky-deux-chiots-02.jpg'),
    ],
  };
  $bannerPath = collect($bannerCandidates)->first(fn($p) => file_exists($p));
  $bannerUrl  = $bannerPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $bannerPath)) : null;

  if (!function_exists('dogImageUrl')) {
    function dogImageUrl($dog) {
      return ($dog->photo && file_exists(public_path('storage/'.$dog->photo)))
        ? asset('storage/'.$dog->photo)
        : asset('images/logo/logo_large.jpg'); // fallback
    }
  }

  // Group dogs by size
  $groups = [
    'standard'  => $dogs->where('size', 'standard'),
    'miniature' => $dogs->where('size', 'miniature'),
    'toy'       => $dogs->where('size', 'toy'),
  ];

  // Optional: dogs without size
  $unsized = $dogs->whereNotIn('size', ['standard','miniature','toy'])->filter();
@endphp
{{-- HERO / BANDEAU --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  @if($bannerUrl)
    <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>
  @else
    <div class="absolute inset-0 -z-10 bg-body-bg"></div>
  @endif

  <div class="container relative z-10">
    <div class="text-center">
      <div class="inline-flex bg-primary text-dark px-3 py-1 rounded-full text-sm font-medium">Élevage</div>
      <h1 class="mt-3 lg:text-5.5xl md:text-4.6xl text-3.4xl text-white drop-shadow">
        {{ $title ?? 'Chiens' }}
      </h1>
      <p class="mt-2 text-white/90 drop-shadow">
        Découvrez nos reproducteurs {{ Str::lower($title ?? '') }} actifs.
      </p>
    </div>

    {{-- Onglets dans le bandeau --}}
    <div class="mt-6 flex gap-2.5 justify-center">
      <a href="{{ route('dogs.femelles') }}"
         class="px-4 py-2 rounded-2xl border @if(($title ?? '')==='Femelles') bg-dark text-white border-dark @else border-white/50 text-white hover:bg-white/10 @endif">
        Femelles
      </a>
      <a href="{{ route('dogs.males') }}"
         class="px-4 py-2 rounded-2xl border @if(($title ?? '')==='Mâles') bg-dark text-white border-dark @else border-white/50 text-white hover:bg-white/10 @endif">
        Mâles
      </a>
      <a href="{{ route('litters.index') }}"
         class="px-4 py-2 rounded-2xl border border-white/50 text-white hover:bg-white/10">
        Voir les portées
      </a>
    </div>
  </div>
</section>
<section class="bg-white py-17.5 md:py-22.5">
  <div class="container">
    @php
      $hasAny = $groups['standard']->count() || $groups['miniature']->count() || $groups['toy']->count() || $unsized->count();
    @endphp

    @unless($hasAny)
      <div class="bg-body-bg rounded-2xl p-10 text-center">
        Aucun chien à afficher pour le moment.
      </div>
    @else
      {{-- SECTION: Standard --}}
      @if($groups['standard']->count())
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Format Standard</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7.5 mb-10">
          @foreach ($groups['standard'] as $dog)
            <a href="{{ route('dogs.show', $dog) }}"
              class="group flex flex-col h-full bg-body-bg rounded-2xl p-5 hover:bg-white border border-transparent hover:border-neutral-200 transition">
              <img src="{{ dogImageUrl($dog) }}"
                   alt="Photo de {{ $dog->name }}"
                   loading="lazy"
                   class="w-full aspect-[1/1] object-cover rounded-xl mb-4">

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
                @if($dog->color) <li><strong>Couleur :</strong> {{ $dog->color }}</li> @endif
                @if(!is_null($dog->weight_lb))
                  <li><strong>Poids :</strong> {{ rtrim(rtrim(number_format((float)$dog->weight_lb,1,'.',''),'0'),'.') }} lb</li>
                @endif
              </ul>

              @if($dog->description)
                <p class="mt-3 text-slate-700 line-clamp-4">{{ $dog->description }}</p>
              @endif
              <div class="mt-auto"></div> 
            </a>
          @endforeach
        </div>
      @endif

      {{-- SECTION: Miniature --}}
      @if($groups['miniature']->count())
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Format Miniature</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7.5 mb-10">
          @foreach ($groups['miniature'] as $dog)
            <a href="{{ route('dogs.show', $dog) }}"
              class="group flex flex-col h-full bg-body-bg rounded-2xl p-5 hover:bg-white border border-transparent hover:border-neutral-200 transition">
              <img src="{{ dogImageUrl($dog) }}"
                   alt="Photo de {{ $dog->name }}"
                   loading="lazy"
                   class="w-full aspect-[1/1] object-cover rounded-xl mb-4">

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
                @if($dog->color) <li><strong>Couleur :</strong> {{ $dog->color }}</li> @endif
                @if(!is_null($dog->weight_lb))
                  <li><strong>Poids :</strong> {{ rtrim(rtrim(number_format((float)$dog->weight_lb,1,'.',''),'0'),'.') }} lb</li>
                @endif
              </ul>

              @if($dog->description)
                <p class="mt-3 text-slate-700 line-clamp-4">{{ $dog->description }}</p>
              @endif
              <div class="mt-auto"></div> {{-- pousse le bas pour homogénéiser --}}
            </a>
          @endforeach
        </div>
      @endif

      {{-- SECTION: Toy --}}
      @if($groups['toy']->count())
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Format Toy</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7.5 mb-10">
          @foreach ($groups['toy'] as $dog)
            <a href="{{ route('dogs.show', $dog) }}"
                class="group flex flex-col h-full bg-body-bg rounded-2xl p-5 hover:bg-white border border-transparent hover:border-neutral-200 transition">
              <img src="{{ dogImageUrl($dog) }}"
                   alt="Photo de {{ $dog->name }}"
                   loading="lazy"
                   class="w-full aspect-[1/1] object-cover rounded-xl mb-4">

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
                @if($dog->color) <li><strong>Couleur :</strong> {{ $dog->color }}</li> @endif
                @if(!is_null($dog->weight_lb))
                  <li><strong>Poids :</strong> {{ rtrim(rtrim(number_format((float)$dog->weight_lb,1,'.',''),'0'),'.') }} lb</li>
                @endif
              </ul>

              @if($dog->description)
                <p class="mt-3 text-slate-700 line-clamp-4">{{ $dog->description }}</p>
              @endif
              <div class="mt-auto"></div> {{-- pousse le bas pour homogénéiser --}}
            </a>
          @endforeach
        </div>
      @endif

      {{-- (Optionnel) Non précisé --}}
      @if($unsized->count())
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Format non précisé</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7.5 mb-10">
          @foreach ($unsized as $dog)
            <a href="{{ route('dogs.show', $dog) }}"
              class="group flex flex-col h-full bg-body-bg rounded-2xl p-5 hover:bg-white border border-transparent hover:border-neutral-200 transition">
              <img src="{{ dogImageUrl($dog) }}"
                   alt="Photo de {{ $dog->name }}"
                   loading="lazy"
                   class="w-full aspect-[1/1] object-cover rounded-xl mb-4">

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
                @if($dog->color) <li><strong>Couleur :</strong> {{ $dog->color }}</li> @endif
                @if(!is_null($dog->weight_lb))
                  <li><strong>Poids :</strong> {{ rtrim(rtrim(number_format((float)$dog->weight_lb,1,'.',''),'0'),'.') }} lb</li>
                @endif
              </ul>

            @if($dog->description)
              <p class="mt-3 text-slate-700 line-clamp-4">{{ $dog->description }}</p>
            @endif
            <div class="mt-auto"></div> {{-- pousse le bas pour homogénéiser --}}
          </a>
          @endforeach
        </div>
      @endif

    @endunless
  </div>
</section>
@endsection
