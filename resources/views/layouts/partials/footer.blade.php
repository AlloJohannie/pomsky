@php
  $footerLogoCandidates = [
    public_path('images/logo/carte_affaire.jpg'), // carte d’affaire
  ];
  $footerLogoSrc = collect($footerLogoCandidates)->first(fn($p) => file_exists($p));
  $footerLogoUrl = $footerLogoSrc ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $footerLogoSrc)) : null;
@endphp

<footer class="bg-dark text-white pt-14 pb-10">
  <div class="container">
    <div class="grid lg:grid-cols-4 gap-10 items-start">
      {{-- Colonne logo (plus grand, sans texte) --}}
      <div class="col-span-2 flex justify-center lg:justify-start">
        @if($footerLogoUrl)
          <img src="{{ $footerLogoUrl }}"
               alt="Carte d'affaire"
               class="max-h-32 w-auto rounded-xl shadow-lg"> {{-- ↑ hauteur augmentée (max-h-32 ≈ 8rem) --}}
        @endif
      </div>

      {{-- Navigation --}}
      <div>
        <h4 class="font-semibold mb-3 text-white">Navigation</h4>
        <ul class="space-y-2 text-sm">
          <li><a class="hover:underline" href="{{ url('/#portees') }}">Portées</a></li>
          <li><a class="hover:underline" href="{{ url('/#pomsky') }}">Le Pomsky</a></li>
          <li><a class="hover:underline" href="{{ url('/#zootherapie') }}">Zoothérapie</a></li>
          <li><a class="hover:underline" href="{{ url('/#galerie') }}">Galerie</a></li>
          <li><a class="hover:underline" href="{{ url('/#faq') }}">FAQ</a></li>
        </ul>
      </div>

      {{-- Contact --}}
      <div>
        <h4 class="font-semibold mb-3 text-white">Contact</h4>
        <p class="text-sm">
          <a class="underline" href="mailto:pomskyduquebec@hotmail.com">pomskyduquebec@hotmail.com</a><br>
          Québec, Canada
        </p>
      </div>
    </div>

    <hr class="border-neutral-700 my-8">

    <div class="text-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-2">
      <div>© <script>document.write(new Date().getFullYear())</script> Passion familiale : Petit Pomsky du Québec.</div>
      <div>Fait avec ❤️ pour les chiens & le bien-être.</div>
    </div>
  </div>
</footer>
