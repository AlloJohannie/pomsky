@extends('layouts.landing', ['title' => 'Présentation de la propriétaire'])

@section('content')
@php
  // Candidats pour "Propriétaire" (gauche du hero)
  $ownerLeftCandidates = [
    public_path('photos/proprietaire-portee.jpg'), // existe chez toi
    public_path('photos/pomsky-adulte-proprietaire-portrait-32.jfif'),
  ];
  $ownerLeftPath = collect($ownerLeftCandidates)->first(fn($p) => file_exists($p));
  $ownerLeft = $ownerLeftPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $ownerLeftPath)) : null;

  // Candidats pour "Avec les chiens" (droite du hero)
  $ownerRightCandidates = [
    public_path('photos/pomsky-puppy-fleurs-39.jfif'),
    public_path('photos/proprietaire-portee.jpg'),
  ];
  $ownerRightPath = collect($ownerRightCandidates)->first(fn($p) => file_exists($p));
  $ownerRight = $ownerRightPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $ownerRightPath)) : null;

  // Image du CTA (évite de répéter la même photo que le hero)
  $ctaCandidates = [
    public_path('photos/pomsky-chiot-panier-45.jfif'),
    public_path('photos/pomsky-deux-chiots-02.jfif'),
    public_path('photos/proprietaire-portee.jpg'),
  ];
  $ctaPath = collect($ctaCandidates)->first(fn($p) => file_exists($p));
  $ctaImg = $ctaPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $ctaPath)) : null;
@endphp

{{-- HERO en triptyque (inspiré de careers) --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="grid lg:grid-cols-3 lg:gap-5 gap-10 items-center">
@if($ownerLeft)
  <img src="{{ $ownerLeft }}" alt="Propriétaire" class="lg:w-67.5 lg:h-75 w-full md:h-117.5 h-70 rounded-2xl object-cover">
@endif


      <div class="text-center" data-aos="fade-up" data-aos-duration="600">
        <div class="bg-primary py-0.5 px-3.5 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">Notre histoire</div>
        <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Une passion familiale</h1>
        <p class="mb-7.5 max-w-2xl mx-auto">
          Amoureuse des chiens depuis l’enfance, j’ai fondé <strong>Les Petits Pomsky du Québec</strong> pour offrir des compagnons bien dans leurs pattes et bien accompagnés.
        </p>
        <a href="{{ url('/contact') }}" class="py-3.5 md:px-7.5 px-6 inline-flex bg-white font-medium rounded-2xl text-dark transition-all duration-300 hover:bg-primary">
          Me contacter
        </a>
      </div>

@if($ownerRight)
  <img src="{{ $ownerRight }}" alt="Avec les chiens" class="lg:w-57.5 lg:h-60 w-full md:h-102.5 h-70 rounded-2xl object-cover">
@endif
    </div>
  </div>
</section>

{{-- Valeurs personnelles / mission --}}
<section class="bg-white lg:pt-25 md:pt-22.5 pt-17.5">
  <div class="container">
    <div class="grid md:grid-cols-5 lg:gap-12.5 gap-5" data-aos="fade-up" data-aos-duration="500">
      <div class="md:col-span-2">
        <div class="bg-primary rounded-2xl lg:p-10 p-5 h-full">
          <p class="text-lg font-medium text-black">
            « Élever un Pomsky, c’est d’abord <strong>élever un lien</strong> — avec respect, patience et cohérence. »
          </p>
          <div class="flex gap-2 mt-7">
            <span class="bg-dark text-primary rounded-full px-3 py-1 text-sm">Bien-être</span>
            <span class="bg-dark text-primary rounded-full px-3 py-1 text-sm">Transparence</span>
            <span class="bg-dark text-primary rounded-full px-3 py-1 text-sm">Zoothérapie</span>
          </div>
        </div>
      </div>

      <div class="md:col-span-3">
        <div class="bg-dark rounded-2xl lg:p-10 p-5 h-full text-white">
          <h2 class="text-2xl mb-5 text-white">Parcours & engagement</h2>
          <ul class="space-y-4">
            <li class="flex gap-3">
              <svg class="h-6 w-6 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
              Formation continue en comportement canin et socialisation des chiots.
            </li>
            <li class="flex gap-3">
              <svg class="h-6 w-6 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
              Interventions en <strong>zoothérapie</strong> (écoles, CHSLD/RPA, milieux spécialisés).
            </li>
            <li class="flex gap-3">
              <svg class="h-6 w-6 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
              Sélection éthique des reproducteurs et accompagnement des familles.
            </li>
          </ul>
        </div>
      </div>
    </div>

    {{-- “Nos engagements” en cartes simples --}}
    <div class="bg-body-bg rounded-2xl lg:p-12.5 md:p-7.5 py-7.5 px-3.75 mt-15" data-aos="fade-up" data-aos-duration="600">
      <h2 class="md:text-2.5xl text-1.5xl">Nos engagements</h2>
      <div class="grid md:grid-cols-2 md:gap-12.5 gap-5 mt-10">
        <div class="flex flex-col gap-3">
          <div class="flex items-center gap-2.5">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            Environnement familial sécurisé & riche en stimulations positives.
          </div>
          <div class="flex items-center gap-2.5">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            Suivi vétérinaire rigoureux, carnet de santé & conseils personnalisés.
          </div>
        </div>
        <div class="flex flex-col gap-3">
          <div class="flex items-center gap-2.5">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            Transparence sur le caractère, le besoin d’exercice et l’éducation.
          </div>
          <div class="flex items-center gap-2.5">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            Support après adoption — on reste disponibles pour vous guider.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="grid md:grid-cols-2" data-aos="fade-up" data-aos-duration="500">
      <div>
@if($ctaImg)
  <img src="{{ $ctaImg }}" alt="Chiots Pomsky" class="rounded-tl-2xl md:rounded-bl-2xl md:rounded-tr-none rounded-tr-2xl w-full h-auto object-cover">
@endif      </div>
      <div class="bg-primary rounded-tr-2xl rounded-br-2xl lg:p-15 p-5 h-full flex justify-center flex-col">
        <h2 class="mb-2.5 md:text-4xl text-2.6xl">Envie d’en savoir plus&nbsp;?</h2>
        <p class="mb-9">Parlez-moi de votre quotidien et de vos attentes — je vous oriente vers le chiot qui vous correspond.</p>
        <a href="{{ url('/contact') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex bg-dark text-white font-medium rounded-2xl transition-all duration-300 hover:text-primary">Nous écrire</a>
      </div>
    </div>
  </div>
</section>
@endsection
