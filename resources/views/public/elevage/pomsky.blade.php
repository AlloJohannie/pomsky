@extends('layouts.landing', ['title' => 'Présentation du Pomsky'])

@section('content')
@php
  // --- Banner image (fallbacks) ---
  $bannerCandidates = [
    public_path('photos/pomsky-chiot-lavande-36.jpg'),
    public_path('photos/pomsky-deux-chiots-02.jpg'),
    public_path('photos/proprietaire-portee.jpg'),
  ];
  $bannerPath = collect($bannerCandidates)->first(fn($p) => file_exists($p));
  $bannerUrl  = $bannerPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $bannerPath)) : null;

  // --- Portrait next to main text (fallbacks) ---
  $portraitCandidates = [
    public_path('photos/pomsky-portrait.jpg'),
    public_path('photos/pomsky-chiot-fleurs-38.jpg'),
    public_path('photos/pomsky-chiot-studio-30.jpg'),
    public_path('photos/pomsky-chiot-panier-45.jpg'),
  ];
  $portraitPath = collect($portraitCandidates)->first(fn($p) => file_exists($p));
  $portraitUrl  = $portraitPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $portraitPath)) : asset('/images/team/5.png');

  // --- Optional charts (put files in public/images/pomsky or public/photos) ---
  $genChartCandidates  = [public_path('images/element/terminology.png'),  public_path('photos/terminology.png')];
  $sizeChartCandidates = [public_path('images/element/pomskychart.jpg'),  public_path('photos/pomskychart.jpg')];
  $eyesChartCandidates = [public_path('images/element/pomskylook.jpg'),   public_path('photos/pomskylook.jpg')];

  $genChartPath  = collect($genChartCandidates)->first(fn($p) => file_exists($p));
  $sizeChartPath = collect($sizeChartCandidates)->first(fn($p) => file_exists($p));
  $eyesChartPath = collect($eyesChartCandidates)->first(fn($p) => file_exists($p));

  $genChart  = $genChartPath  ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $genChartPath))   : null;
  $sizeChart = $sizeChartPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $sizeChartPath))  : null;
  $eyesChart = $eyesChartPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $eyesChartPath))  : null;

  // --- Small gallery from /public/photos (6–8 photos) ---
  $all = glob(public_path('photos/*.{jpg,jpeg,png,webp,jfif}'), GLOB_BRACE) ?: [];
  rsort($all);
  $gallery = array_slice(array_map(fn($p) => str_replace(public_path().DIRECTORY_SEPARATOR, '', $p), $all), 0, 8);
@endphp

