
{{-- resources/views/public/zootherapie/ --}}
@extends('layouts.landing', ['title' => 'Zoothérapie – Ateliers en garderie'])
@section('content')
@php $bannerUrl = asset('photos/pomsky-chiot-fleurs-38.jpg'); @endphp
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
  <div class="absolute inset-0 -z-0 bg-black/35"></div>
  <div class="container relative z-10 text-center">
    <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">Ateliers de médiation animale en garderie</h1>
    <p class="text-white/90 drop-shadow">Développement socio-émotionnel par des activités ludiques et sécurisées.</p>
  </div>
</section>
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container lg:w-4/5 mx-auto prose max-w-none">
    <h2>Public cible</h2>
    <p>Enfants de 3 à 5 ans en petits groupes (max. 10), avec présence du personnel éducatif.</p>

    <h3>Ateliers proposés</h3>
    <ul>
      <li>Prévention des morsures (30 min)</li>
      <li>Reconnaître les signes de stress et d’apaisement (30 min)</li>
      <li>Reconnaître ses émotions et stratégies de régulation (30 min)</li>
      <li>Zoolecture + détente avec le chien médiateur (45 min)</li>
      <li>Parcours sensoriel et motricité avec l’animal (30 min)</li>
      <li>Création artistique et médiation animale (30 min)</li>
    </ul>

    <h3>Compétences développées</h3>
    <ul>
      <li>Langage, coordination, respect du cadre.</li>
      <li>Empathie, autonomie, confiance en soi.</li>
      <li>Régulation émotionnelle et socialisation.</li>
    </ul>

    <p class="mt-8"><a href="{{ url('/contact') }}" class="inline-flex bg-dark text-white rounded-2xl px-6 py-3 hover:text-primary">Demander une soumission</a></p>
  </div>
</section>
@endsection
