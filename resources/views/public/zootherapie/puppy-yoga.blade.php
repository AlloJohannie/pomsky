<?php
// =============================
// Nouvelles pages de contenu
// =============================
?>

{{-- resources/views/public/zootherapie/puppy-yoga.blade.php --}}
@extends('layouts.landing', ['title' => 'Zoothérapie – Puppy yoga & ocytocine'])
@section('content')
@php $bannerUrl = asset('photos/pomsky-chiot-studio-30.jpg'); @endphp
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
  <div class="absolute inset-0 -z-0 bg-black/35"></div>
  <div class="container relative z-10 text-center">
    <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">Puppy yoga & ocytocine</h1>
    <p class="text-white/90 drop-shadow">Bienfaits mesurables sur le stress, l’humeur et la connexion sociale.</p>
  </div>
</section>
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container lg:w-4/5 mx-auto prose max-w-none">
    <h2>Ocytocine : l’hormone du lien</h2>
    <p>L’ocytocine, souvent surnommée l’hormone de l’amour ou de l’attachement, est libérée lors de moments de tendresse, de confiance ou de contact physique. Elle réduit le stress, favorise la détente, renforce les liens sociaux et agit comme un apaisant naturel.</p>
    <p>Nos liens avec les animaux, en particulier les chiens, déclenchent également une montée d’ocytocine — chez l’humain comme chez l’animal. Caresser, jouer, se blottir : ces interactions activent ce mécanisme biologique du bien-être.</p>

    <h3>Puppy yoga : une pratique légitime</h3>
    <p>Le puppy yoga unit les bienfaits physiques et mentaux du yoga à la présence joyeuse et apaisante de chiots. Les participants rapportent une détente profonde, de la joie et un sentiment de connexion, tandis que les chiots bénéficient d’une socialisation positive et d’interactions calmes et sécurisées.</p>

    <h3>Bénéfices pour les humains</h3>
    <ul>
      <li>Libération d’ocytocine, réduction du stress et de l’anxiété.</li>
      <li>Baisse du cortisol, amélioration de l’humeur et du bien-être.</li>
      <li>Renforcement des liens sociaux, rires, complicité.</li>
      <li>Pleine présence et recentrage pendant la pratique.</li>
    </ul>

    <h3>Bénéfices pour les chiots</h3>
    <ul>
      <li>Socialisation positive et douce.</li>
      <li>Stimulation cognitive et émotionnelle.</li>
      <li>Habituation à divers environnements, sons et textures.</li>
      <li>Moments de tendresse, repos et sécurité.</li>
    </ul>

    <p class="mt-8"><a href="{{ url('/contact') }}" class="inline-flex bg-dark text-white rounded-2xl px-6 py-3 hover:text-primary">Organiser une séance</a></p>
  </div>
</section>
@endsection

{{-- resources/views/public/zootherapie/team-building.blade.php --}}
@extends('layouts.landing', ['title' => 'Zoothérapie – Team building en entreprise'])
@section('content')
@php $bannerUrl = asset('photos/proprietaire-portee.jpg'); @endphp
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
  <div class="absolute inset-0 -z-0 bg-black/35"></div>
  <div class="container relative z-10 text-center">
    <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">Team building avec des chiots</h1>
    <p class="text-white/90 drop-shadow">Créer des moments authentiques de connexion au travail.</p>
  </div>
</section>
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container lg:w-4/5 mx-auto prose max-w-none">
    <h2>Pourquoi maintenant ?</h2>
    <ul>
      <li>Bien-être mental et climat sain : réduire le stress, soutenir la santé des employés.</li>
      <li>Communication et collaboration renforcées : expériences partagées qui soudent les équipes.</li>
      <li>Fidélisation des talents : satisfaction accrue, réduction du turnover.</li>
    </ul>

    <h3>Une expérience mémorable</h3>
    <p>Des professionnels se déplacent avec des chiots pour des sessions encadrées et adaptées à vos espaces. Détente, tendresse et joie au service de l’engagement et de la productivité.</p>

    <p class="mt-8"><a href="{{ url('/contact') }}" class="inline-flex bg-dark text-white rounded-2xl px-6 py-3 hover:text-primary">Parler de votre événement</a></p>
  </div>
</section>
@endsection
