@extends('layouts.landing', ['title' => 'En construction'])

@section('content')
@php
    // Choix d’une image déjà présente dans votre dossier public/photos
    $candidates = [
        public_path('photos/pomsky-chiot-lavande-36.jfif'),
        public_path('photos/pomsky-couverture-bleue-09.jfif'),
        public_path('photos/pomsky-chiot-studio-30.jfif'),
    ];
    $path = collect($candidates)->first(fn($p) => file_exists($p));
    $bannerUrl = $path ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $path)) : null;
@endphp

{{-- Bandeau pleine largeur --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  @if($bannerUrl)
    <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}')"></div>
    <div class="absolute inset-0 bg-black/40 -z-0"></div>
  @else
    <div class="absolute inset-0 bg-body-bg -z-10"></div>
  @endif

  <div class="container relative z-10 text-center max-w-3xl mx-auto">
    <div class="inline-flex bg-primary text-dark px-3 py-1 rounded-full text-sm font-medium">Site temporairement indisponible</div>
    <h1 class="mt-3 lg:text-6xl md:text-5.5xl text-4xl text-white drop-shadow">En construction</h1>
    <p class="mt-2 text-white/90 drop-shadow">
      Nous effectuons une mise à jour ou une maintenance.  
      Merci pour votre patience 🐾
    </p>
    <div class="mt-6 flex justify-center gap-3">
      <a href="mailto:info@petitpomskyduquebec.ca"
         class="rounded-2xl bg-white/90 text-dark px-6 py-3 hover:bg-white transition">Nous contacter</a>
    </div>
  </div>
</section>

<section class="bg-white lg:py-20 md:py-16 py-12">
  <div class="container max-w-2xl text-center">
    <div class="bg-body-bg rounded-2xl p-6 md:p-8">
      <h2 class="text-2xl md:text-3xl font-semibold mb-4">Retour en ligne prochainement</h2>
      <p class="text-slate-700">
        Revenez nous voir bientôt pour découvrir nos portées, services de zoothérapie et mises à jour.
      </p>
    </div>
  </div>
</section>
@endsection
