<!-- Navbar Pomsky -->
<header class="bg-white sticky transition-all text-white top-0 inset-x-0 w-screen z-20 duration-300">
  <div class="container">
    <div class="flex items-center justify-between py-2.5 lg:py-4.5">

      <!-- Logo -->
      <div class="text-lg font-bold">
        <a href="{{ route('home') }}">
          <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo Passion familiale Petit Pomsky du Québec" class="h-8.5 lg:h-9">
        </a>
      </div>

      <!-- Desktop nav -->
      <nav id="navbar" class="lg:flex hidden justify-center gap-5">

        <!-- Accueil (lien simple) -->
        <a href="{{ route('home') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
          Accueil
        </a>

        <!-- Élevage -->
        <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex transition-all duration-300">
          <button id="nav-elevage"
                  type="button"
                  class="hs-dropdown-toggle cursor-pointer text-dark flex items-center py-2.5 font-medium"
                  aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
            Élevage <i class="iconify tabler--chevron-down ps-5 size-4"></i>
          </button>

          <div class="hs-dropdown-menu border border-neutral-200 transition-[opacity,margin] rounded-2xl duration hs-dropdown-open:opacity-100 opacity-0 hidden w-64 bg-white mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
               role="menu" aria-orientation="vertical" aria-labelledby="nav-elevage">
            <div class="p-5">
              <a href="{{ url('/elevage/presentation') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                Présentation de moi
              </a>
              <a href="{{ url('/elevage/valeurs') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                Nos valeurs & mission
              </a>
              <a href="{{ route('dogs.femelles') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                Nos femelles
              </a>
              <a href="{{ route('dogs.males') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                Nos mâles
              </a>
              <a href="{{ route('litters.index') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                Nos portées
              </a>
            </div>
          </div>
        </div>

        <!-- Pomsky (description de la race) -->
        <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex transition-all duration-300">
          <button id="nav-pomsky"
                  type="button"
                  class="hs-dropdown-toggle cursor-pointer text-dark flex items-center py-2.5 font-medium"
                  aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
            Le Pomsky <i class="iconify tabler--chevron-down ps-5 size-4"></i>
          </button>

          <div class="hs-dropdown-menu border border-neutral-200 transition-[opacity,margin] rounded-2xl duration hs-dropdown-open:opacity-100 opacity-0 hidden w-64 bg-white mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
               role="menu" aria-orientation="vertical" aria-labelledby="nav-pomsky">
            <div class="p-5">
              <a href="{{ url('/elevage/presentation') }}#pomsky" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                Présentation du Pomsky
              </a>
              <a href="{{ route('faq') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                FAQ
              </a>
            </div>
          </div>
        </div>

        <!-- Zoothérapie -->
        <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex transition-all duration-300">
          <button id="nav-zootherapie"
                  type="button"
                  class="hs-dropdown-toggle cursor-pointer text-dark flex items-center py-2.5 font-medium"
                  aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
            Zoothérapie <i class="iconify tabler--chevron-down ps-5 size-4"></i>
          </button>

          <div class="hs-dropdown-menu border border-neutral-200 transition-[opacity,margin] rounded-2xl duration hs-dropdown-open:opacity-100 opacity-0 hidden w-72 bg-white mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
               role="menu" aria-orientation="vertical" aria-labelledby="nav-zootherapie">
            <div class="p-5">
              <a href="{{ url('/zootherapie/valeurs') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                Valeurs
              </a>
              <a href="{{ url('/zootherapie/services') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                Nos services
              </a>
              <a href="{{ url('/zootherapie/tarifs') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                Nos tarifs
              </a>
              <a href="{{ url('/zootherapie/partenaires') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                Partenaires
              </a>
            </div>
          </div>
        </div>

        <!-- Portées (accès direct) -->
        <a href="{{ route('litters.index') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
          Portées
        </a>

        <!-- FAQ (accès direct) -->
        <a href="{{ route('faq') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
          FAQ
        </a>

        <!-- Contact (ancre page d’accueil pour l’instant) -->
        <a href="{{ url('/#contact') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
          Contact
        </a>
      </nav>

      <!-- Right cluster: bouton mobile -->
      <div class="flex lg:hidden">
        <button type="button"
                class="bg-dark text-white focus:text-black focus:bg-primary inline-flex justify-center items-center rounded-2xl md:size-13 size-11 p-3.5 font-medium transition-all duration-300"
                aria-haspopup="dialog" aria-expanded="false" aria-controls="mobileMenuOffcanvas"
                data-hs-overlay="#mobileMenuOffcanvas">
          <span class="iconify tabler--menu-2 text-2xl size-5"></span>
        </button>
      </div>

    </div>
  </div>
