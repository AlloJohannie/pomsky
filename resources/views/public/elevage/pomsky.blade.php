@extends('layouts.landing', ['title' => 'Le Pomsky – Né d’un rêve'])

@section('content')
@php
  // === Bannières et images principales ===
  $bannerCandidates = [
    public_path('photos/pomsky-chiot-lavande-36.jpg'),
    public_path('photos/pomsky-deux-chiots-02.jpg'),
    public_path('photos/proprietaire-portee.jpg'),
  ];
  $bannerPath = collect($bannerCandidates)->first(fn($p) => file_exists($p));
  $bannerUrl  = $bannerPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $bannerPath)) : null;

  $portraitCandidates = [
    public_path('photos/pomsky-portrait.jpg'),
    public_path('photos/pomsky-chiot-fleurs-38.jpg'),
    public_path('photos/pomsky-chiot-studio-30.jpg'),
    public_path('photos/pomsky-chiot-panier-45.jpg'),
  ];
  $portraitPath = collect($portraitCandidates)->first(fn($p) => file_exists($p));
  $portraitUrl  = $portraitPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $portraitPath)) : asset('/images/team/5.png');

  // === Graphiques / images techniques ===
  $genChart  = file_exists(public_path('images/element/terminology.png')) ? asset('images/element/terminology.png') : null;
  $eyesChart = file_exists(public_path('images/element/pomskylook.jpg')) ? asset('images/element/pomskylook.jpg') : null;
  $earsChart = file_exists(public_path('images/element/pomskylookears.jpg')) ? asset('images/element/pomskylookears.jpg') : null;

  // === Nouvelle image : 3 types de Pomsky ===
  $typesImage = file_exists(public_path('images/element/3_types_de_pomsky.jpg')) ? asset('images/element/3_types_de_pomsky.jpg') : null;

  // === Galerie ===
  $all = glob(public_path('photos/*.{jpg,jpeg,png,webp,jfif}'), GLOB_BRACE) ?: [];
  rsort($all);
  $gallery = array_slice(array_map(fn($p) => str_replace(public_path().DIRECTORY_SEPARATOR, '', $p), $all), 0, 8);
@endphp

