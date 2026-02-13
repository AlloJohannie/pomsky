@extends('layouts.landing', ['title' => 'Contact'])

@section('content')
@php
    $bannerUrl = asset('images/logo/bandeau.jpg');
    $carteAffaire = asset('images/logo/carte_affaire.jpg');
@endphp

{{-- HERO / Bandeau principal --}}
<section class="relative py-20 md:py-28">
  <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
  <div class="absolute inset-0 bg-black/45 -z-0"></div>

  <div class="relative z-10 container text-center text-white drop-shadow">

<h1 class="lg:text-6xl md:text-5xl text-4xl font-semibold mb-3">Contact</h1>
<p class="text-lg text-white/90 max-w-2xl mx-auto">
  Pour l’élevage, la zoothérapie ou le puppy yoga, écrivez-nous ou planifiez un appel.
</p>

  </div>
</section>

{{-- SECTION COORDONNÉES --}}
<section class="bg-white py-16 md:py-20">
  <div class="container max-w-3xl mx-auto text-center" data-aos="fade-up" data-aos-duration="600">
    <h2 class="lg:text-5xl md:text-4xl text-3xl font-semibold mb-3 text-gray-900">Restons en contact</h2>
    <div class="w-16 h-1 bg-[#0054A6] mx-auto rounded-full mb-8"></div>

    <p class="text-gray-700 mb-10 text-lg leading-relaxed max-w-2xl mx-auto">


  Pour l’élevage, la zoothérapie ou le puppy yoga, écrivez-nous ou planifiez un appel.

      Nous répondons habituellement en 24 à 48 h ouvrables.<br>
      Vous pouvez nous joindre directement par les moyens suivants :
    </p>

    {{-- Liens de contact --}}
    <div class="flex flex-col gap-5 items-center text-gray-800 text-lg">
      <a href="mailto:pomskyduquebec@hotmail.com"
         class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-[#0054A6]/10 transition w-fit">
        <i class="iconify" data-icon="tabler:mail" style="font-size: 1.6rem;"></i>
        <span class="font-medium">pomskyduquebec@hotmail.com</span>
      </a>

      <a href="https://www.facebook.com/pomskylover25" target="_blank" rel="noopener"
         class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-[#0054A6]/10 transition w-fit">
        <i class="iconify" data-icon="tabler:brand-facebook" style="font-size: 1.6rem; color:#0054A6"></i>
        <span class="font-medium">Facebook : pomskylover25</span>
      </a>

      {{-- <a href="https://www.youtube.com/@AssistanceZootherapie" target="_blank" rel="noopener"
         class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-[#0054A6]/10 transition w-fit">
        <i class="iconify" data-icon="tabler:brand-youtube" style="font-size: 1.6rem; color:#d32f2f"></i>
        <span class="font-medium">YouTube : @AssistanceZootherapie</span>
      </a> --}}
    </div>

    {{-- Carte d’affaire --}}
    <div class="mt-14 flex justify-center">
      <img src="{{ $carteAffaire }}" alt="Carte d'affaire Petit Pomsky du Québec Inc."
           class="rounded-2xl shadow-xl w-full max-w-md sm:max-w-lg border border-gray-200 transition-transform duration-300 hover:scale-[1.02]">
    </div>

    {{-- Encadré conseils --}}
<div class="mt-12 max-w-xl mx-auto bg-gray-50 border border-gray-200 rounded-2xl p-6 text-left text-gray-700 shadow-sm">
  <h3 class="font-semibold text-lg mb-3 text-[#0054A6]">Pour nous aider à bien vous répondre :</h3>
  <ul class="list-disc ms-5 space-y-1 leading-relaxed">
    <li>Indiquez votre disponibilité et la meilleure façon de vous joindre (appel ou courriel).</li>
    <li><strong>Élevage :</strong> parlez-nous de votre milieu de vie (enfants, autres animaux, routine, expérience).</li>
    <li><strong>Zoothérapie / Puppy yoga :</strong> précisez le contexte (école, aînés, entreprise, privé) et vos objectifs.</li>
  </ul>
</div>

  </div>
</section>

{{-- SECTION VISUELLE DE FIN --}}
<section class="bg-[#0054A6]/5 py-16 text-center" data-aos="fade-in" data-aos-duration="800">
  <p class="text-xl text-gray-700 italic max-w-2xl mx-auto leading-relaxed">
    “Chaque contact est une nouvelle rencontre, un pas vers une belle histoire humaine et canine.”
  </p>
</section>
@endsection
