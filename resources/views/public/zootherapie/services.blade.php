@extends('layouts.landing', ['title' => 'Nos services de zoothérapie'])

@section('content')

<style>
    /* Harmonisation du visuel global */
    img.rounded-2xl {
        object-fit: cover;
        aspect-ratio: 4 / 3;
        width: 100%;
        height: auto;
        max-height: 480px;
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
    }

    .divider-line {
        width: 60px;
        height: 4px;
        background-color: #0054A6;
        border-radius: 9999px;
        margin-bottom: 1rem;
    }

    .quote-section {
        background: linear-gradient(to right, #f9fafc, #f3f5f8);
        font-style: italic;
        color: #555;
    }

    .contact-icon {
        color: #2DA8E0;
    }

    .btn-primary {
        background-color: #2DA8E0;
        color: #000;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0054A6;
        color: #fff;
    }
</style>

<!-- Hero Section -->
<section class="py-17.5 lg:py-25 md:py-22.5 bg-white border-b border-gray-200">
    <div class="container text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="600">
        <div class="flex flex-col items-center justify-center mb-8">
            <img src="{{ asset('images/logo/logo_large.jpg') }}" alt="Logo Petit Pomsky du Québec" class="w-40 mb-5 drop-shadow-md">
            <h1 class="lg:text-6xl md:text-5xl text-4xl mb-5 font-semibold text-gray-900">Nos services de zoothérapie</h1>
            <div class="divider-line mx-auto"></div>
        </div>
        <p class="text-lg text-gray-700 leading-relaxed">
            Découvrez nos différentes offres de zoothérapie adaptées à chaque milieu — scolaire, résidentiel ou professionnel.  
            Chaque activité est conçue pour favoriser le bien-être, la communication et la connexion humaine à travers la présence
            d’animaux médiateurs soigneusement sélectionnés.
        </p>
    </div>
</section>

<!-- Section 1 - Francisation et Alphabétisation -->
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
    <div class="container grid md:grid-cols-2 gap-10 items-center">

        <div data-aos="fade-left">
            <h2 class="lg:text-5xl md:text-4xl text-3xl mb-2 font-semibold text-gray-900">Francisation et alphabétisation</h2>
            <div class="divider-line"></div>
            <p class="mb-3">
                Favoriser l’apprentissage du français oral et écrit grâce à des ateliers interactifs et motivants,
                intégrant la présence d’animaux médiateurs tels que le chien, le lapin, le hérisson et la tourterelle.
            </p>
            <ul class="list-disc list-inside mb-3">
                <li>Développement du vocabulaire et de la prononciation</li>
                <li>Lecture et écriture guidées autour des animaux</li>
                <li>Communication fonctionnelle et confiance en soi</li>
            </ul>
        </div>
        <div data-aos="fade-right">
            <img src="{{ asset('photos/pomsky-chiot-fleurs-31.jpg') }}" alt="Pomsky doux" class="rounded-2xl">
        </div>
    </div>
</section>

<!-- Section 2 - CHSLD et soins palliatifs -->
<section class="bg-gray-50 lg:py-25 md:py-22.5 py-17.5">
    <div class="container grid md:grid-cols-2 gap-10 items-center">

        <div data-aos="fade-left">
            <img src="{{ asset('photos/pomsky-adulte-neige-54.jpg') }}" alt="Pomsky calme" class="rounded-2xl">
        </div>
                <div data-aos="fade-right">
            <h2 class="lg:text-5xl md:text-4xl text-3xl mb-2 font-semibold text-gray-900">CHSLD et soins palliatifs</h2>
            <div class="divider-line"></div>
            <p class="mb-3">
                Offrir des moments de bien-être, de stimulation douce et de réconfort émotionnel aux personnes âgées ou en fin de vie.
                Chaque rencontre est encadrée par des chiens médiateurs formés et sécurisés.
            </p>
            <ul class="list-disc list-inside mb-3">
                <li>Rencontres apaisantes et visites personnalisées</li>
                <li>Stimulation cognitive et mémoire affective</li>
                <li>Reconnaissance et expression des émotions</li>
            </ul>
        </div>
    </div>
</section>

<!-- Section 3 - Écoles spécialisées -->
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
    <div class="container grid md:grid-cols-2 gap-10 items-center">

        <div data-aos="fade-left">
            <h2 class="lg:text-5xl md:text-4xl text-3xl mb-2 font-semibold text-gray-900">Écoles spécialisées</h2>
            <div class="divider-line"></div>
            <p class="mb-3">
                Ateliers éducatifs, sensoriels et relationnels destinés aux élèves ayant des besoins particuliers
                (TSA, DI, TDA/H, troubles du langage ou anxiété).
            </p>
            <ul class="list-disc list-inside mb-3">
                <li>Parcours sensoriel et motricité avec l’animal</li>
                <li>Créations artistiques et valorisation des réussites</li>
                <li>Communication verbale et non verbale</li>
            </ul>
        </div>
                <div data-aos="fade-right">
            <img src="{{ asset('photos/pomsky-chiot-cuir-43.jpg') }}" alt="Pomsky curieux" class="rounded-2xl">
        </div>
    </div>
</section>
<!-- Section X - Transition primaire vers secondaire -->
<section class="bg-gray-50 lg:py-25 md:py-22.5 py-17.5">
    <div class="container grid md:grid-cols-2 gap-10 items-center">
        <div data-aos="fade-right">
            <img src="{{ asset('photos/pomsky-chiot-fleurs-31.jpg') }}" alt="Transition primaire secondaire - Zoothérapie" class="rounded-2xl">
        </div>

        <div data-aos="fade-left">
            <h2 class="lg:text-5xl md:text-4xl text-3xl mb-2 font-semibold text-gray-900">
                Transition du primaire vers le secondaire
            </h2>
            <div class="divider-line"></div>

            <p class="mb-3">
                Le passage vers le secondaire représente souvent une période de déstabilisation, durant laquelle les jeunes doivent composer avec de nouveaux défis.
                Notre programme de zoothérapie offre un soutien sécurisant qui facilite l’intégration et renforce l’autonomie des jeunes, particulièrement ceux à risque,
                durant cette transition importante.
            </p>

            <h3 class="text-xl font-semibold text-gray-900 mb-2">Objectifs</h3>
            <ul class="list-disc list-inside mb-3">
                <li>Développer des stratégies efficaces de gestion du stress</li>
                <li>Améliorer la connaissance de soi et favoriser la création de liens avec les pairs</li>
                <li>Encourager la demande d’aide et l’engagement actif dans leur transition de vie et leurs apprentissages</li>
                <li>Approfondir la connaissance de soi : explorer ses intérêts, ses qualités, ses compétences et ses passions</li>
                <li>Commencer à réfléchir à son avenir scolaire et professionnel</li>
                <li>Se familiariser avec différents métiers ainsi qu’avec les parcours du secteur professionnel, collégial et universitaire</li>
                <li>Obtenir de l'information sur le système scolaire québecois et les divers programmes</li>
                <li>Se familiariser avec ses préférences à l'aide d'outils psychométriques</li>
            </ul>
        </div>
    </div>
</section>

<!-- Section 4 - Garderies -->
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
    <div class="container grid md:grid-cols-2 gap-10 items-center">
        <div data-aos="fade-right">
            <h2 class="lg:text-5xl md:text-4xl text-3xl mb-2 font-semibold text-gray-900">Garderies</h2>
            <div class="divider-line"></div>
            <p class="mb-3">
                Ateliers ludiques pour enfants de 3 à 5 ans, visant à développer la motricité, le langage et la gestion des émotions
                à travers des activités éducatives avec des chiens médiateurs.
            </p>
            <ul class="list-disc list-inside mb-3">
                <li>Prévention des morsures et respect de l’animal</li>
                <li>Reconnaissance et régulation des émotions</li>
                <li>Parcours sensoriel et activités créatives</li>
            </ul>
        </div>
        <div data-aos="fade-left">
            <img src="{{ asset('photos/pomsky-chiot-printemps-17.jpg') }}" alt="Pomsky fleurs" class="rounded-2xl">
        </div>
    </div>
</section>

<!-- Section 5 - Puppy Yoga -->
<section class="bg-gray-50 lg:py-25 md:py-22.5 py-17.5">
    <div class="container grid md:grid-cols-2 gap-10 items-center">
        <div data-aos="fade-right">
            <img src="{{ asset('photos/pomsky-lavande-12.jpg') }}" alt="Puppy yoga Pomsky" class="rounded-2xl">
        </div>
        <div data-aos="fade-left">
            <h2 class="lg:text-5xl md:text-4xl text-3xl mb-2 font-semibold text-gray-900">Puppy Yoga</h2>
            <div class="divider-line"></div>
            <p class="mb-3">
                Le <strong>puppy yoga</strong> unit les bienfaits physiques et mentaux du yoga à la présence joyeuse des chiots.
                Les interactions libèrent de l’ocytocine, favorisant détente, rires et bien-être profond.
            </p>
            <ul class="list-disc list-inside mb-3">
                <li>Réduction du stress et de l’anxiété</li>
                <li>Amélioration de l’humeur et du lien social</li>
                <li>Expérience bénéfique pour humains et chiots</li>
                <li>Organisation de groupes privés</li>
                <li>Séance en entreprise</li>
            </ul>
        </div>
    </div>
</section>

<!-- Section 6 - Team Building -->
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
    <div class="container grid md:grid-cols-2 gap-10 items-center">
        <div data-aos="fade-right">
            <h2 class="lg:text-5xl md:text-4xl text-3xl mb-2 font-semibold text-gray-900">Team Building</h2>
            <div class="divider-line"></div>
            <p class="mb-3">
                Offrez à vos équipes une pause unique grâce au <strong>team building assisté par les animaux</strong>.
                Des chiots viennent créer des moments de détente, de tendresse et de cohésion inoubliables.
            </p>
            <ul class="list-disc list-inside mb-3">
                <li>Réduction immédiate du stress</li>
                <li>Renforcement des liens humains</li>
                <li>Activité originale et mémorable</li>
            </ul>
        </div>
        <div data-aos="fade-left">
            <img src="{{ asset('photos/pomsky-puppy-famille-24.jpg') }}" alt="Team building Pomsky" class="rounded-2xl">
        </div>
    </div>
</section>

<!-- Citation Inspirante -->
<section class="quote-section py-12 text-center">
    <p class="text-lg italic max-w-2xl mx-auto">
        “Chaque rencontre entre l'humain et l'animal est une histoire de cœur et de confiance.”
    </p>
</section>

<!-- Pourquoi faire affaire avec moi -->
<section class="bg-white lg:py-25 md:py-22.5 py-17.5 text-center">
    <div class="container max-w-3xl mx-auto" data-aos="fade-up">
        <h2 class="lg:text-5xl md:text-4xl text-3xl mb-3 font-semibold text-gray-900">Pourquoi faire affaire avec moi ?</h2>
        <div class="divider-line mx-auto"></div>
        <p class="text-lg text-gray-700 leading-relaxed mb-5">
            Une approche innovante et humaine, qui allie pédagogie, bien-être et plaisir.
            Chaque atelier est conçu pour stimuler l’engagement, réduire l’anxiété et renforcer la confiance.
        </p>
        <ul class="list-disc list-inside text-left mx-auto inline-block text-gray-700 leading-relaxed mb-6">
            <li>Approche concrète et multisensorielle avec une grande variété d’animaux</li>
            <li>Adaptation aux besoins et au rythme de chaque groupe</li>
            <li>Collaboration avec les intervenants: enseignants, éducateurs, soignants</li>
            <li>Visites à domicile ou en établissement</li>
            <li>Accompagnement bienveillant pour une intégration réussie</li>
        </ul>
    </div>
</section>

<!-- Section Contact -->
<section class="bg-dark lg:py-25 md:py-22.5 py-17.5 text-white text-center">
    <div class="container max-w-3xl mx-auto" data-aos="fade-up">
        <h2 class="lg:text-5xl md:text-4xl text-3xl mb-5 font-semibold">Contact</h2>
        <p class="text-lg mb-5 text-gray-200">
            Pour en savoir plus ou planifier un atelier, contactez-nous dès aujourd’hui.
        </p>
        <div class="text-xl mb-6">
            <p><strong>Tyna Bériault</strong></p>
            <p><i class="iconify tabler--phone size-5 inline mr-2 contact-icon"></i>514-250-5995</p>
            <p><i class="iconify tabler--mail size-5 inline mr-2 contact-icon"></i>
                <a href="mailto:pomskyduquebec@hotmail.com" class="text-blue-400 hover:underline">
                    pomskyduquebec@hotmail.com
                </a>
            </p>
        </div>
        <a href="{{ url('/contact') }}" class="btn-primary py-3.5 px-7.5 rounded-2xl inline-block">
            Nous contacter
        </a>
    </div>
</section>

@endsection
