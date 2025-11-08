<header class="bg-white/90 backdrop-blur-md sticky top-0 inset-x-0 z-50 border-b border-neutral-200 shadow-sm transition-all duration-300">
  <div class="container flex items-center justify-between py-3 lg:py-4">
    @php
      $logoCandidates = [
        public_path('images/logo/logo_large.jpg'),
        public_path('images/logo/logo_noir.png'),
        public_path('images/logo/logo_noir.jpg'),
        public_path('images/logo/logo_blanc.png'),
      ];
      $logoSrc = collect($logoCandidates)->first(fn($p) => file_exists($p));
      $logoUrl = $logoSrc ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $logoSrc)) : null;
    @endphp

    {{-- LOGO & TITRE --}}
    <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0 hover:opacity-90 transition">
@if($logoUrl)
  <img src="{{ $logoUrl }}" alt="Logo" 
       class="object-contain max-h-10 w-auto lg:max-h-12 transition-all duration-300"
       style="max-width: 60px;">
@endif

      <span class="text-[#003E91] font-bold tracking-tight text-base sm:text-lg lg:text-xl">
        Passion familiale : Petit Pomsky du Québec
      </span>
    </a>

    {{-- NAVIGATION DESKTOP --}}
    <nav id="navbar" class="hidden lg:flex items-center gap-7 text-[15px] font-medium text-gray-800">

      {{-- ACCUEIL --}}
      <a href="{{ route('home') }}" class="relative group py-2 hover:text-[#0054A6]">
        Accueil
        <span class="absolute bottom-0 left-0 w-0 group-hover:w-full h-0.5 bg-[#0054A6] transition-all"></span>
      </a>

      {{-- ÉLEVAGE --}}
      <div class="relative group">
        <button type="button"
                class="flex items-center gap-1 py-2 hover:text-[#0054A6] focus:text-[#0054A6]"
                aria-expanded="false" aria-haspopup="true">
          Élevage
          <i class="iconify" data-icon="tabler:chevron-down" style="font-size: 1rem;"></i>
        </button>
        <div class="absolute left-0 top-full mt-2 bg-white border border-neutral-200 rounded-xl shadow-lg w-64 text-sm text-gray-700
                    opacity-0 invisible translate-y-2 transition-all duration-200 ease-out
                    group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
          <div class="p-3 space-y-1">
            <a href="{{ url('/elevage/presentation') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">Présentation</a>
            <a href="{{ url('/elevage/valeurs') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">Valeurs & mission</a>
            <a href="{{ route('dogs.femelles') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">Nos femelles</a>
            <a href="{{ route('dogs.males') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">Nos mâles</a>
            <a href="{{ route('litters.index') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">Portées</a>
            <a href="{{ url('/reservation-tarifs') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">Réservation & tarifs</a>
          </div>
        </div>
      </div>

      {{-- LE POMSKY --}}
      <div class="relative group">
        <button type="button"
                class="flex items-center gap-1 py-2 hover:text-[#0054A6] focus:text-[#0054A6]"
                aria-expanded="false" aria-haspopup="true">
          Le Pomsky
          <i class="iconify" data-icon="tabler:chevron-down" style="font-size: 1rem;"></i>
        </button>
        <div class="absolute left-0 top-full mt-2 bg-white border border-neutral-200 rounded-xl shadow-lg w-60 text-sm text-gray-700
                    opacity-0 invisible translate-y-2 transition-all duration-200 ease-out
                    group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
          <div class="p-3 space-y-1">
            <a href="{{ url('/elevage/pomsky') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">Le Pomsky – Né d’un rêve</a>
            <a href="{{ route('faq') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">FAQ</a>
          </div>
        </div>
      </div>

      {{-- ZOOTHÉRAPIE --}}
      <div class="relative group">
        <button type="button"
                class="flex items-center gap-1 py-2 hover:text-[#0054A6] focus:text-[#0054A6]"
                aria-expanded="false" aria-haspopup="true">
          Zoothérapie
          <i class="iconify" data-icon="tabler:chevron-down" style="font-size: 1rem;"></i>
        </button>
        <div class="absolute left-0 top-full mt-2 bg-white border border-neutral-200 rounded-xl shadow-lg w-72 text-sm text-gray-700
                    opacity-0 invisible translate-y-2 transition-all duration-200 ease-out
                    group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
          <div class="p-3 space-y-1">
            <a href="{{ url('/zootherapie/valeurs') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">Mission & valeurs</a>
            <a href="{{ url('/zootherapie/services') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">Nos services</a>
            <a href="{{ url('/zootherapie/tarifs') }}" class="block py-1.5 px-2 rounded hover:bg-[#0054A6]/10">Tarifs</a>
          </div>
        </div>
      </div>

      {{-- GALERIE & CONTACT --}}
      <a href="{{ url('/galerie') }}" class="relative group py-2 hover:text-[#0054A6]">
        Galerie
        <span class="absolute bottom-0 left-0 w-0 group-hover:w-full h-0.5 bg-[#0054A6] transition-all"></span>
      </a>
      <a href="{{ url('/contact') }}" class="relative group py-2 hover:text-[#0054A6]">
        Contact
        <span class="absolute bottom-0 left-0 w-0 group-hover:w-full h-0.5 bg-[#0054A6] transition-all"></span>
      </a>
    </nav>

    {{-- MENU MOBILE --}}
    <button type="button"
      class="lg:hidden inline-flex justify-center items-center rounded-xl size-11 bg-[#0054A6] text-white hover:bg-[#003E91] transition"
      aria-label="Menu"
      data-hs-overlay="#mobileMenuOffcanvas">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
