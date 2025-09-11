@extends('layouts.landing', ['title' => 'Zoothérapie – Valeurs'])

@section('content')
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container md:text-center" data-aos="fade-up" data-aos-duration="500">
    <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5">Nos valeurs</h1>
    <p class="text-slate-700">Bienveillance, professionnalisme et impact réel pour la personne.</p>
  </div>
</section>

<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="grid md:grid-cols-3 gap-6" data-aos="fade-up">
      @foreach ([
        ['Approche bienveillante','Respect, sécurité émotionnelle, consentement.'],
        ['Compétences professionnelles','Cadre éthique, plan d’intervention, confidentialité.'],
        ['Impact mesurable','Objectifs définis, suivis et ajustés.'],
      ] as [$t,$p])
      <div class="bg-white border border-neutral-200 p-6 rounded-2xl">
        <h3 class="font-semibold">{{ $t }}</h3><p class="mt-2 text-slate-700">{{ $p }}</p>
      </div>
      @endforeach
    </div>

    <div class="grid lg:grid-cols-2 gap-10 items-center mt-12" data-aos="fade-up">
      <div>
        <h2 class="text-3xl md:text-4xl font-semibold">Notre méthodologie</h2>
        <ol class="mt-4 space-y-3 text-slate-700">
          @foreach ([
            'Accueil & évaluation des besoins',
            'Plan d’intervention personnalisé',
            'Séances régulières & suivi écrit',
            'Bilan et recommandations',
          ] as $i => $etape)
          <li class="flex gap-3">
            <span class="bg-primary text-black rounded-full size-7 inline-flex items-center justify-center font-semibold">{{ $i+1 }}</span>
            <span>{{ $etape }}</span>
          </li>
          @endforeach
        </ol>
        <a href="{{ url('/zootherapie/pourquoi-nous-choisir') }}" class="mt-6 inline-flex underline font-medium">Pourquoi nous choisir ?</a>
      </div>
      <div>
        <img src="{{ asset('photos/zootherapie-portrait.jpg') }}" alt="" class="rounded-2xl w-full h-auto object-cover">
      </div>
    </div>
  </div>
</section>
@endsection
