@extends('layouts.landing', ['title' => 'Zoothérapie – Tarifs'])

@section('content')
@php
    // Photo du bandeau (assurez-vous que le fichier existe bien dans public/photos)
    $bannerUrl = asset('photos/pomsky-chiot-lavande-35.jpg');
@endphp

{{-- Hero / Bandeau --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
    <div class="absolute inset-0 -z-10 bg-center bg-cover"
         style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>

    <div class="container relative z-10 text-center">
        <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">
            Tarifs
        </h1>
        <p class="text-white/90 drop-shadow">
            Séances individuelles, de groupe ou programmes sur mesure.
        </p>
    </div>
</section>

{{-- Contenu principal --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="grid md:grid-cols-3 gap-6 mt-6" data-aos="fade-up">
      {{-- Exemples : ajuste les montants si souhaité --}}
      <div class="border border-neutral-200 rounded-2xl p-6">
        <h3 class="text-xl font-semibold">Séance individuelle (60 min)</h3>
        <p class="mt-2 text-slate-700">Évaluation et objectifs personnalisés.</p>
        <div class="mt-4 font-bold text-2xl">$$</div>
      </div>

      <div class="border border-neutral-200 rounded-2xl p-6">
        <h3 class="text-xl font-semibold">Séance de groupe</h3>
        <p class="mt-2 text-slate-700">Écoles, résidences, organismes.</p>
        <div class="mt-4 font-bold text-2xl">Sur devis</div>
      </div>

      <div class="border border-neutral-200 rounded-2xl p-6">
        <h3 class="text-xl font-semibold">Programme personnalisé</h3>
        <p class="mt-2 text-slate-700">Fréquence, évaluation & bilan inclus.</p>
        <div class="mt-4 font-bold text-2xl">Sur devis</div>
      </div>
    </div>

    <div class="bg-body-bg rounded-2xl p-6 mt-8">
      <h3 class="font-semibold mb-2">Informations utiles</h3>
      <ul class="list-disc ms-5 text-slate-700 space-y-1">
        <li>Reçu disponible sur demande.</li>
        <li>Frais de déplacement possibles selon la distance.</li>
        <li>Tarifs ajustés pour organismes & programmes longs.</li>
      </ul>
    </div>

    <div class="mt-8">
      <a href="{{ url('/zootherapie/partenaires') }}" class="underline font-medium">Voir nos partenaires</a>
      <span class="mx-2">·</span>
      <a href="{{ url('/contact') }}" class="py-3.5 px-7.5 inline-flex bg-dark text-white rounded-2xl font-medium transition-all duration-300 hover:text-primary">Nous contacter</a>
    </div>
  </div>
</section>
@endsection
