<footer class="bg-dark text-white pt-14 pb-10">
  <div class="container">
    <div class="grid lg:grid-cols-4 gap-10">
      <div class="col-span-2">
        <img src="{{ asset('images/logo/logo.svg') }}" alt="" class="h-10">
        <p class="mt-3 max-w-lg">Passion familiale – Petit « Pomsky » du Québec. Élevage familial et zoothérapie pour des liens durables.</p>
      </div>
      <div>
        <h4 class="font-semibold mb-3">Navigation</h4>
        <ul class="space-y-2 text-sm">
          <li><a class="hover:underline" href="{{ url('/#portees') }}">Portées</a></li>
          <li><a class="hover:underline" href="{{ url('/#pomsky') }}">Le Pomsky</a></li>
          <li><a class="hover:underline" href="{{ url('/#zootherapie') }}">Zoothérapie</a></li>
          <li><a class="hover:underline" href="{{ url('/#galerie') }}">Galerie</a></li>
          <li><a class="hover:underline" href="{{ url('/#faq') }}">FAQ</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold mb-3">Contact</h4>
        <p class="text-sm">
          <a class="underline" href="mailto:info@petitpomskyduquebec.ca">info@petitpomskyduquebec.ca</a><br>
          Québec, Canada
        </p>
      </div>
    </div>

    <hr class="border-neutral-700 my-8">
    <div class="text-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-2">
      <div>© <script>document.write(new Date().getFullYear())</script> Petit « Pomsky » du Québec.</div>
      <div>Fait avec ❤️ pour les chiens & le bien-être.</div>
    </div>
  </div>
</footer>
