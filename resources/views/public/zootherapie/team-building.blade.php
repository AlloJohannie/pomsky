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
<h2>Pourquoi maintenant ?</h2>
<ul>
<li>Bien-être mental et climat sain: réduire le stress, soutenir la santé des employés.</li>
<li>Communication et collaboration renforcées: expériences partagées qui soudent les équipes.</li>
<li>Fidélisation des talents: satisfaction accrue, réduction du turnover.</li>
</ul>


<h3>Une expérience mémorable</h3>
<p>Des professionnels se déplacent avec des chiots pour des sessions encadrées et adaptées à vos espaces. Détente, tendresse et joie au service de l’engagement et de la productivité.</p>


<p class="mt-8"><a href="{{ url('/contact') }}" class="inline-flex bg-dark text-white rounded-2xl px-6 py-3 hover:text-primary">Parler de votre événement</a></p>
</div>
</section>
@endsection