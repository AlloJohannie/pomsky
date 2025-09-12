@extends('layouts.landing', ['title' => 'En construction'])

@section('content')
@php
  // Image de bandeau (choix différent de celles déjà utilisées)
  $candidates = [
    public_path('photos/pomsky-couverture-bleue-09.jfif'),
    public_path('photos/pomsky-lavande-06.jfif'),
    public_path('photos/pomsky-chiot-studio-30.jfif'),
  ];
  $path = collect($candidates)->first(fn($p) => file_exists($p));
  $bannerUrl = $path ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $path)) : null;
@endphp

{{-- Bandeau --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  @if($bannerUrl)
    <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}')"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>
  @else
    <div class="absolute inset-0 -z-10 bg-body-bg"></div>
  @endif

  <div class="container relative z-10 text-center max-w-3xl mx-auto">
    <div class="inline-flex bg-primary text-dark px-3 py-1 rounded-full text-sm font-medium">Bientôt disponible</div>
    <h1 class="mt-3 lg:text-6xl md:text-5.5xl text-4xl text-white drop-shadow">En construction</h1>
    <p class="mt-2 text-white/90 drop-shadow">
      Cette page arrive très bientôt. Merci pour votre patience 🐾
    </p>
    <div class="mt-6 flex items-center justify-center gap-3">
      <a href="{{ route('home') }}" class="rounded-2xl bg-white/95 text-dark px-5 py-3 hover:bg-white transition">Retour à l’accueil</a>
      <a href="{{ url('/#contact') }}" class="rounded-2xl border border-white/70 text-white px-5 py-3 hover:bg-white/10">Nous contacter</a>
    </div>
  </div>
</section>

{{-- Bloc d’info --}}
<section class="bg-white lg:py-20 md:py-16 py-12">
  <div class="container max-w-3xl">
    <div class="bg-body-bg rounded-2xl p-6 md:p-8">
      <h2 class="text-2xl font-semibold">Ce qui se prépare</h2>
      <ul class="mt-3 text-slate-700 space-y-2">
        <li>• Contenu détaillé et belles photos 🐶</li>
        <li>• Informations vérifiées et à jour</li>
        <li>• Liens utiles vers les portées et la zoothérapie</li>
      </ul>
      <p class="mt-5 text-slate-700">
        Vous pouvez d’ores et déjà consulter <a class="underline" href="{{ route('litters.index') }}">nos portées</a> ou en savoir plus sur
        <a class="underline" href="{{ url('/zootherapie/services') }}">la zoothérapie</a>.
      </p>
    </div>
  </div>
</section>
@endsection
