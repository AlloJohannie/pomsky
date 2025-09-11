@extends('layouts.landing', ['title' => 'Réservation & tarifs'])

@section('content')

{{-- HERO --}}
<section class="lg:py-25 md:py-22.5 py-17.5 bg-body-bg">
  <div class="container">
    <div class="text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="500">
      <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5">Comment réserver votre Pomsky</h1>
      <p class="mb-2.5">Toutes les étapes, le budget et ce qui est inclus — en toute transparence.</p>
    </div>
  </div>
</section>

{{-- ETAPES (simple, clair) --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container-small">
    <div class="grid md:grid-cols-2 gap-7.5 items-start" data-aos="fade-up" data-aos-duration="500">
      <div>
        <h2 class="md:text-4xl text-3.4xl mb-5">Étapes de réservation</h2>
        <ol class="space-y-4">
          <li class="bg-body-bg p-5 rounded-2xl">
            <div class="flex items-start gap-3">
              <div class="shrink-0 bg-primary text-black rounded-full size-8 inline-flex items-center justify-center font-semibold">1</div>
              <div>
                <h3 class="text-xl font-semibold">Prise de contact</h3>
                <p class="mt-1 text-slate-700">Écrivez-nous pour connaître les portées à venir et voir si notre élevage correspond à votre famille.</p>
              </div>
            </div>
          </li>

          <li class="bg-body-bg p-5 rounded-2xl">
            <div class="flex items-start gap-3">
              <div class="shrink-0 bg-primary text-black rounded-full size-8 inline-flex items-center justify-center font-semibold">2</div>
              <div>
                <h3 class="text-xl font-semibold">Réservation (acompte)</h3>
                <p class="mt-1 text-slate-700">Un <strong>acompte</strong> confirme votre place sur la liste. Il est déduit du prix final et n’est pas remboursable si vous vous désistez.</p>
              </div>
            </div>
          </li>

          <li class="bg-body-bg p-5 rounded-2xl">
            <div class="flex items-start gap-3">
              <div class="shrink-0 bg-primary text-black rounded-full size-8 inline-flex items-center justify-center font-semibold">3</div>
              <div>
                <h3 class="text-xl font-semibold">Choix du chiot</h3>
                <p class="mt-1 text-slate-700">Le choix s’effectue selon l’ordre des réservations, le tempérament du chiot et l’adéquation avec votre mode de vie.</p>
              </div>
            </div>
          </li>

          <li class="bg-body-bg p-5 rounded-2xl">
            <div class="flex items-start gap-3">
              <div class="shrink-0 bg-primary text-black rounded-full size-8 inline-flex items-center justify-center font-semibold">4</div>
              <div>
                <h3 class="text-xl font-semibold">Départ & contrat</h3>
                <p class="mt-1 text-slate-700">Départ <strong>après 8 semaines</strong> (visite vétérinaire faite) avec contrat, carnet de santé et conseils personnalisés.</p>
              </div>
            </div>
          </li>
        </ol>

        <div class="mt-7">
          <a href="{{ url('/#contact') }}" class="py-3.5 px-7.5 inline-flex bg-dark text-white rounded-2xl font-medium transition-all duration-300 hover:text-primary">
            Poser une question / Réserver
          </a>
        </div>
      </div>

      {{-- Carte "Tarifs & inclusions" --}}
      <div class="bg-primary rounded-2xl p-6 md:p-8">
        <h2 class="md:text-4xl text-3xl mb-5">Tarifs & inclusions</h2>

        <div class="space-y-3">
          <div class="flex gap-3">
            <svg class="h-6 w-6 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            <p><strong>Vaccins de base & vermifuges</strong> réalisés selon l’âge du chiot.</p>
          </div>
          <div class="flex gap-3">
            <svg class="h-6 w-6 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            <p><strong>Contrat d’adoption</strong>, carnet de santé et guide d’intégration.</p>
          </div>
          <div class="flex gap-3">
            <svg class="h-6 w-6 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></svg>
            <p><strong>Socialisation</strong> en milieu familial et support post-adoption.</p>
          </div>
        </div>

        <div class="mt-6 p-4 bg-white rounded-xl">
          <p class="text-slate-800">
            <strong>Prix</strong> : varie selon la portée, la couleur et le type de pelage.  
            Contactez-nous pour le montant exact et les disponibilités.
          </p>
        </div>

        <div class="mt-6 p-4 bg-white/70 rounded-xl">
          <h3 class="font-semibold mb-1.5">Acompte</h3>
          <p class="text-slate-800">L’acompte confirme la réservation. Il est non remboursable en cas de désistement mais transférable sur une future portée si aucune correspondance n’est possible.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- PETIT FAQ (accordéon Preline) --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container-small">
    <div class="text-center md:mb-12.5 mb-7.5" data-aos="fade-up" data-aos-duration="500">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl">Questions fréquentes</h2>
    </div>

    <div class="md:space-y-7.5 space-y-5 hs-accordion-group max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="500">
      {{-- Q1 --}}
      <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
        <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
          <h3 class="md:text-1.5xl text-xl">Peut-on visiter avant la réservation&nbsp;?</h3>
          <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full inline-flex items-center justify-center">
            <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
            <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
          </div>
        </button>
        <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
          <p class="mt-5">Oui, sur rendez-vous et dans le respect des mesures d’hygiène pour les chiots.</p>
        </div>
      </div>

      {{-- Q2 --}}
      <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
        <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
          <h3 class="md:text-1.5xl text-xl">Âge de départ et suivi vétérinaire</h3>
          <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full inline-flex items-center justify-center">
            <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
            <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
          </div>
        </button>
        <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
          <p class="mt-5">Départ à partir de <strong>8 semaines</strong>, avec premiers vaccins et vermifuges effectués.</p>
        </div>
      </div>

      {{-- Q3 --}}
      <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
        <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
          <h3 class="md:text-1.5xl text-xl">Puis-je être prioritaire sur une couleur/type précis&nbsp;?</h3>
          <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full inline-flex items-center justify-center">
            <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
            <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
          </div>
        </button>
        <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
          <p class="mt-5">Nous ferons de notre mieux, mais le <strong>bien-être et l’adéquation du tempérament</strong> priment sur l’apparence.</p>
        </div>
      </div>
    </div>

    <div class="text-center mt-10">
      <a href="{{ route('faq') }}" class="underline font-medium">Voir toutes les questions fréquentes</a>
    </div>
  </div>
</section>

{{-- CTA image + panneau (style Landinger) --}}
<section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
  <div class="container">
    <div class="grid md:grid-cols-2" data-aos="fade-up" data-aos-duration="500">
      <div>
        <img src="{{ asset('photos/proprietaire-portee.jpg') }}" alt="" class="rounded-tl-2xl md:rounded-bl-2xl md:rounded-tr-none rounded-tr-2xl w-full h-auto object-cover">
      </div>
      <div class="bg-primary rounded-tr-2xl rounded-br-2xl lg:p-15 p-5 h-full flex justify-center flex-col">
        <h2 class="mb-2.5 md:text-4xl text-2.6xl">Prêt à réserver&nbsp;?</h2>
        <p class="mb-9">Écrivons-nous vos attentes, votre contexte familial et le type de compagnon souhaité — on vous guide pas à pas.</p>
        <div>
          <a href="{{ url('/#contact') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
            Nous contacter
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