</header>

<!-- Mobile Menu (Offcanvas) -->
<div id="mobileMenuOffcanvas"
     class="hs-overlay hs-overlay-open:translate-y-0 hidden -translate-y-full fixed top-4 inset-x-4 rounded-lg overflow-hidden transition-all duration-300 transform h-80 z-80 bg-white"
     role="dialog" tabindex="-1" aria-labelledby="mobileMenuOffcanvas-label">

  <div class="h-16 flex items-center justify-between px-4 border-b border-neutral-200 sticky top-0">
    <a href="{{ route('home') }}">
      <img src="{{ asset('images/logo/logo.svg') }}" alt="logo" class="h-8">
    </a>
    <button type="button" class="bg-neutral-600/15 text-neutral-600 size-8 flex justify-center items-center rounded-full"
            aria-label="Close" data-hs-overlay="#mobileMenuOffcanvas">
      <span class="sr-only">Close</span>
      <i class="iconify tabler--x size-4"></i>
    </button>
  </div>

  <div class="flex flex-col p-4 overflow-y-auto h-[calc(100%-64px)]">
    <div class="hs-accordion-group">

      <a href="{{ route('home') }}" class="text-dark text-base flex items-center py-2.5 font-medium">Accueil</a>

      <!-- Élevage -->
      <div class="hs-accordion">
        <button class="hs-accordion-toggle text-dark w-full flex items-center justify-between py-2.5 font-medium">
          <span>Élevage</span>
          <i class="iconify tabler--chevron-down size-4 hs-accordion-active:rotate-180 transition-all"></i>
        </button>
        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height]">
          <a href="{{ url('/elevage/presentation') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">Présentation de moi</a>
          <a href="{{ url('/elevage/valeurs') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">Nos valeurs & mission</a>
          <a href="{{ route('dogs.femelles') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">Nos femelles</a>
          <a href="{{ route('dogs.males') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">Nos mâles</a>
          <a href="{{ route('litters.index') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">Nos portées</a>
        </div>
      </div>

      <!-- Pomsky -->
      <div class="hs-accordion">
        <button class="hs-accordion-toggle text-dark w-full flex items-center justify-between py-2.5 font-medium">
          <span>Le Pomsky</span>
          <i class="iconify tabler--chevron-down size-4 hs-accordion-active:rotate-180 transition-all"></i>
        </button>
        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height]">
          <a href="{{ url('/elevage/presentation') }}#pomsky" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">Présentation du Pomsky</a>
          <a href="{{ route('faq') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">FAQ</a>
        </div>
      </div>

      <!-- Zoothérapie -->
      <div class="hs-accordion">
        <button class="hs-accordion-toggle text-dark w-full flex items-center justify-between py-2.5 font-medium">
          <span>Zoothérapie</span>
          <i class="iconify tabler--chevron-down size-4 hs-accordion-active:rotate-180 transition-all"></i>
        </button>
        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height]">
          <a href="{{ url('/zootherapie/valeurs') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">Valeurs</a>
          <a href="{{ url('/zootherapie/services') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">Nos services</a>
          <a href="{{ url('/zootherapie/tarifs') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">Nos tarifs</a>
          <a href="{{ url('/zootherapie/partenaires') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">Partenaires</a>
        </div>
      </div>

      <a href="{{ route('litters.index') }}" class="text-dark text-base flex items-center py-2.5 font-medium">Portées</a>
      <a href="{{ route('faq') }}" class="text-dark text-base flex items-center py-2.5 font-medium">FAQ</a>
      <a href="{{ url('/#contact') }}" class="text-dark text-base flex items-center py-2.5 font-medium">Contact</a>
    </div>
  </div>
</div>
