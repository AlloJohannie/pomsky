@extends('layouts.landing', ['title' => 'FAQ – Pomsky & Zoothérapie'])

@section('content')

@php
  // Choix auto avec fallback
  $bannerCandidates = [
        public_path('photos/pomsky-lavande-03.jfif'),
    public_path('photos/pomsky-chiot-studio-30.jfif'),
    public_path('photos/proprietaire-portee.jpg'),

  ];
  $bannerPath = collect($bannerCandidates)->first(fn($p) => file_exists($p));
  $bannerUrl  = $bannerPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $bannerPath)) : null;
@endphp

{{-- Hero / Titre avec image de fond --}}
<section class="relative lg:py-25 md:py-12.5 py-7.5">
  @if($bannerUrl)
    <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>
  @else
    <div class="absolute inset-0 -z-10 bg-body-bg"></div>
  @endif

  <div class="container relative z-10">
    <div class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-white drop-shadow">Foire aux questions</h1>
      <p class="mb-2.5 text-white/90 drop-shadow">
        Réponses claires sur nos Pomskys, l’adoption et nos services de zoothérapie.
      </p>
    </div>
  </div>
</section>


{{-- FAQ bloc 1 : Pomsky & Adoption --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container-small">
    <div class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="120" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Pomsky & Adoption</h2>

      {{-- Important: wrapper hs-accordion-group --}}
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">

        {{-- Q1 --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">À quel âge un chiot peut-il partir chez sa famille ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              {{-- plus/minus en SVG (pas d’Iconify nécessaire) --}}
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 5v14M5 12h14"/>
              </svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14"/>
              </svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">
              Jamais avant <strong>8&nbsp;semaines</strong>. Nous respectons le suivi vétérinaire (vaccins, vermifuge) avant le départ et fournissons conseils et contrat.
            </p>
          </div>
        </div>

        {{-- Q2 --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Le Pomsky perd-il beaucoup de poils ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">
              Oui, surtout durant les périodes de mue. Un <strong>brossage régulier</strong> et une alimentation adaptée aident à limiter la perte et gardent le poil sain.
            </p>
          </div>
        </div>

        {{-- Q3 --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Comment réserver un chiot ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">
              Écris-nous via la section <a class="underline" href="{{ url('/contact') }}">Contact</a>. Nous confirmons les disponibilités, les étapes et le dépôt de réservation.
            </p>
          </div>
        </div>

        {{-- Q4 --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Quelles sont les inclusions au départ ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">
              Carnet de santé, conseils d’alimentation et d’intégration, et soutien post-adoption. Les détails varient selon la portée.
            </p>
          </div>
        </div>

      </div>
    </div>

    {{-- FAQ bloc 2 : Éducation & Vie quotidienne --}}
    <div class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Éducation & Vie quotidienne</h2>

      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">

        {{-- Q5 --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Le Pomsky convient-il aux familles ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">
              Oui, c’est un chien <strong>très sociable</strong> et attachant. Il a besoin d’activités quotidiennes et d’une éducation cohérente.
            </p>
          </div>
        </div>

        {{-- Q6 --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Conseils d’éducation de base</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">
              Renforcement positif, séances courtes et régulières, socialisation précoce. Les <strong>gâteries</strong> aident pour le rappel et la marche en laisse.
            </p>
          </div>
        </div>

      </div>
    </div>

    {{-- FAQ bloc 3 : Zoothérapie --}}
    <div class="text-center" data-aos="fade-up" data-aos-delay="180" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Zoothérapie</h2>

      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">

        {{-- Q7 --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">En quoi consiste une séance de zoothérapie&nbsp;?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">
              Des activités guidées visant le <strong>mieux-être</strong>, la communication et la confiance, réalisées avec un intervenant et un animal.
            </p>
          </div>
        </div>

        {{-- Q8 --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Pour quels milieux&nbsp;?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">
              <strong>CHSLD/RPA</strong>, écoles, CPE, milieux spécialisés, réadaptation, etc. Nous adaptons la séance aux objectifs du milieu.
            </p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

{{-- CTA final (contact) --}}
<section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
  <div class="container text-center" data-aos="fade-up" data-aos-delay="220" data-aos-duration="500">
    <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Vous avez une autre question&nbsp;?</h2>
    <p class="text-base mb-5">Écrivez-nous, on vous répond rapidement.</p>
    <a href="{{ url('/contact') }}" class="py-3.5 md:px-7.5 px-6 inline-flex bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
      Nous contacter
    </a>
  </div>
</section>

@endsection
