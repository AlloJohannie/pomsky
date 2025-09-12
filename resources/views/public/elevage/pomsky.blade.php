@extends('layouts.landing', ['title' => 'Présentation du Pomsky'])

@section('content')
@php
  // --- Pick a banner image (with fallbacks) ---
  $bannerCandidates = [
    public_path('photos/pomsky-chiot-lavande-36.jfif'),
    public_path('photos/pomsky-deux-chiots-02.jfif'),
    public_path('photos/proprietaire-portee.jpg'),
  ];
  $bannerPath = collect($bannerCandidates)->first(fn($p) => file_exists($p));
  $bannerUrl  = $bannerPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $bannerPath)) : null;

  // --- Pick the portrait used next to the “Tempérament & besoins” text ---
  $portraitCandidates = [
    public_path('photos/pomsky-portrait.jpg'),
    public_path('photos/pomsky-gros-plan-11.jfif'),
    public_path('photos/pomsky-chiot-studio-30.jfif'),
    public_path('photos/pomsky-chiot-panier-45.jfif'),
  ];
  $portraitPath = collect($portraitCandidates)->first(fn($p) => file_exists($p));
  $portraitUrl  = $portraitPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $portraitPath)) : asset('/images/team/5.png');

  // --- Build a small gallery (6–8 photos) from /public/photos ---
  $all = glob(public_path('photos/*.{jpg,jpeg,png,webp,jfif}'), GLOB_BRACE) ?: [];
  // Sort newest first (roughly) then keep diverse first picks
  rsort($all);
  $gallery = array_slice(array_map(function($p){
    return str_replace(public_path().DIRECTORY_SEPARATOR, '', $p);
  }, $all), 0, 8);
@endphp

{{-- HERO with background image (coherent with other pages) --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  @if($bannerUrl)
    <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>
  @else
    <div class="absolute inset-0 -z-10 bg-body-bg"></div>
  @endif

  <div class="container relative z-10 text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="500">
    <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-white drop-shadow">Le Pomsky</h1>
    <p class="mb-2.5 text-white/90 drop-shadow">
      Un compagnon vif, affectueux et intelligent — croisement entre Husky sibérien et Spitz nain (Pomeranian).
    </p>
  </div>
</section>

{{-- Caractéristiques principales --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="grid md:grid-cols-4 gap-6" data-aos="fade-up" data-aos-duration="500">
      <div class="bg-body-bg p-6 rounded-2xl">
        <h3 class="font-semibold text-xl">Taille & poids</h3>
        <p class="mt-2 text-slate-700">Petit à moyen (variables selon les lignées).</p>
      </div>
      <div class="bg-body-bg p-6 rounded-2xl">
        <h3 class="font-semibold text-xl">Énergie</h3>
        <p class="mt-2 text-slate-700">Modérée à élevée — besoins quotidiens d’activité.</p>
      </div>
      <div class="bg-body-bg p-6 rounded-2xl">
        <h3 class="font-semibold text-xl">Sociabilité</h3>
        <p class="mt-2 text-slate-700">Très attaché à sa famille, aime participer.</p>
      </div>
      <div class="bg-body-bg p-6 rounded-2xl">
        <h3 class="font-semibold text-xl">Intelligence</h3>
        <p class="mt-2 text-slate-700">Apprend vite avec un cadre cohérent & positif.</p>
      </div>
    </div>

    {{-- Image + texte --}}
    <div class="grid lg:grid-cols-2 gap-10 items-center mt-12" data-aos="fade-up" data-aos-duration="500">
      <div>
        <img src="{{ $portraitUrl }}" alt="Pomsky"
             loading="lazy"
             class="rounded-2xl w-full h-auto object-cover">
      </div>
      <div>
        <h2 class="text-3xl md:text-4xl font-semibold">Tempérament & besoins</h2>
        <p class="mt-4 text-slate-700">
          Curieux et joueur, le Pomsky s’épanouit avec des activités variées (promenades, jeux de réflexion, socialisation).
          La cohérence éducative et l’enrichissement mental sont essentiels.
        </p>
        <ul class="mt-4 grid sm:grid-cols-2 gap-2 text-slate-700">
          <li class="flex gap-2">
            <svg class="h-5 w-5 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            Exercice quotidien
          </li>
          <li class="flex gap-2">
            <svg class="h-5 w-5 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            Socialisation précoce
          </li>
          <li class="flex gap-2">
            <svg class="h-5 w-5 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            Éducation positive
          </li>
          <li class="flex gap-2">
            <svg class="h-5 w-5 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            Brossage régulier
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- Mini-galerie (cohérente avec le site) --}}
<section class="bg-white py-12">
  <div class="container">
    <h2 class="text-3xl md:text-4xl font-semibold text-center">Quelques photos</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
      @forelse($gallery as $g)
        <img
          src="{{ asset($g) }}"
          alt="Pomsky"
          loading="lazy"
          class="w-full h-48 object-cover rounded-xl"
        >
      @empty
        <p class="col-span-full text-center text-slate-600">
          Ajoutez des photos dans <code>public/photos</code> pour alimenter cette section.
        </p>
      @endforelse
    </div>
  </div>
</section>

{{-- FAQ raciale --}}
<section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
  <div class="container-small">
    <div class="text-center md:mb-12.5 mb-7.5" data-aos="fade-up" data-aos-duration="500">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl">Questions fréquentes sur la race</h2>
    </div>

    <div class="md:space-y-7.5 space-y-5 hs-accordion-group max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="500">
      {{-- Q1 --}}
      <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
        <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
          <h3 class="md:text-1.5xl text-xl">Perte de poils & entretien&nbsp;?</h3>
          <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full inline-flex items-center justify-center">
            <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
            <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
          </div>
        </button>
        <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
          <p class="mt-5">Mue saisonnière marquée ; brossage hebdomadaire recommandé (plus fréquent en période de mue).</p>
        </div>
      </div>

      {{-- Q2 --}}
      <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
        <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
          <h3 class="md:text-1.5xl text-xl">Compatibilité avec les enfants&nbsp;?</h3>
          <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full inline-flex items-center justify-center">
            <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
            <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
          </div>
        </button>
        <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
          <p class="mt-5">Très bon compagnon familial quand l’énergie est canalisée et que les interactions sont supervisées.</p>
        </div>
      </div>

      {{-- Q3 --}}
      <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
        <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
          <h3 class="md:text-1.5xl text-xl">Besoins d’exercice&nbsp;?</h3>
          <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full inline-flex items-center justify-center">
            <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
            <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
          </div>
        </button>
        <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
          <p class="mt-5">Promenades quotidiennes + jeux cognitifs. Il apprécie l’entraînement au rappel et la marche en laisse.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CTA vers réservation --}}
<section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
  <div class="container text-center" data-aos="fade-up" data-aos-duration="500">
    <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Prêt pour l’aventure&nbsp;?</h2>
    <p class="mb-5">Découvrez les étapes et nos conditions de réservation.</p>
    <a href="{{ url('/reservation-tarifs') }}" class="py-3.5 md:px-7.5 px-6 inline-flex bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
      Comment réserver
    </a>
  </div>
</section>
@endsection
