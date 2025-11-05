
{{-- resources/views/public/zootherapie/ecole-specialisee.blade.php --}}
@extends('layouts.landing', ['title' => 'Zoothérapie – École spécialisée'])
@section('content')
@php $bannerUrl = asset('photos/pomsky-chiot-lavande-35.jpg'); @endphp
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
  <div class="absolute inset-0 -z-0 bg-black/35"></div>
  <div class="container relative z-10 text-center">
    <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">Médiation animale en école spécialisée</h1>
    <p class="text-white/90 drop-shadow">Ateliers éducatifs, sensoriels et relationnels, encadrés.</p>
  </div>
</section>
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container lg:w-4/5 mx-auto prose max-w-none">
    <h2>Clientèle visée</h2>
    <ul>
      <li>TSA, DI, troubles du langage/communication, TDA/H.</li>
      <li>Retards moteurs/sensoriels, anxiété, hypersensibilité, difficultés émotionnelles.</li>
    </ul>

    <h3>Axes de développement</h3>
    <ul>
      <li>Forces personnelles, estime et motivation.</li>
      <li>Capacités cognitives : attention, mémoire, consignes.</li>
      <li>Autonomie & régulation, respect du rythme.</li>
      <li>Communication verbale et non verbale, coopération.</li>
    </ul>

    <h3>Ateliers modulables</h3>
    <ul>
      <li>Parcours sensoriel et motricité avec l’animal.</li>
      <li>Création artistique avec participation de l’animal.</li>
      <li>Reconnaissance des émotions et des forces personnelles.</li>
      <li>Lecture interactive et stimulation cognitive.</li>
    </ul>

    <p class="mt-8"><a href="{{ url('/contact') }}" class="inline-flex bg-dark text-white rounded-2xl px-6 py-3 hover:text-primary">Échanger sur vos besoins</a></p>
  </div>
</section>
@endsection
