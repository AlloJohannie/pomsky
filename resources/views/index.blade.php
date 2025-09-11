@extends('layouts.landing', ['title' => 'Passion familiale Petit "Pomsky" du Québec'])

@section('content')

@php
  // Liste auto des images pour la galerie (jpg, jpeg, png, webp)
  $gallery = $gallery ?? array_map('basename', glob(public_path('photos/*.{jpg,jpeg,png,webp}'), GLOB_BRACE) ?: []);
@endphp

<!-- Hero -->
<!-- Hero -->
<section class="bg-gradient-to-b from-white to-slate-50">
  <div class="container py-16 md:py-24">
    <div class="grid lg:grid-cols-12 gap-10 items-center">
      
      <!-- Texte : prend 2 colonnes -->
      <div data-aos="fade-right" class="lg:col-span-7">
        <p class="inline-flex bg-primary text-dark px-3 py-1 rounded-full text-sm font-medium">Passion familiale</p>
        <h1 class="mt-4 text-4xl md:text-5.5xl font-bold">
          Petit « Pomsky » du Québec
        </h1>
        <p class="mt-4 text-slate-700 max-w-2xl">
          Élevage familial passionné et services de zoothérapie professionnels pour créer des liens durables et apporter du bien-être.
        </p>
        <div class="mt-6 flex flex-wrap gap-3">
          <a href="{{ url('/#portees') }}" class="rounded-xl bg-dark text-white px-5 py-3 hover:text-primary transition">Nos portées</a>
          <a href="{{ url('/#zootherapie') }}" class="rounded-xl ring-1 ring-neutral-300 px-5 py-3 hover:bg-neutral-100 transition">Zoothérapie</a>
        </div>
      </div>

      <!-- Image : prend 1 colonne -->
      <div data-aos="fade-left" class="relative lg:col-span-5">
        <img src="{{ asset('photos/proprietaire-portee.jpg') }}" alt="Pomsky" class="w-full h-auto rounded-2xl shadow-xl object-cover">
      </div>

    </div>
  </div>
</section>


<!-- Services (Élevage / Zoothérapie) -->
<section class="py-16 md:py-20">
  <div class="container">
    <h2 class="text-3xl md:text-4xl font-semibold text-center">Deux passions réunies pour votre bien-être</h2>
    <div class="grid md:grid-cols-2 gap-6 mt-10">
      <div class="bg-white rounded-2xl p-6 md:p-8 border border-neutral-200">
        <h3 class="text-2xl font-semibold">Élevage Pomsky</h3>
        <p class="mt-2 text-slate-700">Nous élevons avec passion des Pomsky de qualité exceptionnelle dans un environnement familial aimant.</p>
        <ul class="mt-4 space-y-2 text-slate-700">
          <li class="flex gap-2"><i class="iconify tabler--check text-primary mt-1"></i> Lignées sélectionnées</li>
          <li class="flex gap-2"><i class="iconify tabler--check text-primary mt-1"></i> Socialisation précoce</li>
          <li class="flex gap-2"><i class="iconify tabler--check text-primary mt-1"></i> Suivi vétérinaire</li>
        </ul>
        <a href="{{ url('/#portees') }}" class="mt-6 inline-flex items-center gap-2 underline font-medium">Découvrir nos portées <i class="iconify tabler--arrow-right"></i></a>
      </div>

      <div id="zootherapie" class="bg-white rounded-2xl p-6 md:p-8 border border-neutral-200">
        <h3 class="text-2xl font-semibold">Zoothérapie</h3>
        <p class="mt-2 text-slate-700">Nous utilisons le lien humain-animal pour soutenir le mieux-être, la confiance et l’expression des émotions.</p>
        <ul class="mt-4 space-y-2 text-slate-700">
          <li class="flex gap-2"><i class="iconify tabler--check text-primary mt-1"></i> Thérapie individuelle</li>
          <li class="flex gap-2"><i class="iconify tabler--check text-primary mt-1"></i> Séances de groupe</li>
          <li class="flex gap-2"><i class="iconify tabler--check text-primary mt-1"></i> Suivi personnalisé</li>
        </ul>
        <a href="{{ url('/#contact') }}" class="mt-6 inline-flex items-center gap-2 underline font-medium">Découvrir nos services <i class="iconify tabler--arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Le Pomsky -->
