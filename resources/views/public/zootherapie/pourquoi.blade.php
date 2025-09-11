@extends('layouts.landing', ['title' => 'Zoothérapie – Pourquoi nous choisir ?'])

@section('content')
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="500">
    <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5">Pourquoi nous choisir&nbsp;?</h1>
    <p class="mb-2.5">Une pratique professionnelle, humaine et mesurable, au service du mieux-être.</p>
  </div>
</section>

<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="grid md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-duration="500">
      @foreach ([
        ['Titre' => 'Cadre professionnel', 'Texte' => 'Objectifs, consentement éclairé, confidentialité, sécurité.'],
        ['Titre' => 'Approche bienveillante', 'Texte' => 'Relation d’aide, rythme de la personne, renforcements positifs.'],
        ['Titre' => 'Résultats observables', 'Texte' => 'Suivi d’objectifs, notes de progression, ajustements réguliers.'],
      ] as $c)
        <div class="bg-body-bg p-6 rounded-2xl">
          <h3 class="text-xl font-semibold">{{ $c['Titre'] }}</h3>
          <p class="mt-2 text-slate-700">{{ $c['Texte'] }}</p>
        </div>
      @endforeach
    </div>

    <div class="grid lg:grid-cols-2 gap-10 items-center mt-12" data-aos="fade-up">
      <div>
        <img src="{{ asset('photos/zootherapie-session.jpg') }}" alt="" class="rounded-2xl w-full h-auto object-cover">
      </div>
      <div>
        <h2 class="text-3xl md:text-4xl font-semibold">Nos engagements</h2>
        <ul class="mt-4 space-y-3 text-slate-700">
          @foreach ([
            'Évaluation initiale sérieuse (objectifs & limites)',
            'Plan d’intervention clair et adapté',
            'Chiens éduqués, reposés et suivis',
            'Communication régulière avec les proches/équipe',
          ] as $li)
            <li class="flex gap-2">
              <svg class="h-5 w-5 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
              {{ $li }}
            </li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="text-center mt-12">
      <a href="{{ url('/zootherapie/services') }}" class="underline font-medium">Voir nos services</a>
      <span class="mx-2">·</span>
      <a href="{{ url('/zootherapie/tarifs') }}" class="underline font-medium">Consulter les tarifs</a>
    </div>
  </div>
</section>
@endsection
