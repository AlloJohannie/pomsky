@extends('layouts.landing', ['title' => 'Zoothérapie – Services'])

@section('content')
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <h1 class="text-4xl md:text-5xl">Nos services de zoothérapie</h1>

    <div class="grid md:grid-cols-3 gap-6 mt-6" data-aos="fade-up">
      @foreach ([
        ['Individuel','Objectifs personnalisés, rythme adapté, soutien émotionnel.'],
        ['Groupe','Cohésion, communication, entraide autour de l’animal.'],
        ['Milieux scolaires / aînés','Programmes adaptés, coordination avec l’équipe.'],
      ] as [$t,$p])
      <div class="bg-body-bg p-6 rounded-2xl">
        <h3 class="font-semibold text-xl">{{ $t }}</h3>
        <p class="mt-2">{{ $p }}</p>
      </div>
      @endforeach
    </div>

    {{-- Cas d’usage en accordéons (Preline) --}}
    <div class="mt-10 md:space-y-5 space-y-3 hs-accordion-group" data-aos="fade-up">
      @foreach ([
        ['Gestion du stress & anxiété','Respiration, ancrage, mise en confiance par l’animal.'],
        ['Motivation & communication','Objectifs ludiques, interactions guidées autour du chien.'],
        ['Stimulation cognitive & motrice','Exercices doux, parcours simples, mémoire, attention.'],
      ] as [$q,$r])
      <div class="hs-accordion bg-white border border-neutral-200 p-5 rounded-2xl">
        <button class="hs-accordion-toggle w-full flex justify-between items-center text-start">
          <span class="text-lg font-medium">{{ $q }}</span>
          <div class="bg-body-bg size-7 rounded-full inline-flex items-center justify-center">
            <svg class="h-4 w-4 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
            <svg class="h-4 w-4 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
          </div>
        </button>
        <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
          <p class="mt-4 text-slate-700">{{ $r }}</p>
        </div>
      </div>
      @endforeach
    </div>

    <div class="mt-10">
      <a href="{{ url('/zootherapie/tarifs') }}" class="py-3.5 px-7.5 inline-flex bg-dark text-white rounded-2xl font-medium transition-all duration-300 hover:text-primary">Voir les tarifs</a>
      <a href="{{ url('/zootherapie/valeurs') }}" class="ms-4 underline font-medium">Nos valeurs</a>
    </div>
  </div>
</section>
@endsection
