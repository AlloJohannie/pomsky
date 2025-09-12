@extends('layouts.landing', ['title' => 'Zoothérapie – Partenaires'])

@section('content')
@php
    // Photo du bandeau (assurez-vous que le fichier existe dans public/photos)
    $bannerUrl = asset('photos/pomsky-puppy-fleurs-20.jfif');
@endphp

{{-- Hero / Bandeau --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
    <div class="absolute inset-0 -z-10 bg-center bg-cover"
         style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>

    <div class="container relative z-10 text-center">
        <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">
            Partenaires
        </h1>
        <p class="text-white/90 drop-shadow">
            Réseau local : vétérinaires, éducateurs canins, fournisseurs responsables.
        </p>
    </div>
</section>

{{-- Contenu principal --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="grid md:grid-cols-3 gap-6 mt-6">
      @foreach ([
        ['Gâteries naturelles – Exemple','https://example.com'],
        ['Clinique vétérinaire – Exemple','#'],
        ['Éducateur canin – Exemple','#'],
      ] as [$name,$link])
      <a class="block bg-white border border-neutral-200 p-6 rounded-2xl hover:bg-neutral-50" href="{{ $link }}" target="_blank" rel="noopener">
        {{ $name }}
      </a>
      @endforeach
    </div>

    <div class="mt-8 text-slate-700 text-center">
      <p>
        Vous souhaitez collaborer&nbsp;?
        <a class="underline" href="{{ url('/contact') }}">Écrivez-nous</a>.
      </p>
    </div>
  </div>
</section>
@endsection
