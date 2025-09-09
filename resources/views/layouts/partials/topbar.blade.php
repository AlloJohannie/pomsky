<!-- Navbar -->
<header class="bg-white/90 backdrop-blur sticky top-0 inset-x-0 z-20 border-b border-neutral-200">
  <div class="container">
    <div class="flex items-center justify-between py-3">
      <a href="{{ url('/') }}" class="flex items-center gap-3">
        <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo Petit Pomsky du Québec" class="h-9">
        <span class="sr-only">Passion familiale Petit « Pomsky » du Québec</span>
      </a>

      <nav id="navbar" class="hidden lg:flex items-center gap-6 text-sm font-medium text-dark">
        <a href="{{ url('/') }}" class="hover:underline">Accueil</a>
        <a href="{{ url('/#pomsky') }}" class="hover:underline">Le Pomsky</a>
        <a href="{{ url('/#portees') }}" class="hover:underline">Portées</a>
        <a href="{{ url('/#zootherapie') }}" class="hover:underline">Zoothérapie</a>
        <a href="{{ url('/#valeurs') }}" class="hover:underline">Valeurs</a>
        <a href="{{ url('/#galerie') }}" class="hover:underline">Galerie</a>
        <a href="{{ url('/#faq') }}" class="hover:underline">FAQ</a>
        <a href="{{ url('/#contact') }}" class="inline-flex items-center rounded-xl bg-primary px-4 py-2 text-dark hover:bg-black hover:text-primary transition">
          Nous contacter
        </a>
      </nav>

      <!-- Mobile -->
      <button class="lg:hidden size-9 rounded-xl bg-neutral-100 text-neutral-700 flex items-center justify-center"
              aria-label="Ouvrir le menu" data-hs-overlay="#mobileMenuOffcanvas">
        <i class="iconify tabler--menu-2"></i>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Menu (Offcanvas) -->
<div id="mobileMenuOffcanvas" class="hs-overlay hs-overlay-open:translate-y-0 hidden -translate-y-full fixed top-4 inset-x-4 rounded-2xl overflow-hidden transition-all duration-300 transform h-[80vh] z-50 bg-white shadow-xl" role="dialog" tabindex="-1" aria-labelledby="mobileMenuOffcanvas-label">
  <div class="h-14 flex items-center justify-between px-4 border-b border-neutral-200">
    <img src="{{ asset('images/logo/logo.svg') }}" alt="logo" class="h-8">
    <button type="button" class="bg-neutral-600/10 text-neutral-700 size-8 flex justify-center items-center rounded-full"
            aria-label="Fermer" data-hs-overlay="#mobileMenuOffcanvas">
      <i class="iconify tabler--x size-4"></i>
    </button>
  </div>
  <div class="p-4 space-y-2 text-dark">
    <a class="block py-2" href="{{ url('/') }}">Accueil</a>
    <a class="block py-2" href="{{ url('/#pomsky') }}">Le Pomsky</a>
    <a class="block py-2" href="{{ url('/#portees') }}">Portées</a>
    <a class="block py-2" href="{{ url('/#zootherapie') }}">Zoothérapie</a>
    <a class="block py-2" href="{{ url('/#valeurs') }}">Valeurs</a>
    <a class="block py-2" href="{{ url('/#galerie') }}">Galerie</a>
    <a class="block py-2" href="{{ url('/#faq') }}">FAQ</a>
    <a class="block mt-2 rounded-xl bg-primary px-4 py-3 text-center text-dark hover:bg-black hover:text-primary transition"
       href="{{ url('/#contact') }}">Nous contacter</a>
  </div>
</div>