<section id="pomsky" class="bg-white py-16 md:py-20">
  <div class="container grid lg:grid-cols-2 gap-10 items-center">
    <div data-aos="fade-right">
      <h2 class="text-3xl md:text-4xl font-semibold">Présentation du Pomsky</h2>
      <p class="mt-4 text-slate-700">
        Le Pomsky est un compagnon vif, affectueux et intelligent, issu du croisement entre le Husky sibérien et le Spitz nain (Pomeranian).
        Idéal pour la vie de famille lorsqu’il bénéficie d’activités quotidiennes et d’une éducation cohérente.
      </p>
      <ul class="mt-4 grid sm:grid-cols-2 gap-2 text-slate-700">
        <li class="flex gap-2"><i class="iconify tabler--paw"></i> Énergie modérée à élevée</li>
        <li class="flex gap-2"><i class="iconify tabler--mood-smile"></i> Très sociable</li>
        <li class="flex gap-2"><i class="iconify tabler--ruler"></i> Taille petite à moyenne</li>
        <li class="flex gap-2"><i class="iconify tabler--heart"></i> Fort lien avec l’humain</li>
      </ul>
    </div>
    <div data-aos="fade-left">
      <img src="{{ asset('photos/' . ($gallery[1] ?? ($gallery[0] ?? ''))) }}" class="rounded-2xl w-full h-auto object-cover" alt="Chiots Pomsky">
    </div>
  </div>
</section>

<!-- Valeurs & mission -->
<section id="valeurs" class="py-16 md:py-20">
  <div class="container">
    <h2 class="text-3xl md:text-4xl font-semibold text-center">Nos valeurs & mission</h2>
    <div class="grid md:grid-cols-4 gap-6 mt-10">
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <h3 class="font-semibold">Approche familiale</h3>
        <p class="mt-2 text-slate-700">Chiots élevés à la maison, habitués aux humains et aux bruits du quotidien.</p>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <h3 class="font-semibold">Bien-être animal</h3>
        <p class="mt-2 text-slate-700">Respect des besoins physiques et émotionnels à chaque étape.</p>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <h3 class="font-semibold">Transparence</h3>
        <p class="mt-2 text-slate-700">Suivi clair, informations de santé et accompagnement honnête.</p>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <h3 class="font-semibold">Zoothérapie</h3>
        <p class="mt-2 text-slate-700">Des interventions professionnelles centrées sur la relation humain-animal.</p>
      </div>
    </div>
  </div>
</section>

<!-- Portées -->
<section id="portees" class="bg-white py-16 md:py-20">
  <div class="container">
    <div class="flex items-end justify-between gap-4">
      <h2 class="text-3xl md:text-4xl font-semibold">Nos portées</h2>
      <a href="{{ url('/#contact') }}" class="text-sm underline font-medium">Comment réserver</a>
    </div>
    <p class="mt-3 text-slate-700">Section à mettre à jour à chaque nouvelle portée (photos, parents, date d’adoption, inclusions).</p>

    <div class="grid md:grid-cols-3 gap-6 mt-8">
      @foreach(array_slice($gallery, 0, 3) as $g)
        <div class="bg-white border border-neutral-200 rounded-2xl overflow-hidden">
          <img class="w-full h-56 object-cover" src="{{ asset('photos/'.$g) }}" alt="Portée">
          <div class="p-4">
            <h3 class="font-semibold">Portée récente</h3>
            <p class="text-sm text-slate-700 mt-1">Socialisés, suivis vétérinaires, départ avec contrat et conseils.</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Pourquoi nous choisir -->
<section class="py-16 md:py-20">
  <div class="container">
    <h2 class="text-3xl md:text-4xl font-semibold text-center">Pourquoi nous choisir ?</h2>
    <div class="grid md:grid-cols-4 gap-6 mt-10">
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <h3 class="font-semibold">Approche familiale</h3>
        <p class="mt-2 text-slate-700">Environnement chaleureux et sécurisant.</p>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <h3 class="font-semibold">Expertise reconnue</h3>
        <p class="mt-2 text-slate-700">Formation et expérience en élevage et intervention.</p>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <h3 class="font-semibold">Garantie santé</h3>
        <p class="mt-2 text-slate-700">Suivi vétérinaire rigoureux.</p>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <h3 class="font-semibold">Accompagnement</h3>
        <p class="mt-2 text-slate-700">Conseils et support tout au long de la vie du compagnon.</p>
      </div>
    </div>
  </div>
</section>

