@extends('layouts.landing', ['title' => 'Passion familiale Petit "Pomsky" du Québec'])

@section('content')

@php
  // Récupération des images disponibles
  $patterns = [
    public_path('photos/*.jpg'),
    public_path('photos/*.jpeg'),
    public_path('photos/*.png'),
    public_path('photos/*.webp'),
    public_path('photos/*.jfif'),
  ];
  $files = [];
  foreach ($patterns as $p) { $files = array_merge($files, glob($p) ?: []); }

  // Enlever les doublons
  $files = array_values(array_unique($files));

  natsort($files);
  $gallery = $gallery ?? array_map('basename', $files);

  $imgElevage = file_exists(public_path('photos/pomsky-deux-chiots-02.jpg'))
    ? asset('photos/pomsky-deux-chiots-02.jpg')
    : (isset($gallery[0]) ? asset('photos/'.$gallery[0]) : null);

  $imgZt = file_exists(public_path('photos/pomsky-adulte_proprietaire-portrait-32.jpg'))
    ? asset('photos/pomsky-adulte_proprietaire-portrait-32.jpg')
    : (isset($gallery[1]) ? asset('photos/'.$gallery[1]) : (isset($gallery[0]) ? asset('photos/'.$gallery[0]) : null));

  $imgTreats = file_exists(public_path('photos/pomsky-puppy-fleurs-20.jpg'))
    ? asset('photos/pomsky-puppy-fleurs-20.jpg')
    : (isset($gallery[2]) ? asset('photos/'.$gallery[2]) : (isset($gallery[0]) ? asset('photos/'.$gallery[0]) : null));
@endphp

@php
  $pomskyImg = collect($gallery)->first(fn($f) => str_contains(Str::lower($f), 'pomsky-duo-panier-13')) ?? ($gallery[0] ?? null);
@endphp


<!-- HERO CLAIR ET CHALEUREUX -->
<section class="bg-[#FAF9F6] py-16 lg:py-36 md:py-24">
  <div class="container">
            <h1 class="text-[#002B5B] lg:text-6xl md:text-5.5xl text-4xl mb-5 font-bold leading-tight">
          Bienvenue chez Passion familiale&nbsp;: Petit Pomsky du Québec
        </h1>
    <div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-32 gap-10 items-center">

      <!-- Texte -->
      <div data-aos="fade-right">


        <p class="text-gray-700 text-lg leading-relaxed max-w-xl">
          Éleveur éthique situé en Montérégie, nous élevons nos Pomskys avec amour et respect,
          directement dans notre maison. Les chiots y naissent, y sont sevrés et grandissent dans un environnement familial
          propice à leur équilibre et à leur socialisation.
        </p>

<div class="mt-8 bg-white border border-neutral-200 rounded-2xl p-6 shadow-sm">
  <h2 class="text-2xl font-semibold text-[#003E91] mb-4">Nos missions</h2>

  <ul class="space-y-2 text-gray-700 text-lg leading-relaxed list-disc pl-5">
    <li>Faire découvrir le Pomsky au Québec.</li>
    <li>Apporter du bonheur dans les foyers en offrant des chiens équilibrés, socialisés et en santé.</li>
  </ul>

  <p class="mt-4 text-gray-700 text-lg leading-relaxed">
    Parce que l’élevage de Pomsky est une véritable passion, notre mission est de vous offrir du bien-être à travers nos chiens —
    que ce soit en vous proposant un chiot socialisé, équilibré et en excellente santé, ou en organisant pour vous une séance de zoothérapie ou de puppy yoga.
  </p>
</div>


<div class="mt-10 flex flex-wrap gap-4">
  <a href="{{ url('/elevage/presentation') }}"
     class="py-3.5 px-7 bg-[#003E91] text-white font-medium rounded-2xl hover:bg-[#0054A6] transition">
    Élevage
  </a>

  <a href="{{ url('/zootherapie/services') }}"
     class="py-3.5 px-7 bg-white border border-[#003E91]/20 text-[#003E91] font-medium rounded-2xl hover:bg-[#003E91]/10 transition">
    Zoothérapie &amp; Puppy yoga
  </a>
</div>

      </div>

      <!-- Image -->
      <div data-aos="fade-left">
        <img src="{{ asset('photos/proprietaire-portee.jpg') }}"
             alt="Pomsky dans les fleurs"
             class="rounded-2xl shadow-xl object-cover">
      </div>
    </div>
  </div>
</section>


<!-- SERVICES PRINCIPAUX -->
<section class="py-16 md:py-20 bg-white">
  <div class="container">
    <h2 class="text-3xl md:text-4xl font-semibold text-center text-[#002B5B]">
      Notre entreprise repose sur deux pôles d’activités complémentaires
    </h2>

<p class="mt-4 max-w-4xl mx-auto text-center text-gray-600">
  Nous offrons 3 services : <strong>Élevage</strong>, <strong>Zoothérapie</strong> et <strong>Puppy yoga</strong>.
  Notre entreprise repose sur deux pôles complémentaires : l’élevage et les services de mieux-être (zoothérapie + puppy yoga).
</p>


    <div class="grid md:grid-cols-2 gap-6 mt-10 items-stretch">
      {{-- Carte 1 : Élevage --}}
      <div class="bg-[#FAF9F6] rounded-2xl p-6 md:p-8 border border-neutral-200 flex flex-col shadow-sm hover:shadow-md transition">
        @if($imgElevage)
          <img src="{{ $imgElevage }}" alt="Chiots de notre élevage Pomsky"
               loading="lazy" class="mb-4 w-full aspect-square object-contain bg-[#FAF9F6] rounded-xl">
        @endif

        <h3 class="text-2xl font-semibold text-[#003E91]">Élevage éthique de Pomsky</h3>
        <p class="mt-2 text-gray-700">
          L’élevage éthique de Pomsky, passionné et responsable, desservant fièrement le Québec, l’Ontario, la Nouvelle-Écosse et le
          Nouveau-Brunswick. Peu importe la distance, nous accompagnons chaque famille dans l’adoption d’un
          compagnon bien dans ses pattes.
        </p>

<a href="{{ url('/elevage/presentation') }}"
   class="mt-auto inline-flex items-center gap-2 underline font-medium text-[#003E91] hover:text-[#0054A6] transition">
  En savoir plus sur l’élevage <i class="iconify tabler--arrow-right"></i>
</a>

      </div>

      {{-- Carte 2 : Zoothérapie --}}
      <div id="zootherapie" class="bg-[#FAF9F6] rounded-2xl p-6 md:p-8 border border-neutral-200 flex flex-col shadow-sm hover:shadow-md transition">
        @if($imgZt)
          <img src="{{ $imgZt }}" alt="Interventions de zoothérapie avec Pomsky"
               loading="lazy" class="mb-4 w-full aspect-square object-contain bg-[#FAF9F6] rounded-xl">
        @endif

        <h3 class="text-2xl font-semibold text-[#003E91]">Services de zoothérapie</h3>
        <p class="mt-2 text-gray-700">
          Les services de zoothérapie, exclusivement offerts en Montérégie, dans les milieux scolaires,
          organisationnels, en CHSLD et en pratique privée, pour favoriser le mieux-être émotionnel grâce à la présence
          apaisante de nos chiens.
        </p>

<a href="{{ url('/zootherapie/services') }}"
   class="mt-auto inline-flex items-center gap-2 underline font-medium text-[#003E91] hover:text-[#0054A6] transition">
  Zoothérapie &amp; Puppy yoga <i class="iconify tabler--arrow-right"></i>
</a>

      </div>
    </div>
  </div>
</section>
@endsection
