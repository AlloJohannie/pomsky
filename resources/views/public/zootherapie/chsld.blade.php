
{{-- resources/views/public/zootherapie/chsld.blade.php --}}
@extends('layouts.landing', ['title' => 'Zoothérapie – CHSLD & soins palliatifs'])
@section('content')
@php $bannerUrl = asset('photos/pomsky-puppy-fleurs-20.jpg'); @endphp
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
  <div class="absolute inset-0 -z-0 bg-black/35"></div>
  <div class="container relative z-10 text-center">
    <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">CHSLD & soins palliatifs</h1>
    <p class="text-white/90 drop-shadow">Bien-être, stimulation douce et réconfort émotionnel.</p>
  </div>
</section>
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container lg:w-4/5 mx-auto prose max-w-none">
    <h2>Ateliers proposés</h2>
    <ul>
      <li>Rencontre apaisante avec le chien médiateur.</li>
      <li>Stimulation cognitive & mémoire affective.</li>
      <li>Reconnaissance et expression des émotions.</li>
      <li>Création artistique en présence de l’animal.</li>
      <li>Lecture ou musique en présence de l’animal.</li>
      <li>Visites personnalisées en chambre (soins palliatifs).</li>
    </ul>

    <h3>Bienfaits visés</h3>
    <ul>
      <li>Apaisement émotionnel, lien social et valorisation.</li>
      <li>Stimulation cognitive, motricité douce.</li>
      <li>Bien-être global : plaisir, réconfort, présence chaleureuse.</li>
    </ul>

    {{-- <p class="mt-8"><a href="{{ url('/contact') }}" class="inline-flex bg-dark text-white rounded-2xl px-6 py-3 hover:text-primary">Planifier une visite</a></p> --}}
  </div>
</section>
@endsection
