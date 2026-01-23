@extends('layouts.landing', ['title' => 'Réservation & tarifs'])

@section('content')
@php
  // --- BANNIÈRE : candidates + fallback ---
  $bannerCandidates = [
    public_path('photos/proprietaire-portee.jpg'),
    public_path('photos/pomsky-chiot-lavande-36.jpg'),
    public_path('photos/pomsky-deux-chiots-02.jpg'),
  ];
  $bannerPath = collect($bannerCandidates)->first(fn($p) => file_exists($p));
  $bannerUrl  = $bannerPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $bannerPath)) : null;

  // --- CTA image (évite de répéter exactement la bannière) ---
  $ctaCandidates = [
    public_path('photos/pomsky-chiot-panier-45_coupe.jpg'),
    public_path('photos/pomsky-chiot-studio-30.jpg'),
    public_path('photos/proprietaire-portee.jpg'),
  ];
  $ctaPath = collect($ctaCandidates)->first(fn($p) => file_exists($p));
  $ctaImg  = $ctaPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $ctaPath)) : null;
@endphp

{{-- HERO --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
  @if($bannerUrl)
    <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>
  @else
    <div class="absolute inset-0 -z-10 bg-body-bg"></div>
  @endif

  <div class="container relative z-10">
    <div class="text-center max-w-3xl mx-auto">
      <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">Processus d’adoption</h1>
      <p class="mb-2.5 text-white/90 drop-shadow">Réservation, contrats, modalités et inclusions — tout est expliqué ici.</p>
    </div>
  </div>
</section>

{{-- 1) SÉLECTION RIGOUREUSE DES ADOPTANTS --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container-small">
    <div class="md:mb-10 mb-7.5" data-aos="fade-up" data-aos-duration="500">
      <h2 class="md:text-4xl text-3.4xl mb-2.5">1. Sélection rigoureuse des adoptants</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-body-bg p-5 rounded-2xl">
          <h3 class="text-xl font-semibold">Discussion préalable</h3>
          <p class="mt-2 text-slate-700">
            Mode de vie, expérience canine, environnement, disponibilité: nous validons les motivations et
            l’adéquation du Pomsky avec votre foyer.
          </p>
        </div>
        <div class="bg-body-bg p-5 rounded-2xl">
          <h3 class="text-xl font-semibold">Vérification des conditions de vie</h3>
          <p class="mt-2 text-slate-700">
            Espace disponible, clôture, temps consacré à l’animal — la base d’une adoption réussie.
          </p>
        </div>
      </div>
    </div>

    {{-- 2) INFORMATIONS POMSKY --}}
    <div class="md:mb-10 mb-7.5" data-aos="fade-up" data-aos-duration="500">
      <h2 class="md:text-4xl text-3.4xl mb-2.5">2. Informations sur la race & les besoins</h2>
      <p class="text-slate-700">
        Tempérament du Pomsky, taille estimée, besoins d’exercice et de stimulation mentale sont présentés clairement.
      </p>
    </div>

    {{-- 3) EXPLICATION DES INCLUSIONS --}}
    <div class="md:mb-10 mb-7.5" data-aos="fade-up" data-aos-duration="500">
      <h2 class="md:text-4xl text-3.4xl mb-2.5">3. Inclusions</h2>
      <p class="text-slate-700">
        <strong>Dossier de santé</strong>: vaccins, vermifuges, micropuce, tests génétiques, suivi vétérinaire et kit de départ.
      </p>
    </div>

    {{-- 4) ENGAGEMENT CONTRACTUEL --}}
    <div data-aos="fade-up" data-aos-duration="500">
      <h2 class="md:text-4xl text-3.4xl mb-5">4. Engagement contractuel</h2>
      <div class="bg-primary p-6 rounded-2xl text-slate-900">
        <h3 class="text-2xl font-semibold">Une adoption encadrée et responsable</h3>
        <p class="mt-3">
          Chez <strong>Passion Familiale – Petit Pomsky du Québec Inc.</strong>, chaque adoption est encadrée par
          <strong>trois contrats officiels</strong>, rédigés pour assurer le bien-être du chiot et la tranquillité d’esprit de l’adoptant.
          L’éleveur et l’adoptant conservent les originaux qui officialisent la transaction.
        </p>

        <div class="grid md:grid-cols-3 gap-5 mt-6">
          <div class="bg-white rounded-xl p-5">
            <h4 class="font-semibold">Clause de stérilisation</h4>
            <p class="mt-2 text-slate-800">
              Stérilisation dans les délais convenus. Toute reproduction non autorisée viole le contrat et peut mener à des poursuites.
              Cette mesure protège la race et garantit un élevage responsable.
            </p>
          </div>
          <div class="bg-white rounded-xl p-5">
            <h4 class="font-semibold">Clause de non-revente & retour</h4>
            <p class="mt-2 text-slate-800">
              En cas d’impossibilité de garder le chien, aucune revente/cession sans accord de l’éleveur.
              L’éleveur accompagne la recherche d’une nouvelle famille; traçabilité et vérifications incluses.
            </p>
          </div>
          <div class="bg-white rounded-xl p-5">
            <h4 class="font-semibold">Bien-être du Pomsky</h4>
            <p class="mt-2 text-slate-800">
              Exercices, stimulations, socialisation, soins vétérinaires et affection constante sont requis.
            </p>
          </div>
        </div>

        <div class="bg-white/80 rounded-xl p-5 mt-6">
          <h4 class="font-semibold">Cadre légal (NEQ)</h4>
          <p class="mt-2 text-slate-800">
            Passion Familiale est enregistrée au <strong>Registre des entreprises du Québec (NEQ)</strong>:
            crédibilité, contrats en bonne et due forme et transparence. Être un éleveur éthique, c’est aussi
            assurer un suivi post-adoption, offrir des garanties claires, être disponible et agir en toute légalité.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- EXPLICATION DU PROCESSUS (DÉPÔTS) --}}
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container-small">
    <div class="md:mb-10 mb-7.5" data-aos="fade-up" data-aos-duration="500">
      <h2 class="md:text-4xl text-3.4xl mb-2.5">Étape 1 – Dépôt pour la liste d’attente</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl p-5">
          <h3 class="text-xl font-semibold">Montants</h3>
          <ul class="mt-2 space-y-1 text-slate-700">
            <li>250&nbsp;$ — portées <strong>standard & miniature</strong></li>
            <li>350&nbsp;$ — portées <strong>micro/toy</strong></li>
          </ul>
          <p class="mt-2 text-slate-700">
            Dépôt <strong>non remboursable</strong>, mais <strong>transférable</strong> à une autre portée (selon disponibilité).
          </p>
        </div>
        <div class="bg-white rounded-2xl p-5">
          <h3 class="text-xl font-semibold">Priorité & liste</h3>
          <p class="mt-2 text-slate-700">
            L’ordre est fixé par la date de paiement. Sans dépôt, aucune place n’est réservée.
            En général, <strong>4 dépôts</strong> par portée pour le format standard et 3 dépôts par portée pour le format miniature et toy; s’il y a plus de chiots, les derniers sont affichés sur Facebook.
          </p>
        </div>
        <div class="bg-white rounded-2xl p-5">
          <h3 class="text-xl font-semibold">Important</h3>
          <p class="mt-2 text-slate-700">
            Le dépôt bloque une place sur la portée, pas un chiot précis. Votre rang est garanti,
            mais le choix se fait plus tard, selon la disponibilité et l’adéquation tempérament/foyer.
          </p>
        </div>
      </div>

      <div class="bg-white rounded-2xl p-5 mt-6">
        <h3 class="text-xl font-semibold">Pourquoi le dépôt est non remboursable ?</h3>
        <p class="mt-2 text-slate-700">
          Parce qu’une place officielle vous est réservée et que d’autres familles sont refusées.
          Changement d’idée, déménagement ou adoption ailleurs: le dépôt demeure acquis.
          Il peut toutefois être transféré à une autre portée (sans devancer les réservations existantes).
        </p>
      </div>
    </div>

    <div class="md:mb-10 mb-7.5" data-aos="fade-up" data-aos-duration="500">
      <h2 class="md:text-4xl text-3.4xl mb-2.5">Dépôt de confirmation (chiot spécifique)</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white rounded-2xl p-5">
          <p class="text-slate-700">
            Dès la <strong>5<sup>e</sup> semaine</strong>, les chiots révèlent leurs traits physiques et leur tempérament.
            Pour confirmer votre choix, un <strong>dépôt de 500&nbsp;$</strong> est requis; le chiot est alors retiré des choix.
          </p>
        </div>
        <div class="bg-white rounded-2xl p-5">
          <h3 class="text-xl font-semibold">Rencontre essentielle</h3>
          <ul class="mt-2 space-y-1 text-slate-700 list-disc ms-5">
            <li>Observer le chiot, sa maman et sa fratrie; voir les installations et le protocole d’hygiène.</li>
            <li>Poser toutes vos questions; valider l’adéquation tempérament/mode de vie.</li>
          </ul>
        </div>
      </div>

      <div class="bg-white rounded-2xl p-5 mt-6">
        <h3 class="text-xl font-semibold">Présentation virtuelle (familles éloignées)</h3>
        <p class="mt-2 text-slate-700">
          Possibilité de rencontre <strong>Teams</strong> avec l’éleveur : présentation des chiots, réponses aux questions,
          vision des installations et du protocole. Idéal pour un choix éclairé à distance.
        </p>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-duration="500">
      <h2 class="md:text-4xl text-3.4xl mb-2.5">Étape 3 – Paiement final</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white rounded-2xl p-5">
          <p class="text-slate-700">
            Les dépôts (liste d’attente et réservation officielle) sont déduits du montant total.
            Le <strong>solde complet</strong> doit être payé <strong>avant le départ</strong> (généralement entre la 8<sup>e</sup> et la 10<sup>e</sup> semaine).
          </p>
          <ul class="mt-3 space-y-1 text-slate-700">
            <li>✅ Virement Interac</li>
            <li>✅ Paiement comptant</li>
            <li>❌ Cartes de crédit non acceptées</li>
            <li>❌ Paiements mensuels non acceptés</li>
          </ul>
        </div>
        <div class="bg-white rounded-2xl p-5">
          <h3 class="text-xl font-semibold">Condition de remise</h3>
          <p class="mt-2 text-slate-700">
            Aucun chiot ne quitte le domicile sans paiement total. En cas d’impossibilité de paiement dans les délais,
            le chiot est proposé à une autre famille et votre dépôt est reporté sur une future portée
            (aucun chiot gardé au-delà de 10 semaines).
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- INCLUSIONS --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container-small" data-aos="fade-up" data-aos-duration="500">
    <h2 class="md:text-4xl text-3.4xl mb-5">Ce qui est inclus avec votre chiot Pomsky</h2>
    <p class="text-slate-700">
      Vous repartez avec tout le nécessaire pour bien démarrer votre vie ensemble, dans le respect du bien-être et de la sécurité de votre chiot.
    </p>

    <div class="grid md:grid-cols-2 gap-6 mt-6">
      {{-- Santé / conformité --}}
      <div class="bg-body-bg rounded-2xl p-6">
        <h3 class="text-xl font-semibold">🩺 Santé, traçabilité et conformité</h3>
        <ul class="mt-3 space-y-2 text-slate-700 list-disc ms-5">
          <li>Vaccin de base selon l’âge</li>
          <li>Micropuce pour l’identification</li>
          <li>3 vermifuges avant le départ</li>
          <li>Carnet de santé à jour</li>
          <li>Test <strong>Embark</strong> des parents (preuve génétique d’une lignée Pomsky saine et reconnue)</li>
          <li><strong>Certification de conformité vétérinaire</strong> : dents, palais, hanches, organes génitaux, absence d’anomalies visibles</li>
        </ul>
        <div class="mt-4 p-4 bg-white rounded-xl">
          <p class="text-slate-800">
            <strong>Bonus Rive-Sud</strong> : si vous poursuivez les soins chez notre vétérinaire partenaire,
            le <strong>vaccin de rappel</strong> est offert.
          </p>
        </div>
      </div>

      {{-- Kit de départ --}}
      <div class="bg-body-bg rounded-2xl p-6">
        <h3 class="text-xl font-semibold">🎁 Kit de départ très généreux</h3>
        <ul class="mt-3 space-y-2 text-slate-700 list-disc ms-5">
          <li>Collier, laisse et harnais</li>
          <li>Couverture avec l’odeur de la fratrie</li>
          <li>Jouets pour l’éveil et le jeu</li>
          <li>Gâteries pour le renforcement positif</li>
          <li>Nourriture pour les premiers jours</li>
          <li>Ceinture de sécurité pour la voiture</li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- CTA image + panneau --}}
<section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
  <div class="container">
    <div class="grid md:grid-cols-2" data-aos="fade-up" data-aos-duration="500">
      <div>
        @if($ctaImg)
          <img src="{{ $ctaImg }}" alt="Chiot Pomsky — réservation"
               loading="lazy"
               class="rounded-tl-2xl md:rounded-bl-2xl md:rounded-tr-none rounded-tr-2xl w-full h-auto object-cover">
        @endif
      </div>
      <div class="bg-primary rounded-tr-2xl rounded-br-2xl lg:p-15 p-5 h-full flex justify-center flex-col">
        <h2 class="mb-2.5 md:text-4xl text-2.6xl">Prêt·e à réserver&nbsp;?</h2>
<p class="mb-9">
  Les rencontres à domicile ne sont pas offertes avant que les chiots aient 5&nbsp;semaines.  
  Pour réserver, vous pouvez me joindre par téléphone, courriel ou Messenger.  
  Vous serez ensuite les bienvenus à la maison lorsque la portée aura atteint 5&nbsp;semaines.
</p>
        <div>
          <a href="{{ url('/contact') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
            Nous contacter
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
