@extends('layouts.landing', ['title' => 'Zoothérapie – Valeurs'])

@section('content')
@php
    // chemin vers la photo déjà dans public/photos
    $bannerUrl = asset('photos/pomsky-couverture-bleue-09.jpg');
@endphp

{{-- Hero / Bandeau avec photo existante --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
    <div class="absolute inset-0 -z-10 bg-center bg-cover"
         style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>

    <div class="container relative z-10 md:text-center" data-aos="fade-up" data-aos-duration="500">
        <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">Nos valeurs</h1>
        <p class="text-white/90 drop-shadow">Bienveillance, professionnalisme et impact réel pour la personne.</p>
    </div>
</section>


{{-- Mission --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="lg:w-4/5 mx-auto" data-aos="fade-up" data-aos-duration="500">
      <h2 class="text-3xl md:text-4xl font-semibold">Notre mission</h2>
      <p class="mt-4 text-slate-700">
        Offrir des services de zoothérapie professionnels, humains et adaptés, qui favorisent le développement personnel professionnel,
        la gestion des émotions, la communication et le plaisir de se connecter à soi et aux autres — grâce à la présence
        apaisante et intuitive de l’animal.
      </p>
    </div>
  </div>
</section>

{{-- Publics desservis --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="grid md:grid-cols-2 gap-10 items-start" data-aos="fade-up">
      <div>
        <h3 class="text-2xl md:text-3xl font-semibold">Nous intervenons auprès&nbsp;:</h3>
        <ul class="mt-4 space-y-3 text-slate-700">
          <li class="flex gap-3">
            <i class="iconify tabler--building size-5 mt-1"></i>
            <span><strong>Des entreprises</strong>, pour améliorer le mieux-être des employés, faciliter la communication,
            renforcer l’esprit d’équipe et créer un climat de travail sain.</span>
          </li>
          <li class="flex gap-3">
            <i class="iconify tabler--school size-5 mt-1"></i>
            <span><strong>Des établissements scolaires</strong>, pour soutenir les élèves dans leur développement,
            leurs apprentissages, leurs défis émotionnels et comportementaux, y compris les élèves à besoins particuliers.</span>
          </li>
          <li class="flex gap-3">
            <i class="iconify tabler--hospital size-5 mt-1"></i>
            <span><strong>Du milieu de la santé</strong>, notamment auprès des personnes âgées ou dans le cadre d’un
            accompagnement thérapeutique global.</span>
          </li>
          <li class="flex gap-3">
            <i class="iconify tabler--user-heart size-5 mt-1"></i>
            <span><strong>Des clients en pratique privée</strong> (surtout de la 4<sup>e</sup> année du primaire à la 5<sup>e</sup> secondaire),
            pour les aider à mieux vivre leurs émotions, leurs différences et leurs parcours. Nous les sensibilisons dès le 2e cycle du primaire, au développement professionnel et au choix de carrière en leur permettant d'explorer: leurs intérêts, leurs compétences et leurs qualités professionnelles. Nous leur présentons divers métiers et soutenons leur reflexion afin de les informer sur les métiers non traditionnels. Dès le secondaire, nous utilisons les tests psychométriques afin d'avoir des données fidèles et valides qui reflètent leurs préférences. Finalement, pour le 2e cycle du secondaire, nous les accompagnons afin de faire un choix éclairé pour la poursuite des études. Nous jumelons donc nos connaissances et compétences en orientation scolaire et professionnelle avec celles de la zoothérapie dans nos interventions.</span>
          </li>
        </ul>
      </div>

      <div class="bg-body-bg p-6 rounded-2xl border border-neutral-200">
        <h4 class="text-xl font-semibold">Formats d’intervention</h4>
        <p class="mt-2 text-slate-700">
          Nous offrons des <strong>séances individuelles</strong> ou de <strong>groupe</strong>, selon les besoins.
        </p>

        <h4 class="text-xl font-semibold mt-6">Nos approches reconnues</h4>
        <ul class="mt-2 space-y-2 text-slate-700">
          <li class="flex gap-2">
            <i class="iconify tabler--circle-check size-5 mt-0.5"></i>
            <span><strong>La zooanimation</strong>, pour créer des moments ludiques et relationnels (puppy yoga, team building en entreprise, centre pour personnes âgées).</span>
          </li>
          <li class="flex gap-2">
            <i class="iconify tabler--circle-check size-5 mt-0.5"></i>
            <span><strong>La zoothérapie éducative</strong>, pour soutenir les apprentissages et les habiletés sociales (milieu scolaire).</span>
          </li>
          <li class="flex gap-2">
            <i class="iconify tabler--circle-check size-5 mt-0.5"></i>
            <span><strong>L’intervention assistée par l’animal</strong>, pour accompagner des objectifs thérapeutiques précis (intervention en pratique privée).</span>
          </li>
        </ul>

        <h4 class="text-xl font-semibold mt-6">Animaux partenaires</h4>
        <p class="mt-2 text-slate-700">
          Nous travaillons principalement avec le <strong>chien</strong>, mais aussi avec le <strong>lapin</strong>, le <strong>dègue</strong>,
          le <strong>hérisson</strong> et les <strong>tourterelles</strong>, dans un cadre sécuritaire, propre et bienveillant.
        </p>

        <h4 class="text-xl font-semibold mt-6">Professionnalisme</h4>
        <p class="mt-2 text-slate-700">
          Passionnée par la psychologie, la relation d’aide et le monde animal, notre équipe met tout en œuvre pour offrir des
          interventions riches de sens, de douceur et d’impact. Nous sommes également en mesure de fournir des
          <strong>reçus d’assurance</strong> ou d’intervenir via des <strong>programmes d’aide aux employés (PAE)</strong>.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- Vision --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="lg:w-4/5 mx-auto" data-aos="fade-up" data-aos-duration="500">
      <h2 class="text-3xl md:text-4xl font-semibold">Notre vision</h2>
      <p class="mt-4 text-slate-700">
        D’ici cinq ans, nous souhaitons être reconnus en Montérégie comme l’un des centres piliers en zoothérapie,
        spécialisé auprès des entreprises, des établissements scolaires et des jeunes en pratique privée. Nous aspirons à
        propager le mieux-être, à normaliser l’usage thérapeutique de l’animal et à faire rayonner la zoothérapie comme
        une ressource précieuse, accessible et profondément humaine.
      </p>
      <p class="mt-4 text-slate-700">
        Nos services incluent aussi des <strong>séances d’intervention assistée par l’animal</strong>, offertes par des
        intervenants qualifiés en zoothérapie accompagnés d’animaux soigneusement sélectionnés et formés. Chaque rencontre
        est planifiée en fonction d’objectifs précis et s’adapte aux besoins de tous — enfants, adolescents, adultes et aînés.
      </p>
    </div>
  </div>
</section>

{{-- Mission – Volet Puppy Yoga --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <div class="lg:w-4/5 mx-auto" data-aos="fade-up">
      <h2 class="text-3xl md:text-4xl font-semibold">Mission – Volet Puppy Yoga</h2>
      <p class="mt-4 text-slate-700">
        Chez <strong>Passion familiale, petit pomsky du Québec Inc.</strong>, nous avons créé le <em>puppy yoga</em> comme une
        expérience unique, douce et joyeuse, où le bien-être humain et animal se rencontrent dans l’harmonie.
      </p>

      <h3 class="text-2xl font-semibold mt-6">Notre mission est de&nbsp;:</h3>
      <ul class="mt-3 space-y-2 text-slate-700">
        <li class="flex gap-2">
          <i class="iconify tabler--circle-check size-5 mt-0.5"></i>
          <span>Favoriser la détente, la pleine présence et la régulation émotionnelle à travers des séances de yoga accessibles à tous.</span>
        </li>
        <li class="flex gap-2">
          <i class="iconify tabler--circle-check size-5 mt-0.5"></i>
          <span>Offrir un moment de connexion authentique avec nos chiots Pomsky, élevés dans le respect et la douceur.</span>
        </li>
        <li class="flex gap-2">
          <i class="iconify tabler--circle-check size-5 mt-0.5"></i>
          <span>Créer un espace sécuritaire et bienveillant, où le rire, la tendresse et le calme se côtoient.</span>
        </li>
      </ul>

      <p class="mt-4 text-slate-700">
        Chaque séance est pensée pour honorer le rythme des chiots, leur offrir des stimulations douces, et permettre aux
        participants de vivre une expérience sensorielle et affective inoubliable. Nous croyons que le puppy yoga est bien
        plus qu’une activité: c’est un outil de mieux-être, un moyen de créer du lien, et une porte ouverte vers la joie simple et sincère.
      </p>

      <p class="mt-4 text-slate-700">
        En plus de nos séances ouvertes au public, nous proposons des <strong>activités corporatives bien-être</strong> qui
        intègrent le yoga avec animaux, créant des moments de détente, de rire et de connexion — un excellent levier de
        cohésion pour vos activités de <em>Team Building</em>.
      </p>

      <div class="mt-8">
        <a href="{{ url('contact') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
          Discuter d’un besoin / Obtenir une soumission
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
