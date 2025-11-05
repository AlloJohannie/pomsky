
{{-- resources/views/public/zootherapie/francisation.blade.php --}}
@extends('layouts.landing', ['title' => 'Zoothérapie – Francisation & alphabétisation'])
@section('content')
@php $bannerUrl = asset('photos/pomsky-chiot-lavande-36.jpg'); @endphp
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
  <div class="absolute inset-0 -z-0 bg-black/35"></div>
  <div class="container relative z-10 text-center">
    <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">Francisation & alphabétisation</h1>
    <p class="text-white/90 drop-shadow">Ateliers interactifs et bienveillants avec des animaux médiateurs.</p>
  </div>
</section>
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container lg:w-4/5 mx-auto prose max-w-none">
    <h2>Publics</h2>
    <ul>
      <li>Enfants et adolescents en processus d’intégration linguistique.</li>
      <li>Adultes en francisation, personnes en alphabétisation.</li>
      <li>Interventions possibles en milieux scolaires, communautaires, résidentiels ou à domicile.</li>
    </ul>

    <h3>Objectifs</h3>
    <ul>
      <li>Langage oral : vocabulaire de base, prononciation, écoute active.</li>
      <li>Langage écrit : mots simples, consignes courtes, association texte-image-action.</li>
      <li>Communication fonctionnelle : poser des questions, exprimer ses besoins, décrire.</li>
    </ul>

    <h3>Approche pédagogique</h3>
    <ul>
      <li>Apprentissage expérientiel avec l’animal au cœur de l’action.</li>
      <li>Valorisation des réussites et adaptation au rythme de chacun.</li>
      <li>Présence animale variée : chien, lapin, hérisson, dègue, tourterelles.</li>
    </ul>

    <h3>Exemples d’activités</h3>
    <ul>
      <li>Nommer les parties du corps et décrire les comportements de l’animal.</li>
      <li>Lecture interactive et écriture guidée (mots-étiquettes, phrases simples).</li>
      <li>Jeux de rôle (visite chez le vétérinaire), création artistique et vocabulaire.</li>
    </ul>

    <p class="mt-8"><a href="{{ url('/contact') }}" class="inline-flex bg-dark text-white rounded-2xl px-6 py-3 hover:text-primary">Organiser un atelier</a></p>
  </div>
</section>
@endsection
