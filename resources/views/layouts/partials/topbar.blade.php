{{-- resources/views/partials/topbar.blade.php --}}
<!-- Navbar (style + comportement du template, avec tes liens) -->
<header class="bg-white sticky top-0 inset-x-0 z-20 transition-all duration-300">
  <div class="container">
    <div class="flex items-center justify-between py-2.5 lg:py-4.5">
      <!-- Brand -->
      <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
        <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo" class="hidden lg:block h-8 w-8 object-contain">
        <span class="text-dark font-bold tracking-tight text-base sm:text-lg lg:text-xl">
          Les Petits Pomsky du Québec
        </span>
      </a>

      <!-- Desktop nav (id=navbar pour l'état actif via landinger.js) -->
      <nav id="navbar" class="hidden lg:flex items-center justify-center gap-5">
        <!-- Accueil -->
        <a href="{{ route('home') }}" class="text-dark font-medium py-2.5 hover:underline">Accueil</a>

        <!-- Élevage (dropdown hover) -->
        <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex transition-all duration-300">
          <button type="button"
                  class="hs-dropdown-toggle text-dark flex items-center py-2.5 font-medium"
                  aria-haspopup="menu" aria-expanded="false" aria-label="Élevage">
            Élevage <i class="iconify tabler--chevron-down ps-5 size-4"></i>
          </button>
          <div class="hs-dropdown-menu hidden opacity-0 hs-dropdown-open:opacity-100 transition-[opacity,margin] duration
                      bg-white border border-neutral-200 rounded-2xl w-64 mt-2
                      before:absolute before:-top-4 before:start-0 before:w-full before:h-4
                      after:absolute after:-bottom-4 after:start-0 after:w-full after:h-4"
               role="menu">
            <div class="p-5">
              <a href="{{ url('/elevage/presentation') }}" class="block font-medium text-dark py-1.25 hover:underline">Présentation de la propriétaire</a>
              <a href="{{ url('/elevage/valeurs') }}" class="block font-medium text-dark py-1.25 hover:underline">Valeurs & mission</a>
              <a href="{{ route('dogs.femelles') }}" class="block font-medium text-dark py-1.25 hover:underline">Nos femelles</a>
              <a href="{{ route('dogs.males') }}" class="block font-medium text-dark py-1.25 hover:underline">Nos mâles</a>
              <a href="{{ route('litters.index') }}" class="block font-medium text-dark py-1.25 hover:underline">Nos portées</a>
              <a href="{{ url('/reservation-tarifs') }}" class="block font-medium text-dark py-1.25 hover:underline">Réservation & tarifs</a>
            </div>
          </div>
        </div>

        <!-- Le Pomsky -->
        <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex transition-all duration-300">
          <button type="button"
                  class="hs-dropdown-toggle text-dark flex items-center py-2.5 font-medium"
                  aria-haspopup="menu" aria-expanded="false" aria-label="Le Pomsky">
            Le Pomsky <i class="iconify tabler--chevron-down ps-5 size-4"></i>
          </button>
          <div class="hs-dropdown-menu hidden opacity-0 hs-dropdown-open:opacity-100 transition-[opacity,margin] duration
                      bg-white border border-neutral-200 rounded-2xl w-64 mt-2
                      before:absolute before:-top-4 before:start-0 before:w-full before:h-4
                      after:absolute after:-bottom-4 after:start-0 after:w-full after:h-4"
               role="menu">
            <div class="p-5">
              <a href="{{ url('/elevage/presentation') }}#pomsky" class="block font-medium text-dark py-1.25 hover:underline">Présentation de la race</a>
              <a href="{{ route('faq') }}" class="block font-medium text-dark py-1.25 hover:underline">FAQ</a>
            </div>
          </div>
        </div>

        <!-- Zoothérapie -->
        <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex transition-all duration-300">
          <button type="button"
                  class="hs-dropdown-toggle text-dark flex items-center py-2.5 font-medium"
                  aria-haspopup="menu" aria-expanded="false" aria-label="Zoothérapie">
            Zoothérapie <i class="iconify tabler--chevron-down ps-5 size-4"></i>
          </button>
          <div class="hs-dropdown-menu hidden opacity-0 hs-dropdown-open:opacity-100 transition-[opacity,margin] duration
                      bg-white border border-neutral-200 rounded-2xl w-72 mt-2
                      before:absolute before:-top-4 before:start-0 before:w-full before:h-4
                      after:absolute after:-bottom-4 after:start-0 after:w-full after:h-4"
               role="menu">
            <div class="p-5">
              <a href="{{ url('/zootherapie/valeurs') }}" class="block font-medium text-dark py-1.25 hover:underline">Valeurs</a>
              <a href="{{ url('/zootherapie/services') }}" class="block font-medium text-dark py-1.25 hover:underline">Nos services</a>
              <a href="{{ url('/zootherapie/tarifs') }}" class="block font-medium text-dark py-1.25 hover:underline">Nos tarifs</a>
              <a href="{{ url('/zootherapie/partenaires') }}" class="block font-medium text-dark py-1.25 hover:underline">Partenaires</a>
              <a href="{{ url('/zootherapie/pourquoi-nous-choisir') }}" class="block font-medium text-dark py-1.25 hover:underline">Pourquoi nous choisir</a>
            </div>
          </div>
        </div>

        <!-- Liens directs -->
        <a href="{{ url('/galerie') }}" class="text-dark font-medium py-2.5 hover:underline">Galerie</a>
        {{-- <a href="{{ url('/a-propos') }}" class="text-dark font-medium py-2.5 hover:underline">À propos</a> --}}
        <a href="{{ url('/#contact') }}" class="text-dark font-medium py-2.5 hover:underline">Contact</a>
      </nav>

      <!-- Droite: CTA + burger mobile -->
      <div class="flex items-center md:gap-4 gap-2.5">
        {{-- <a href="https://exemple-gateries.com" target="_blank" rel="noopener"
           class="hidden lg:inline-flex items-center rounded-2xl bg-primary text-dark hover:text-primary hover:bg-dark px-7.5 py-3.5 font-medium transition-all duration-300">
          Gâteries <i class="iconify tabler--external-link ms-1.5 size-4"></i>
        </a> --}}

<button type="button"
  class="lg:hidden inline-flex justify-center items-center rounded-2xl md:size-13 size-11 p-3.5 bg-dark text-white focus:text-black focus:bg-primary transition-all duration-300"
  aria-haspopup="dialog" aria-expanded="false" aria-controls="mobileMenuOffcanvas"
  data-hs-overlay="#mobileMenuOffcanvas">

  <svg viewBox="0 0 24 24" class="h-5 w-5" aria-hidden="true">
    <path d="M4 6h16M4 12h16M4 18h16"
          fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</button>

      </div>
    </div>
  </div>
</header>

<!-- Mobile Menu (Offcanvas du template, contenu = tes liens) -->
<div id="mobileMenuOffcanvas"
     class="hs-overlay hs-overlay-open:translate-y-0 hidden -translate-y-full fixed top-4 inset-x-4 rounded-lg overflow-hidden transition-all duration-300 transform h-[85vh] z-80 bg-white"
     role="dialog" tabindex="-1" aria-labelledby="mobileMenuOffcanvas-label">

  <!-- Header offcanvas -->
  <div class="h-16 flex items-center justify-between px-4 border-b border-neutral-200 sticky top-0 bg-white">
    <a href="{{ route('home') }}" class="font-bold text-dark">Les Petits Pomsky du Québec</a>
<button type="button"
        class="bg-neutral-600/15 text-neutral-600 size-8 flex justify-center items-center rounded-full"
        aria-label="Close"
        data-hs-overlay="#mobileMenuOffcanvas">
  <span class="sr-only">Close</span>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
       class="h-4 w-4" stroke="currentColor" stroke-width="2" fill="none"
       stroke-linecap="round" stroke-linejoin="round">
    <line x1="18" y1="6" x2="6" y2="18"/>
    <line x1="6" y1="6" x2="18" y2="18"/>
  </svg>
</button>

  </div>

  <!-- Corps offcanvas -->
  <div class="flex flex-col p-4 overflow-y-auto h-[calc(100%-64px)]">
    <div class="hs-accordion-group space-y-1.5">
      <a href="{{ route('home') }}" class="py-2.5 font-medium text-dark">Accueil</a>

      <!-- Élevage -->
      <div class="hs-accordion">
        <button class="hs-accordion-toggle w-full flex items-center justify-between py-2.5 font-medium text-dark">
          <span>Élevage</span>
          <i class="iconify tabler--chevron-down size-4 hs-accordion-active:rotate-180 transition-all"></i>
        </button>
        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height]">
          <a href="{{ url('/elevage/presentation') }}" class="block py-1.5">Présentation de la propriétaire</a>
          <a href="{{ url('/elevage/valeurs') }}" class="block py-1.5">Valeurs & mission</a>
          <a href="{{ route('dogs.femelles') }}" class="block py-1.5">Nos femelles</a>
          <a href="{{ route('dogs.males') }}" class="block py-1.5">Nos mâles</a>
          <a href="{{ route('litters.index') }}" class="block py-1.5">Nos portées</a>
          <a href="{{ url('/reservation-tarifs') }}" class="block py-1.5">Réservation & tarifs</a>
        </div>
      </div>

      <!-- Le Pomsky -->
      <div class="hs-accordion">
        <button class="hs-accordion-toggle w-full flex items-center justify-between py-2.5 font-medium text-dark">
          <span>Le Pomsky</span>
          <i class="iconify tabler--chevron-down size-4 hs-accordion-active:rotate-180 transition-all"></i>
        </button>
        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height]">
          <a href="{{ url('/elevage/presentation') }}#pomsky" class="block py-1.5">Présentation de la race</a>
          <a href="{{ route('faq') }}" class="block py-1.5">FAQ</a>
        </div>
      </div>

      <!-- Zoothérapie -->
      <div class="hs-accordion">
        <button class="hs-accordion-toggle w-full flex items-center justify-between py-2.5 font-medium text-dark">
          <span>Zoothérapie</span>
          <i class="iconify tabler--chevron-down size-4 hs-accordion-active:rotate-180 transition-all"></i>
        </button>
        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height]">
          <a href="{{ url('/zootherapie/valeurs') }}" class="block py-1.5">Valeurs</a>
          <a href="{{ url('/zootherapie/services') }}" class="block py-1.5">Nos services</a>
          <a href="{{ url('/zootherapie/tarifs') }}" class="block py-1.5">Nos tarifs</a>
          <a href="{{ url('/zootherapie/partenaires') }}" class="block py-1.5">Partenaires</a>
          <a href="{{ url('/zootherapie/pourquoi-nous-choisir') }}" class="block py-1.5">Pourquoi nous choisir</a>
        </div>
      </div>

      <a href="{{ url('/galerie') }}" class="py-2.5 font-medium text-dark">Galerie</a>
      {{-- <a href="{{ url('/a-propos') }}" class="py-2.5 font-medium text-dark">À propos</a> --}}
      <a href="{{ route('contact') }}" class="text-dark font-medium py-2.5 hover:underline">Contact</a>


      <!-- CTA externe -->
      {{-- <a href="https://exemple-gateries.com" target="_blank" rel="noopener"
         class="py-2.5 font-semibold text-primary">Gâteries (lien externe)</a> --}}
    </div>

    <!-- Bouton "Sign-in" style template (facultatif) -->
    {{-- <a class="mt-3 w-full bg-primary text-center text-dark hover:text-primary hover:bg-dark rounded-lg px-7.5 py-3.5 font-medium transition-all duration-300">Connexion</a> --}}
  </div>
</div>