</header>

{{-- MOBILE MENU --}}
<div id="mobileMenuOffcanvas"
     class="hs-overlay hs-overlay-open:translate-y-0 hidden -translate-y-full fixed top-4 inset-x-4 rounded-lg overflow-hidden transition-all duration-300 transform h-[85vh] z-80 bg-white"
     role="dialog" tabindex="-1" aria-labelledby="mobileMenuOffcanvas-label">

  <div class="h-16 flex items-center justify-between px-4 border-b border-neutral-200 sticky top-0 bg-white">
    <a href="{{ route('home') }}" class="font-bold text-[#003E91]">Les Petits Pomsky du Québec</a>
    <button type="button"
            class="bg-neutral-600/15 text-neutral-600 size-8 flex justify-center items-center rounded-full"
            aria-label="Fermer"
            data-hs-overlay="#mobileMenuOffcanvas">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"/>
        <line x1="6" y1="6" x2="18" y2="18"/>
      </svg>
    </button>
  </div>

  <div class="flex flex-col p-4 overflow-y-auto h-[calc(100%-64px)] space-y-1.5 text-gray-800">
    <a href="{{ route('home') }}" class="py-2.5 font-medium">Accueil</a>

    <details class="group">
      <summary class="py-2.5 font-medium cursor-pointer flex items-center justify-between">Élevage <i class="iconify" data-icon="tabler:chevron-down"></i></summary>
      <div class="pl-3 space-y-1 text-sm">
        <a href="{{ url('/elevage/presentation') }}" class="block py-1.5">Présentation</a>
        <a href="{{ url('/elevage/valeurs') }}" class="block py-1.5">Valeurs & mission</a>
        <a href="{{ route('dogs.femelles') }}" class="block py-1.5">Nos femelles</a>
        <a href="{{ route('dogs.males') }}" class="block py-1.5">Nos mâles</a>
        <a href="{{ route('litters.index') }}" class="block py-1.5">Portées</a>
        <a href="{{ url('/reservation-tarifs') }}" class="block py-1.5">Réservation & tarifs</a>
      </div>
    </details>

    <details class="group">
      <summary class="py-2.5 font-medium cursor-pointer flex items-center justify-between">Le Pomsky <i class="iconify" data-icon="tabler:chevron-down"></i></summary>
      <div class="pl-3 space-y-1 text-sm">
        <a href="{{ url('/elevage/pomsky') }}" class="block py-1.5">Le Pomsky – Né d’un rêve</a>
        <a href="{{ route('faq') }}" class="block py-1.5">FAQ</a>
      </div>
    </details>

    <details class="group">
      <summary class="py-2.5 font-medium cursor-pointer flex items-center justify-between">Zoothérapie <i class="iconify" data-icon="tabler:chevron-down"></i></summary>
      <div class="pl-3 space-y-1 text-sm">
        <a href="{{ url('/zootherapie/valeurs') }}" class="block py-1.5">Mission & valeurs</a>
        <a href="{{ url('/zootherapie/services') }}" class="block py-1.5">Nos services</a>
        <a href="{{ url('/zootherapie/tarifs') }}" class="block py-1.5">Tarifs</a>
      </div>
    </details>

    <a href="{{ url('/galerie') }}" class="py-2.5 font-medium">Galerie</a>
    <a href="{{ url('/contact') }}" class="py-2.5 font-medium">Contact</a>
  </div>
</div>