{{-- HERO --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  @if($bannerUrl)
    <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>
  @else
    <div class="absolute inset-0 -z-10 bg-body-bg"></div>
  @endif

  <div class="container relative z-10 text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="500">
    <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-white drop-shadow">Le Pomsky – Né d’un rêve</h1>
    <p class="mb-2.5 text-white/90 drop-shadow">Un designer dog issu d’un croisement réfléchi Husky sibérien × Poméranien.</p>
  </div>
</section>

{{-- Intro + Portrait --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto">

    <div class="grid lg:grid-cols-2 gap-10 items-center" data-aos="fade-up" data-aos-duration="500">
      <div>
        <img src="{{ $portraitUrl }}" alt="Pomsky"
            loading="lazy"
            class="rounded-2xl w-full h-auto object-cover mx-auto md:max-h-[420px] xl:max-w-[520px]">
      </div>
      <div>
        <p class="text-slate-700">
          Le Pomsky est un <strong>designer dog</strong> — un croisement intentionnel et éthique entre deux races pures,
          avec tests génétiques et standards précis. Le mariage du <strong>Husky sibérien</strong> (majestueux, indépendant)
          et du <strong>Poméranien</strong> (vif, affectueux, compact) donne un chien au look exceptionnel, à la
          personnalité attachante et à l’énergie débordante, idéal pour la vie de famille : <strong>sociable</strong>,
          <strong>compatible avec les autres animaux</strong>, <strong>intelligent</strong> et très <strong>affectueux</strong>.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- Formats & poids --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto">

    <h2 class="text-3xl md:text-4xl font-semibold text-center">Formats et poids dans notre élevage</h2>
    <div class="grid md:grid-cols-3 gap-6 mt-8" data-aos="fade-up">
      <div class="bg-white p-6 rounded-2xl">
        <h3 class="font-semibold text-xl">Standard</h3>
        <p class="mt-2 text-slate-700">
          <strong>20 lb et plus</strong> (jusqu’à ~36 lb). Prestance proche du Husky tout en restant adapté à la vie familiale.
        </p>
      </div>
      <div class="bg-white p-6 rounded-2xl">
        <h3 class="font-semibold text-xl">Miniature</h3>
        <p class="mt-2 text-slate-700"><strong>15 à 20 lb</strong>. Format compact, parfait maison ou condo.</p>
      </div>
      <div class="bg-white p-6 rounded-2xl">
        <h3 class="font-semibold text-xl">Micro Toy</h3>
        <p class="mt-2 text-slate-700"><strong>Moins de 15 lb</strong>. Petit gabarit conservant le look Pomsky.</p>
      </div>
    </div>

@if($sizeChart)
  <div class="mt-8 max-w-4xl mx-auto">
    <img src="{{ $sizeChart }}" alt="Tailles Pomsky (APKC)"
         class="rounded-2xl w-full h-auto object-contain md:max-h-[520px]">
  </div>
@endif

  </div>
</section>

{{-- Origine & reconnaissance --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto">

    <div class="lg:w-5/6 mx-auto" data-aos="fade-up" data-aos-duration="500">
      <h2 class="text-3xl md:text-4xl font-semibold">Origine et reconnaissance</h2>
      <p class="mt-4 text-slate-700">
        Les premiers Pomskys naissent en <strong>2012</strong> aux États-Unis (Arizona) via insémination artificielle
        pour obtenir la première génération F1. Le <em>Pomsky Club of America</em> est fondé et l’engouement est immédiat.
        Le Pomsky n’est pas une race reconnue par le CKC/LOF ; des associations comme l’<strong>IPA</strong> et l’<strong>APKC</strong>
        encadrent la sélection (tests ADN, standards, code d’éthique). L’ADN autorisé : <strong>Husky sibérien</strong>,
        <strong>Poméranien</strong>, <strong>Esquimau américain</strong>. Autres races (Klee Kai, Malamute, Samoyède, Shiba Inu) : non acceptées.
      </p>
    </div>
  </div>
</section>

{{-- Beauté / rareté --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto">
    <div class="lg:w-5/6 mx-auto" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-semibold">Une beauté exceptionnelle à chaque étape</h2>
      <p class="mt-4 text-slate-700">
        Bébé, aspect d’ourson en peluche ; adulte, élégance du Husky en format réduit, regard captivant.
        Rare au Québec, le Pomsky est un <strong>designer dog à haut risque de vol</strong> : vigilance recommandée.
      </p>
      @php
        $earsChartPath = public_path('images/element/pomskylookears.jpg');
        $earsChart = file_exists($earsChartPath)
          ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $earsChartPath))
          : null;
      @endphp

      @if($eyesChart || $earsChart)
        <div class="mt-6 max-w-5xl mx-auto grid md:grid-cols-2 gap-4">
          @if($eyesChart)
            <img src="{{ $eyesChart }}" alt="Standard des yeux (APKC)"
                class="rounded-2xl w-full h-auto object-contain md:max-h-[520px]">
          @endif
          @if($earsChart)
            <img src="{{ $earsChart }}" alt="Standard des oreilles (APKC)"
                class="rounded-2xl w-full h-auto object-contain md:max-h-[520px]">
          @endif
        </div>
      @endif

    </div>
  </div>
</section>

{{-- Tempérament & comportement --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto">
    <h2 class="text-3xl md:text-4xl font-semibold">Tempérament et comportement</h2>
    <ul class="mt-4 grid md:grid-cols-2 gap-3 text-slate-700">
      <li>• Sociable, affectueux, très joueur</li>
      <li>• Grande endurance, énergie débordante</li>
      <li>• Apprend vite : propreté, assis, couché, reste, fait le mort, high-five</li>
      <li>• Aime l’eau (piscine, rivière, lac)</li>
      <li>• Excellent en randonnée, fidèle au rappel</li>
      <li>• Bonne cohabitation avec autres animaux si socialisé tôt</li>
      <li>• Très doux avec les enfants, proche de son humain et « pot de colle »</li>
    </ul>
  </div>
</section>

{{-- Soin & entretien --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto">
    <div class="grid lg:grid-cols-2 gap-10" data-aos="fade-up">
      <div class="bg-white p-6 rounded-2xl">
        <h3 class="text-2xl font-semibold">Exercice et dépense physique</h3>
        <p class="mt-2 text-slate-700">
          Deux sorties quotidiennes essentielles : balades, course, agilité, cani-randonnée selon gabarit.
          Posé et calme à la maison <em>après</em> dépense suffisante.
        </p>
      </div>
      <div class="bg-white p-6 rounded-2xl">
        <h3 class="text-2xl font-semibold">Toilettage et pelage</h3>
        <p class="mt-2 text-slate-700">
          Double pelage avec sous-poil dense ; <strong>deux grosses mues/an</strong>. Brossage fréquent (2×/semaine, quotidien en mue),
          outils adaptés pour atteindre le sous-poil. Bain doux au besoin. <strong>Non hypoallergène</strong>.
        </p>
        <ul class="mt-2 text-slate-700 list-disc ms-5">
          <li>2 traitements de mue annuels (toiletteur ou maison) : moins de poils, pelage sain.</li>
        </ul>
      </div>
    </div>

    <div class="bg-white p-6 rounded-2xl mt-6" data-aos="fade-up">
      <h3 class="text-2xl font-semibold">Environnement & adaptation</h3>
      <p class="mt-2 text-slate-700">
        Maison avec cour appréciée, mais <strong>appartement possible</strong> avec sorties régulières (marche, parc à chiens),
        jeux et stimulation. Ce qui compte : interaction humaine, activités partagées et exploration.
      </p>
    </div>
  </div>
</section>

{{-- Compagnon idéal --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto">
    <div class="lg:w-5/6 mx-auto" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-semibold">Un compagnon idéal</h2>
      <p class="mt-4 text-slate-700">
        Beauté exceptionnelle, intelligence vive, tempérament affectueux et loyal. Si vous cherchez un compagnon
        énergique, adaptable, proche de l’humain — prêt pour l’aventure et les câlins — le Pomsky est fait pour vous.
      </p>
    </div>
  </div>
</section>

{{-- Générations F1–F4 + backcross --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto">
    <div class="text-center" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-semibold">Comprendre les générations – F1, F2, F3, F4</h2>
      <p class="mt-3 text-slate-700">
        Les générations décrivent le niveau d’hybridation et influencent taille, pelage, tempérament et stabilité génétique.
      </p>
    </div>

@if($genChart)
  <div class="mt-8 max-w-4xl mx-auto">
    <img src="{{ $genChart }}" alt="Terminologie des générations"
         class="rounded-2xl w-full h-auto object-contain md:max-h-[520px]">
  </div>
@endif


    <div class="grid md:grid-cols-2 gap-6 mt-8" data-aos="fade-up">
      <div class="bg-white p-6 rounded-2xl">
        <h3 class="text-xl font-semibold">F1 (première génération)</h3>
        <ul class="mt-2 text-slate-700 list-disc ms-5">
          <li>Husky pur × Poméranien pur ≈ 50/50.</li>
          <li>Traits plus <em>imprévisibles</em> (type, taille, pelage).</li>
          <li>Taille/poids variables (~7–20 kg).</li>
        </ul>
      </div>
      <div class="bg-white p-6 rounded-2xl">
        <h3 class="text-xl font-semibold">F2 (deuxième génération)</h3>
        <ul class="mt-2 text-slate-700 list-disc ms-5">
          <li>F1 × F1 ; homogénéité accrue.</li>
          <li>On vise la stabilisation de caractéristiques (taille, pelage, tempérament).</li>
        </ul>
      </div>
      <div class="bg-white p-6 rounded-2xl">
        <h3 class="text-xl font-semibold">F3 (troisième génération)</h3>
        <ul class="mt-2 text-slate-700 list-disc ms-5">
          <li>F2 × F2 ; <strong>stabilisation nette</strong> des traits.</li>
          <li>Format souvent plus petit (≈ 5–15 kg) et prévisible.</li>
        </ul>
      </div>
      <div class="bg-white p-6 rounded-2xl">
        <h3 class="text-xl font-semibold">F4 (quatrième génération+)</h3>
        <ul class="mt-2 text-slate-700 list-disc ms-5">
          <li>F3 × F3 ; traits <strong>très stabilisés</strong>, apparence/tempérament prévisibles.</li>
        </ul>
      </div>
    </div>

    <div class="bg-white p-6 rounded-2xl mt-6" data-aos="fade-up">
      <h3 class="text-xl font-semibold">Backcross (F1A, F2B, F3B, F4A…)</h3>
      <p class="mt-2 text-slate-700">
        Les suffixes (A/B) indiquent un retour génétique vers l’un des <strong>trois parents autorisés</strong> :
        Husky sibérien, Poméranien ou Esquimau américain.
      </p>
    </div>

    <div class="bg-white p-6 rounded-2xl mt-6" data-aos="fade-up">
      <h3 class="text-xl font-semibold">Notre choix d’élevage</h3>
      <p class="mt-2 text-slate-700">
        Chez <strong>Passion familiale, petit pomsky du Québec</strong>, nous travaillons
        <strong>exclusivement des générations F3 et F4</strong> pour offrir des chiens génétiquement stabilisés :
        format (standard/miniature/micro-toy) plus prévisible, tempérament équilibré et apparence raffinée.
        Chaque chiot est accompagné d’un <strong>test ADN complet</strong> confirmant une génétique 100 % conforme (Husky, Poméranien, Esquimau américain).
      </p>
    </div>
  </div>
</section>

{{-- Mini-galerie --}}
<section class="bg-white py-12">
  <div class="container max-w-screen-lg mx-auto">
    <h2 class="text-3xl md:text-4xl font-semibold text-center">Quelques photos</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
      @forelse($gallery as $g)
        <img src="{{ asset($g) }}" alt="Pomsky" loading="lazy" class="w-full h-40 md:h-44 object-cover rounded-xl">
      @empty
        <p class="col-span-full text-center text-slate-600">
          Ajoutez des photos dans <code>public/photos</code> pour alimenter cette section.
        </p>
      @endforelse
    </div>
  </div>
</section>

{{-- CTA vers réservation --}}
{{-- <section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
  <div class="container text-center" data-aos="fade-up" data-aos-duration="500">
    <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Prêt pour l’aventure&nbsp;?</h2>
    <p class="mb-5">Découvrez notre processus complet et les modalités de réservation.</p>
    <a href="{{ url('/reservation-tarifs') }}" class="py-3.5 md:px-7.5 px-6 inline-flex bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
      Réservation & tarifs
    </a>
  </div>
</section> --}}
@endsection
