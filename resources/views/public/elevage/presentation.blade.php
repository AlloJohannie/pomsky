@extends('layouts.landing', ['title' => 'Fondatrice & Histoire'])

@section('content')
@php
  $banner = collect([
    public_path('photos/proprietaire-portee.jpg'),
    public_path('photos/pomsky-deux-chiots-02.jpg'),
    public_path('photos/pomsky-chiot-studio-30.jpg'),
  ])->first(fn($p) => file_exists($p));
  $banner = $banner ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $banner)) : '/images/blog/6.png';
@endphp

<!-- Détails (format blog) -->
<section class="bg-white lg:py-25 md:py-12.5 py-7.5">
  <div class="container-small">
    <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">

      <!-- En-tête -->
      <div class="text-center md:pb-12.5 pb-5">
        <div class="mb-7.5 flex gap-7.5 justify-center">
          <div class="bg-dark py-0.5 px-3.75 rounded-full font-medium text-sm text-primary">Présentation de la propriétaire</div>
          <p>Saint-Philippe de La Prairie, Montérégie</p>
        </div>

        <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">
          Passion familiale — Petit Pomsky du Québec
        </h1>
        <p class="mb-2.5 text-slate-700">
          Élevage éthique & interventions en zoothérapie portées par Tyna, fondatrice.
        </p>
      </div>

      <!-- Visuel -->
      <div>
        <img src="{{ $banner }}" alt="Fondatrice & chiots Pomsky" class="rounded-2xl w-full h-auto object-cover">
      </div>

      <!-- 1. Fondatrice & Histoire -->
      <article class="prose prose-neutral max-w-none md:mt-10 mt-7.5">
        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Fondatrice & Histoire</h2>
        Je m'appelle Tyna, fondatrice de Passion familiale, petit pomsky du Québec, un élevage éthique situé à Saint-Philippe de La Prairie, en Montérégie. Depuis mon plus jeune âge, les chiens occupent une place centrale dans ma vie. Enfant, je rêvais de devenir vétérinaire — une vocation du cœur — mais mes résultats en mathématiques m’ont orientée vers une autre carrière. Pourtant, l’amour des chiens ne m’a jamais quittée. Il est resté ancré en moi, guidant chaque étape de mon parcours.
        <p><strong>Je m’appelle Tyna</strong>, fondatrice de <em>Passion familiale, Petit Pomsky du Québec</em>, un élevage éthique situé à Saint-Philippe de La Prairie, en Montérégie. Depuis l’enfance, les chiens occupent une place centrale dans ma vie. Je rêvais de devenir vétérinaire — une vocation du cœur — mais ma trajectoire m’a menée ailleurs. L’amour des chiens, lui, ne m’a jamais quittée.</p>
        <br>
        <p>Créer Passion familiale a été ma façon de vivre pleinement cette passion. <strong>Les chiots naissent à la maison</strong>, y sont sevrés et socialisés dans un environnement familial, calme et stimulant. Une <strong>Berger Blanc Suisse</strong> douce et protectrice participe à leur équilibre au quotidien.</p>
        <br>
        <p>Lors des mises bas, je reste au chevet de ma chienne — 5 heures, 24 heures s’il le faut — pour l’accompagner avec douceur et respect. <strong>Dès la naissance</strong>, chaque chiot est pris en charge avec soin : nettoyage, tétée, confort et hygiène. J’applique un <strong>protocole sanitaire strict</strong> afin d’assurer une croissance harmonieuse. Mon objectif : des chiots <strong>équilibrés, bien socialisés et prêts</strong> à s’épanouir dans leur famille.</p>
        <br>
        <p>Au-delà de l’élevage, Passion familiale est aussi un <strong>espace de bien-être</strong> grâce à notre second pôle d’activité : la <strong>zoothérapie</strong>, proposée en Montérégie (milieux scolaires, organisationnels et en pratique privée). Mes chiens y apportent présence apaisante et réconfort.</p>
        <br>
        <p>Avec un ami d’enfance, j’ai cofondé <strong>Yoganimo Inc.</strong> (région de Québec), qui offre des séances de <em>puppy yoga</em> favorisant la socialisation des chiots issus de plusieurs élevages québécois tout en créant des moments de bonheur pour les participants. J’organise également des <strong>séances de puppy yoga en Montérégie</strong> avec les chiots de mon élevage. J’accorde une grande importance à la <strong>socialisation précoce</strong>, aux <strong>expériences variées</strong> (bruits, textures, odeurs, voiture, neige, gazon, etc.).</p>
        <br>
        <p>Je dirige aussi une entreprise de <strong>gâteries 100 % naturelles</strong> pour chiens. Mes chiens sont nourris <em>au cru</em> ou <em>au cru déshydraté</em>, et reçoivent des récompenses de qualité (légumes déshydratés, fromage de yak, <em>bully sticks</em>). Le <strong>bien-être</strong> passe aussi par une <strong>alimentation saine</strong>.</p>
        <br>
        <p>Enfin, mon approche s’appuie sur des bases solides : une <strong>formation initiale de 415 heures en zoothérapie</strong> et de nombreux <strong>perfectionnements</strong>. J’ai développé des connaissances en hygiène, développement, santé canine et surtout en <strong>communication émotionnelle</strong>. Je repère les <strong>signaux de stress et d’apaisement</strong> pour intervenir avec justesse et bienveillance. <strong>La passion est guidée par la science</strong> — et inversement.</p>
      </article>

      <!-- 2. Compétences -->
      <div class="md:mt-12.5 mt-10">
        <h3 class="mb-2.5 md:text-2.5xl text-1.5xl">Mes compétences</h3>
        <p class="mb-5">Une combinaison de passion, de formations spécialisées et de <strong>25+ ans</strong> d’expérience en relation d’aide, gestion RH et éducation.</p>

        <div class="grid md:grid-cols-3 gap-6">
          <!-- Parcours académique -->
          <div class="bg-body-bg p-6 rounded-2xl">
            <h4 class="font-semibold mb-2">Parcours académique</h4>
            <ul class="list-disc pl-5 space-y-1">
              <li>Baccalauréat en orientation scolaire</li>
              <li>Maîtrise en orientation scolaire</li>
              <li>Maîtrise en gestion & développement organisationnel</li>
              <li>Maîtrise en gestion de la formation</li>
              <li>Certificat en supervision de personnel</li>
              <li>Certificat en gestion des ressources humaines</li>
            </ul>
          </div>

          <!-- Expérience pro -->
          <div class="bg-body-bg p-6 rounded-2xl">
            <h4 class="font-semibold mb-2">Expérience professionnelle</h4>
            <ul class="list-disc pl-5 space-y-1">
              <li>25+ ans en gestion RH et relation d’aide</li>
              <li>Nombreuses années en milieu éducatif (accompagnement & partenariats entreprises)</li>
              <li>Cadre dans le secteur de la santé (direction de 3 équipes RH)</li>
              <li>Membre de : Ordre des CRHA & Ordre des conseillers d’orientation du Québec</li>
            </ul>
          </div>

          <!-- Formations complémentaires -->
          <div class="bg-body-bg p-6 rounded-2xl">
            <h4 class="font-semibold mb-2">Formations complémentaires</h4>
            <ul class="list-disc pl-5 space-y-1">
              <li>Gestion des conflits, civilité, prévention du harcèlement</li>
              <li>Santé mentale au travail, coaching de gestionnaires</li>
              <li>Climat de travail & développement des équipes</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 3. Expertise canine & zoothérapie -->
      <div class="md:mt-12.5 mt-10">
        <h3 class="mb-2.5 md:text-2.5xl text-1.5xl">Expertise canine & zoothérapie</h3>

        <div class="grid md:grid-cols-2 gap-6">
          <div class="bg-white border border-neutral-200 rounded-2xl p-6">
            <ul class="list-disc pl-5 space-y-1">
              <li>Formation initiale <strong>415 h</strong> en zoothérapie</li>
              <li>Perfectionnement & mentorat <strong>300 h</strong> (Audrey Desrosiers)</li>
              <li><strong>60 h</strong> sur la zoothérapie et les petits animaux (Humanizoo)</li>
              <li>Membre de 2 communautés de pratique (partage & réflexion clinique)</li>
              <li>Formations en comportement canin (signaux de stress & d’apaisement)</li>
              <li>Webinaires : accouchement, sevrage, élevage éthique</li>
            </ul>
          </div>
          <div class="bg-white border border-neutral-200 rounded-2xl p-6">
            <h4 class="font-semibold mb-2">Connaissances clés</h4>
            <ul class="list-disc pl-5 space-y-1">
              <li>Hygiène animale</li>
              <li>Développement physique & psychologique</li>
              <li>Problèmes de santé courants</li>
              <li>Interventions fondées scientifiquement : justesse, bienveillance, rigueur</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 4. Engagement entrepreneurial -->
      <div class="md:mt-12.5 mt-10">
        <h3 class="mb-2.5 md:text-2.5xl text-1.5xl">Engagement entrepreneurial</h3>
        <p class="mb-5">Trois entreprises complémentaires, promues ensemble lors d’événements pour gagner en visibilité et cohérence.</p>

        <div class="grid md:grid-cols-3 gap-6">
          <div class="bg-body-bg p-6 rounded-2xl flex flex-col">
            <h4 class="font-semibold">Yoganimo Inc (Québec)</h4>
            <p class="mt-2 text-slate-700">Séances de puppy yoga en partenariat avec la Ville de Québec, et interventions en milieu corporatif.</p>
            <span class="mt-3 text-sm text-slate-600">Socialisation bienveillante & moments de bonheur</span>
          </div>

          <div class="bg-body-bg p-6 rounded-2xl flex flex-col">
            <h4 class="font-semibold">Passion familiale (Montérégie)</h4>
            <p class="mt-2 text-slate-700">Puppy yoga avec les chiots de l’élevage (dès 6 semaines, dans le respect du rythme), en locaux loués et en entreprises.</p>
            <span class="mt-3 text-sm text-slate-600">Expériences précoces variées et encadrées</span>
          </div>

          <div class="bg-body-bg p-6 rounded-2xl flex flex-col">
            <h4 class="font-semibold">Yak N Snack</h4>
            <p class="mt-2 text-slate-700">Gâteries naturelles 100 % pour chiens ; vente en ligne & réseau de partenaires (pensions, agilité, toilettages, zoothérapeutes).</p>
            <span class="mt-3 text-sm text-slate-600">Promouvoir une alimentation saine et naturelle</span>
          </div>
        </div>
      </div>

      <!-- 5. Activités de visibilité -->
      <div class="md:mt-12.5 mt-10">
        <h3 class="mb-2.5 md:text-2.5xl text-1.5xl">Activités de visibilité annuelle</h3>
        <p class="mb-5">Pour faire rayonner Passion familiale, Yoganimo et Yak N Snack :</p>
        <ul class="list-disc pl-5 space-y-2 md:mb-10 mb-5">
          <li>Présenter les chiots Pomsky au public québécois</li>
          <li>Faire découvrir les bienfaits du puppy yoga</li>
          <li>Offrir des dégustations de gâteries naturelles</li>
          <li>Échanger avec familles, professionnels et passionnés</li>
        </ul>

        <h4 class="font-semibold mb-2">Types d’activités</h4>
        <ul class="list-disc pl-5 space-y-2">
          <li>Salons animaliers & expositions canines</li>
          <li>Marchés artisanaux & événements communautaires</li>
          <li>Portes ouvertes chez nos partenaires</li>
          <li>Présentations en milieux scolaire & corporatif</li>
          <li>Démonstrations publiques de puppy yoga</li>
        </ul>
      </div>

      <!-- Citation / mise en avant -->
      <div class="bg-primary rounded-2xl md:p-12.5 p-5 my-10">
        <p class="text-black text-xl">
          « Tout mon univers tourne autour du chien. Chaque projet, chaque geste, chaque décision est guidé par mon amour profond
          et ma passion ultime pour eux. C’est bien plus qu’un métier — c’est une vocation. »
        </p>
      </div>

      <!-- CTA -->
      <div class="text-center">
        <a href="{{ url('/contact') }}"
           class="py-3.5 md:px-7.5 px-6 inline-flex bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
          Nous contacter
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Suggestions (remplace “More blog”) -->
{{-- <section class="bg-white lg:pb-25 md:pb-12.5 pb-7.5">
  <div class="container">
    <h2 class="text-center mb-10 lg:text-5.5xl md:text-4.6xl text-3.4xl">À lire aussi</h2>

    <div class="grid md:grid-cols-3 lg:gap-12.5 md:gap-5 gap-10">
      <a href="{{ url('/elevage/pomsky') }}">
        <div class="overflow-hidden rounded-2xl">
          <img src="/images/blog/1.png" alt="Le Pomsky" class="duration-300 hover:scale-105 transition-all">
        </div>
        <div class="md:mt-5 mt-2.5">
          <p class="text-dark">Le Pomsky – Né d’un rêve</p>
          <h3 class="text-2xl md:mt-2.5 mt-1.25">Le Pomsky, tempérament & besoins</h3>
        </div>
      </a>

      <a href="{{ url('/elevage/valeurs') }}">
        <div class="overflow-hidden rounded-2xl">
          <img src="/images/blog/2.png" alt="Valeurs & mission" class="duration-300 hover:scale-105 transition-all">
        </div>
        <div class="md:mt-5 mt-2.5">
          <p class="text-dark">Notre philosophie</p>
          <h3 class="text-2xl md:mt-2.5 mt-1.25">Valeurs & mission</h3>
        </div>
      </a>

      <a href="{{ url('/zootherapie/services') }}">
        <div class="overflow-hidden rounded-2xl">
          <img src="/images/blog/3.png" alt="Zoothérapie" class="duration-300 hover:scale-105 transition-all">
        </div>
        <div class="md:mt-5 mt-2.5">
          <p class="text-dark">Interventions</p>
          <h3 class="text-2xl md:mt-2.5 mt-1.25">Zoothérapie en Montérégie</h3>
        </div>
      </a>
    </div>
  </div>
</section> --}}
@endsection