{{-- HERO --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  @if($bannerUrl)
    <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/40"></div>
  @endif
  <div class="container relative z-10 text-center max-w-3xl mx-auto text-white" data-aos="fade-up">
    <h1 class="lg:text-6xl md:text-5xl text-4xl font-bold drop-shadow mb-3">Le Pomsky – Né d’un rêve</h1>
    <p class="text-white/90">Un mariage réfléchi entre le Husky sibérien et le Poméranien, donnant vie à un compagnon exceptionnel.</p>
  </div>
</section>

{{-- INTRO --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto grid lg:grid-cols-2 gap-10 items-center" data-aos="fade-up">
    <img src="{{ $portraitUrl }}" alt="Pomsky" class="rounded-2xl shadow w-full h-auto object-cover mx-auto md:max-h-[420px] xl:max-w-[520px]">
    <div class="text-slate-700 leading-relaxed">
      <p>
        Le <strong>Pomsky</strong> est un <strong>designer dog</strong> issu d’un croisement intentionnel entre deux races pures : le majestueux 
        <strong>Husky sibérien</strong> et le <strong>Poméranien</strong>, vif et affectueux. Le résultat ? 
        Un chien au regard perçant, à la personnalité attachante et à l’énergie débordante.
      </p>
      <p class="mt-3">
        Idéal pour la vie de famille, il est <strong>sociable</strong>, <strong>intelligent</strong> et 
        <strong>affectueux</strong>. Sa loyauté et sa curiosité en font un compagnon 
        fidèle, toujours prêt à partager vos aventures… ou vos câlins.
      </p>
    </div>
  </div>
</section>

{{-- FORMATS & POIDS --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-semibold">Formats et poids dans notre élevage</h2>
    <p class="text-slate-600 mt-3">Trois formats soigneusement sélectionnés pour convenir à différents modes de vie.</p>

    <div class="grid md:grid-cols-3 gap-6 mt-10" data-aos="fade-up">
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300">
        <h3 class="font-semibold text-xl mb-2 text-primary">Standard</h3>
        <p class="text-slate-700 text-sm leading-relaxed">
          <strong>20 lb et plus</strong> (jusqu’à ~36 lb). Énergique et endurant, le Pomsky standard aime les longues marches et les activités extérieures. 
          Adapté aux familles actives, il s’épanouit avec deux sorties quotidiennes et de la stimulation mentale.
        </p>
      </div>
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300">
        <h3 class="font-semibold text-xl mb-2 text-primary">Miniature</h3>
        <p class="text-slate-700 text-sm leading-relaxed">
          <strong>15 à 20 lb</strong>. Format compact, parfait pour la vie en maison ou en condo. 
          Calme et joueur, il conserve le charme nordique du Husky tout en étant plus facile à transporter et à entretenir.
        </p>
      </div>
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300">
        <h3 class="font-semibold text-xl mb-2 text-primary">Micro Toy</h3>
        <p class="text-slate-700 text-sm leading-relaxed">
          <strong>Moins de 15 lb</strong>. Petit format conservant le look Pomsky! Adapté à la vie intérieure, il reste actif, mais sans exigence d’exercice intense. 
          Parfait pour les familles cherchant un petit compagnon affectueux et calme.
        </p>
      </div>
    </div>

    {{-- Image 3 types --}}
    @if($typesImage)
      <div class="mt-10 max-w-3xl mx-auto">
        <img src="{{ $typesImage }}" alt="Types de Pomsky (Toy, Mini, Standard)" class="rounded-2xl w-full h-auto object-contain shadow-md">
      </div>
    @endif
  </div>
</section>

{{-- ORIGINE --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto text-slate-700 leading-relaxed" data-aos="fade-up">
    <h2 class="text-3xl md:text-4xl font-semibold mb-3">Origine et reconnaissance</h2>
    <p>
      Les premiers Pomskys sont nés en <strong>2012</strong> aux États-Unis (Arizona) grâce à l’insémination artificielle. 
      Le <em>Pomsky Club of America</em> encadre depuis leur standard et leur éthique d’élevage. 
      Bien qu’encore non reconnu par le CKC/LOF, le Pomsky est rigoureusement suivi par des associations comme l’<strong>IPA</strong> et l’<strong>APKC</strong>.
    </p>
    <p class="mt-3">
      L’ADN autorisé comprend exclusivement le <strong>Husky sibérien</strong>, le <strong>Poméranien</strong> et l’<strong>Esquimau américain</strong>. 
      D’autres croisements sont exclus pour préserver la qualité et la santé de la race.
    </p>
  </div>
</section>

{{-- BEAUTÉ --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto text-center" data-aos="fade-up">
    <h2 class="text-3xl md:text-4xl font-semibold">Une beauté exceptionnelle à chaque étape</h2>
    <p class="text-slate-700 mt-3">
      Bébé, il a l’allure d’un ourson en peluche; adulte, il conserve la prestance du Husky en format réduit.
      Rare et élégant, le Pomsky attire les regards et séduit par son intelligence expressive.
    </p>

    @if($eyesChart || $earsChart)
      <div class="mt-8 grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
        @if($eyesChart)
          <img src="{{ $eyesChart }}" alt="Yeux du Pomsky" class="rounded-2xl shadow-md w-full h-auto object-contain">
        @endif
        @if($earsChart)
          <img src="{{ $earsChart }}" alt="Oreilles du Pomsky" class="rounded-2xl shadow-md w-full h-auto object-contain">
        @endif
      </div>
    @endif
  </div>
</section>

{{-- TEMPÉRAMENT --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto" data-aos="fade-up">
    <h2 class="text-3xl md:text-4xl font-semibold mb-4">Tempérament et comportement</h2>
    <ul class="grid md:grid-cols-2 gap-2 text-slate-700">
      <li>• Sociable, affectueux, très joueur</li>
      <li>• Grande endurance, énergie débordante</li>
      <li>• Apprend vite : propreté, assis, couché, reste, high-five</li>
      <li>• Aime l’eau (rivière, lac, piscine)</li>
      <li>• Excellent en randonnée, fidèle au rappel</li>
      <li>• Doux avec les enfants et proche de son humain</li>
      <li>• Bonne cohabitation avec les autres animaux s’il est socialisé tôt</li>
    </ul>
  </div>
</section>

{{-- ENTRETIEN --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto grid lg:grid-cols-2 gap-10" data-aos="fade-up">
    <div class="bg-white p-6 rounded-2xl shadow">
      <h3 class="text-2xl font-semibold mb-2">Exercice et dépense physique</h3>
      <p class="text-slate-700 leading-relaxed">
        Deux sorties quotidiennes (balades, agilité, randonnée) suffisent pour un Pomsky heureux et équilibré.
        Après s’être dépensé, il se montre calme et posé à la maison.
      </p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow">
      <h3 class="text-2xl font-semibold mb-2">Toilettage et pelage</h3>
      <p class="text-slate-700 leading-relaxed">
        Son double pelage dense demande un brossage régulier (2x/semaine, quotidien en mue). 
        Non hypoallergène. Deux soins de mue annuels suffisent à garder un pelage sain et doux.
      </p>
    </div>
  </div>

  <div class="container mt-8 max-w-screen-lg mx-auto bg-white p-6 rounded-2xl shadow" data-aos="fade-up">
    <h3 class="text-2xl font-semibold mb-2">Environnement & adaptation</h3>
    <p class="text-slate-700 leading-relaxed">
      Maison avec cour privilégiée, mais <strong>appartement possible</strong> avec des sorties quotidiennes. 
      Ce qu’il aime: interagir, explorer et participer à la vie de famille.
    </p>
  </div>
</section>

{{-- COMPAGNON --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5 text-center">
  <div class="container max-w-3xl mx-auto" data-aos="fade-up">
    <h2 class="text-3xl md:text-4xl font-semibold mb-3">Un compagnon idéal</h2>
    <p class="text-slate-700">
      Beauté exceptionnelle, intelligence vive et tempérament loyal : le Pomsky est le compagnon parfait 
      pour ceux qui recherchent à la fois énergie et affection.
    </p>
  </div>
</section>

{{-- GÉNÉRATIONS --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container max-w-screen-lg mx-auto text-slate-700" data-aos="fade-up">
    <h2 class="text-3xl md:text-4xl font-semibold text-center mb-5">Comprendre les générations – F1, F2, F3, F4</h2>
    <p class="text-center mb-8">Chaque génération influence la taille, la stabilité et le tempérament du Pomsky.</p>

    @if($genChart)
      <div class="max-w-4xl mx-auto mb-10">
        <img src="{{ $genChart }}" alt="Tableau des générations" class="rounded-2xl shadow-md w-full h-auto object-contain">
      </div>
    @endif

    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white p-6 rounded-2xl shadow"><h3 class="font-semibold text-lg mb-2">F1</h3><p>Husky pur × Poméranien pur (≈50/50). Traits plus imprévisibles.</p></div>
      <div class="bg-white p-6 rounded-2xl shadow"><h3 class="font-semibold text-lg mb-2">F2</h3><p>F1 × F1. Caractéristiques plus homogènes et tempérament équilibré.</p></div>
      <div class="bg-white p-6 rounded-2xl shadow"><h3 class="font-semibold text-lg mb-2">F3</h3><p>F2 × F2. Stabilisation nette, format plus petit et constant.</p></div>
      <div class="bg-white p-6 rounded-2xl shadow"><h3 class="font-semibold text-lg mb-2">F4+</h3><p>F3 × F3. Apparence raffinée et comportement prévisible.</p></div>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow mt-8">
      <h3 class="text-lg font-semibold mb-2">Notre choix d’élevage</h3>
      <p>
        Chez <strong>Passion familiale, petit Pomsky du Québec Inc.</strong>, nous travaillons principalement avec les générations 
        <strong>F3 et F4</strong> pour assurer une stabilité génétique, un tempérament doux et une beauté raffinée.
        Chaque chiot est accompagné d’un <strong>test ADN complet</strong> certifiant sa conformité.
      </p>
    </div>
  </div>
</section>

{{-- GALERIE --}}
<section class="bg-white py-12">
  <div class="container max-w-screen-lg mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-semibold mb-8">Quelques photos</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      @forelse($gallery as $g)
        <img src="{{ asset($g) }}" alt="Pomsky" class="rounded-xl object-cover w-full h-44 shadow">
      @empty
        <p class="col-span-full text-slate-600">Ajoutez des photos dans <code>public/photos</code>.</p>
      @endforelse
    </div>
  </div>
</section>
@endsection