<!-- Galerie -->
<section id="galerie" class="bg-white py-16 md:py-20">
  <div class="container">
    <h2 class="text-3xl md:text-4xl font-semibold text-center">Galerie photos</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
      @forelse($gallery as $file)
        <img src="{{ asset('photos/'.$file) }}" alt="Pomsky" class="w-full h-48 object-cover rounded-xl">
      @empty
        <p class="col-span-full text-center text-slate-600">Ajoute tes photos dans <code>public/photos</code>.</p>
      @endforelse
    </div>
  </div>
</section>

<!-- FAQ (aperçu) -->
<section id="faq" class="py-16 md:py-20">
  <div class="container">
    <h2 class="text-3xl md:text-4xl font-semibold text-center">FAQ</h2>
    <div class="mt-8 grid md:grid-cols-2 gap-6">
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <h3 class="font-semibold">Le Pomsky perd-il beaucoup de poils ?</h3>
        <p class="mt-2 text-slate-700">Oui, surtout aux périodes de mue. Un brossage régulier limite la perte et garde le poil sain.</p>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <h3 class="font-semibold">À partir de quel âge un chiot peut partir ?</h3>
        <p class="mt-2 text-slate-700">Jamais avant 8 semaines et après la première visite vétérinaire.</p>
      </div>
    </div>
  </div>
</section>
{{-- === CTA Gâteries (style Landinger) === --}}
@php
  $treatsUrl = 'https://exemple-gateries.com'; // remplace par l’URL réelle
  $treatsImg = asset('photos/gateries.jpg');   // remplace par ton image ou mets un placeholder
@endphp

<section id="gateries" class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="grid md:grid-cols-2" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
      
      {{-- Visuel --}}
      <div>
        <img src="{{ $treatsImg }}" alt="Gâteries pour chiens" class="rounded-tl-2xl md:rounded-bl-2xl md:rounded-tr-none rounded-tr-2xl w-full h-auto object-cover">
      </div>

      {{-- Panneau texte + bouton --}}
      <div class="bg-primary rounded-tr-2xl rounded-br-2xl lg:p-15 p-5 h-full flex justify-center flex-col">
        <h2 class="mb-2.5 md:text-4xl text-2.6xl">Envie de gâter votre compagnon&nbsp;?</h2>
        <p class="mb-9">
          Découvrez notre entreprise partenaire de <strong>gâteries saines et naturelles</strong> pour chiens — parfaites pour l’entraînement et les petites récompenses au quotidien.
        </p>

        <div>
          <a href="{{ $treatsUrl }}" target="_blank" rel="noopener"
             class="py-3.5 lg:px-7.5 px-6.5 inline-flex items-center gap-2 text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
            Visiter la boutique
            {{-- Icône lien externe (inline SVG, pas besoin d’Iconify) --}}
            <svg viewBox="0 0 24 24" class="h-5 w-5" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 13v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
              <path d="M15 3h6v6"/>
              <path d="M10 14 21 3"/>
            </svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Contact / Réserver -->
<section id="contact" class="bg-gradient-to-b from-slate-50 to-white py-16 md:py-20">
  <div class="container grid lg:grid-cols-2 gap-10 items-center">
    <div>
      <h2 class="text-3xl md:text-4xl font-semibold">Prêt à rencontrer votre futur compagnon ?</h2>
      <p class="mt-3 text-slate-700">Écris-nous pour connaître les prochaines portées ou pour nos services de zoothérapie.</p>
      <ul class="mt-4 text-slate-700 space-y-1">
        <li><i class="iconify tabler--mail me-2"></i> <a class="underline" href="mailto:info@petitpomskyduquebec.ca">info@petitpomskyduquebec.ca</a></li>
        <li><i class="iconify tabler--brand-instagram me-2"></i> <a class="underline" href="#" target="_blank" rel="noopener">Instagram</a></li>
      </ul>
    </div>
    <form class="bg-white border border-neutral-200 rounded-2xl p-6 md:p-8">
      <div class="grid md:grid-cols-2 gap-4">
        <input type="text" class="w-full rounded-xl border-neutral-300" placeholder="Nom">
        <input type="email" class="w-full rounded-xl border-neutral-300" placeholder="Courriel">
        <input type="tel" class="w-full rounded-xl border-neutral-300 md:col-span-2" placeholder="Téléphone (optionnel)">
        <textarea class="w-full rounded-xl border-neutral-300 md:col-span-2" rows="4" placeholder="Votre message"></textarea>
      </div>
      <button class="mt-5 w-full rounded-xl bg-dark text-white py-3 hover:text-primary transition" type="submit">Envoyer</button>
    </form>
  </div>
</section>
@endsection
