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

  // --- Image d'une carte chien ---
  if (!function_exists('dogImageUrl')) {
    function dogImageUrl($dog) {
      if ($dog->photo && file_exists(public_path('storage/'.$dog->photo))) {
        return asset('storage/'.$dog->photo);
      }
      $candidates = [
        'pomsky-chiot-studio-30.jpg',
        'pomsky-chiot-panier-45.jpg',
        'pomsky-chiot-fleurs-31.jpg',
        'pomsky-deux-chiots-02.jpg',
        'pomsky-gros-plan-11.jpg',
      ];
      foreach ($candidates as $c) {
        if (file_exists(public_path('photos/'.$c))) {
          return asset('photos/'.$c);
        }
      }
      return asset('/images/team/5.png');
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

{{-- CONTENU --}}
<section class="bg-white py-17.5 md:py-22.5">
  <div class="container">

    @if($dogs->isEmpty())
      <div class="bg-body-bg rounded-2xl p-10 text-center">
        Aucun chien à afficher pour le moment.
      </div>
    @else
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7.5">
        @foreach ($dogs as $dog)
          @php
            $dob = $dog->dob ? \Illuminate\Support\Carbon::parse($dog->dob) : null;
            $age = $dob ? $dob->age : null;
          @endphp

          <div class="bg-body-bg rounded-2xl p-5 hover:bg-white border border-transparent hover:border-neutral-200 transition">
            <img
              src="{{ dogImageUrl($dog) }}"
              alt="Photo de {{ $dog->name }} ({{ $dog->sex === 'female' ? 'femelle' : 'mâle' }})"
              loading="lazy"
              class="w-full aspect-[16/9] object-cover rounded-xl mb-4"
            />

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
                <li><strong>Poids :</strong> {{ (float)$dog->weight_kg }} kg</li>
              @endif
              <li>
                <strong>Statut :</strong>
                <span class="@class(['text-green-700'=> $dog->is_active, 'text-slate-500'=>!$dog->is_active])">
                  {{ $dog->is_active ? 'Actif' : 'Retiré' }}
                </span>
              </li>
            </ul>

            @if($dog->description)
              <p class="mt-3 text-slate-700 line-clamp-2">{{ $dog->description }}</p>
            @endif
          </div>
        @endforeach
      </div>

      {{-- Pagination si utilisée côté contrôleur --}}
      @if(method_exists($dogs, 'links'))
        <div class="mt-10">
          {{ $dogs->withQueryString()->links() }}
        </div>
      @endif
    @endif
  </div>
</section>
@endsection
