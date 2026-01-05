@extends('layouts.landing', ['title' => 'Nos valeurs – Petit Pomsky du Québec'])

@section('content')
@php
  // Fallbacks d’images
  $hero = collect([
    public_path('photos/pomsky-deux-chiots-02.jpg'),
    public_path('photos/pomsky-chiot-lavande-36.jpg'),
    public_path('photos/proprietaire-portee.jpg'),
  ])->first(fn($p) => file_exists($p));
  $heroUrl = $hero ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $hero)) : asset('/images/about/9.png');

  $panelImg1 = collect([
    public_path('photos/pomsky-chiot-panier-45.jpg'),
    public_path('photos/pomsky-portrait.jpg'),
  ])->first(fn($p) => file_exists($p));
  $panelUrl1 = $panelImg1 ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $panelImg1)) : asset('/images/about/8.png');

  $panelImg2 = collect([
    public_path('photos/pomsky-gros-plan-11_coupe.png'),
    public_path('photos/pomsky-chiot-studio-30.jpg'),
  ])->first(fn($p) => file_exists($p));
  $panelUrl2 = $panelImg2 ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $panelImg2)) : asset('/images/element/11.svg');
@endphp


    <!-- Hero / Intro -->
    <section class="bg-white lg:py-25 pt-12.5 md:pb-22.5 pb-17.5">
        <div class="container">
            <div class="lg:mb-12.5 md:mb-10 mb-7.5 lg:mx-auto text-center lg:w-3/5" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Nos valeurs</h1>
                <p class="mb-2.5 text-neutral-700">
                    Chez <em>Passion familiale, Petit Pomsky du Québec</em>, notre travail est guidé par des <strong>valeurs profondes</strong>,
                    qui reflètent notre engagement envers les chiens, les familles adoptantes, les clients en zoothérapie, les écoles,
                    les entreprises et <strong>toutes les personnes que nous accompagnons</strong>, que ce soit dans le cadre du <strong>puppy yoga</strong> ou
                    d’activités de <strong>zoothérapie</strong>. Ces principes ne sont pas de simples mots : ils sont vécus, incarnés et appliqués au quotidien.
                </p>
            </div>

            {{-- <div class="flex md:gap-5 gap-2.5 md:flex-row flex-col items-center justify-center">
                <a href="{{ url('chiots-disponibles') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                    Voir les chiots disponibles
                </a>
                <a href="{{ url('contact') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-primary font-medium rounded-2xl text-black transition-all duration-300 hover:text-primary hover:bg-black">
                    Nous contacter
                </a>
            </div> --}}

            {{-- <div class="md:mt-15 lg:p-12.5 mt-10 p-5 bg-body-bg rounded-2xl">
                <img src="{{ $heroUrl }}" alt="Pomsky heureux en famille" class="rounded-2xl object-cover w-full">
            </div> --}}
        </div>
    </section>

    <!-- Valeurs principales -->
    <section class="bg-white lg:py-25 md:py-22.5 pt-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-25 md:gap-7.5 gap-10">
                <div data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="lg:mb-12.5 md:mb-10 mb-6.5">
                        <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Respect du bien-être animal</h2>
                        <p class="text-base mb-2.5">
                            Le bien-être de nos chiens est au cœur de tout. Nous respectons leur rythme naturel, leur santé physique
                            et émotionnelle, et nous refusons toute forme de surexploitation. Les chiennes ont des journées de repos
                            dédiées, nous limitons le nombre d’heures par jour qu’elles peuvent participer aux activités (puppy yoga,
                            zoothérapie) et elles bénéficient de temps de récupération entre chaque séance. Un animal bien dans son
                            corps et dans sa tête est un animal heureux — et c’est notre priorité.
                        </p>
                    </div>

                    <div class="lg:mb-12.5 md:mb-10 mb-6.5">
                        <h3 class="mb-2.5 lg:text-3xl md:text-2.4xl text-2xl">Élevage familial et humain</h3>
                        <p class="text-base mb-2.5">
                            Nos chiens ne vivent pas dans des installations froides ou impersonnelles. Ils grandissent dans
                            notre maison, entourés d’amour, de jeux, de stimulations et d’une présence humaine constante,
                            avec une surveillance 24 h/24. Ils sont des membres de la famille, et non des numéros.
                        </p>
                    </div>

                    <div class="lg:mb-12.5 md:mb-10 mb-6.5">
                        <h3 class="mb-2.5 lg:text-3xl md:text-2.4xl text-2xl">Transparence et confiance</h3>
                        <p class="text-base mb-2.5">
                            Nous croyons en une relation ouverte et honnête avec chaque famille adoptante et chaque client en
                            zoothérapie. Nous partageons nos pratiques, nos tests, nos protocoles, et nous accueillons les adoptants
                            chez nous pour découvrir l’environnement, observer les chiots et poser toutes leurs questions.
                            Un éleveur éthique n’a rien à cacher — et nous en sommes fiers.
                        </p>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <img src="{{ $panelUrl1 }}" alt="Élevage familial de Pomsky" class="size-full rounded-2xl object-cover">
                    {{-- <img src="{{ $panelUrl2 }}" alt="" class="md:absolute md:w-62.5 md:rounded-2xl md:-bottom-5 md:-start-5 md:border border-neutral-200 md:block hidden"> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Rigueur génétique & ressources -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="text-center lg:w-3/5 md:mb-10 mb-7.5 lg:mx-auto" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="lg:text-5.5xl md:text-4.6xl text-3.4xl mb-2.5">Rigueur génétique et sélection responsable</h2>
                <p class="mb-2.5">
                    Nous travaillons avec des éleveurs renommés aux États-Unis, et tous nos reproducteurs sont testés avec
                    <strong>Embark</strong> et <strong>Gensol</strong> pour garantir des Pomskys authentiques (Husky, Poméranien, Esquimau américain).
                    Toute autre race non autorisée — Klee Kai, Samoyède, Malamute, Shiba Inu — est exclue de notre programme afin
                    de respecter les codes d’éthique de l’<strong>International Pomsky Association (IPA)</strong> et de l’<strong>American Pomsky Kennel Club (APKC)</strong>.
                </p>
            </div>

            <div class="grid md:grid-cols-3 lg:gap-7.5 md:gap-5 gap-5">
                <!-- Bloc tests -->
                <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--shield-check-linear size-6 text-black"></i>
                        </div>
                        <h3 class="mb-2.5 lg:text-1.5xl text-xl">Tests de santé complets</h3>
                        <p class="mb-2.5">
                            <strong>Tester nos reproducteurs est fondamental.</strong> Les dépistages couvrent plus de <strong>225 maladies génétiques</strong>,
                            assurant des lignées en santé et prévenant des frais vétérinaires à long terme. Également, les tests Embark menés sur nos reproducteurs permet de connaître avec exactitude la génétique de tous nos chiens. Nous avons également, tous les tests génétiques des parents de nos chiens fournis par les éleveurs de qui nous avons fait l'acquisition de nos chiens.
                        </p>
                        <p class="mb-2.5">
                            Nous pouvons vous montrer l'ADN de nos chiens et nous sommes fiers de la génétique de tous nos pomskys puisqu'il s'agit de chiens de grande qualité. Avec fierté, nous partageons deux générations et quelquefois trois générations de test embark, soit les parents de nos reproducteurs, nos reproducteurs ainsi que les bébés de nos reproducteurs que nous avons décidé de garder au sein de l'élevage afin de poursuivre la lignée génétique exceptionnelle. Par exemple, nous avons les tests embark des parents de Daisy (fourni par l'éleveur lors de l'achat). Nous avons testé Daisy à son arrivée avant de la reproduire et nous avons également testé son bébé Shakira qui poursuivra cette belle lignée.  Seul les tests embark, peuvent vous certifier avec exactitude l'ADN de votre animal. C'est la seule et unique façon de connaitre la génétique de votre compagnon.
                        </p>
                    </div>
                </div>

                <!-- Bloc standards -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--medal-ribbons-linear size-6 text-black"></i>
                        </div>
                        <h3 class="mb-2.5 lg:text-1.5xl text-xl">Standards et tempérament</h3>
                        <p class="mb-2.5">
                            Nous visons l’excellence : structure physique, tempérament équilibré et santé génétique,
                            en alignement avec les standards de l’IPA et de l’APKC.
                        </p>
                    </div>
                </div>

                <!-- Bloc ressources -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify tabler--external-link size-6 text-black"></i>
                        </div>
                        <h3 class="mb-2.5 lg:text-1.5xl text-xl">Ressources supplémentaires</h3>
                        <ul class="space-y-1 text-sm">
                            <li><a href="https://americanpomskykennelclub.org/history" class="underline hover:no-underline" target="_blank" rel="noopener">APKC – History</a></li>
                            <li><a href="https://pomskyownersassociation.com/" class="underline hover:no-underline" target="_blank" rel="noopener">Pomsky Owners Association</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-7.5 lg:w-4/5 mx-auto text-center text-neutral-700" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                <p class="mb-2.5">
                    Nous avons eu la chance d’être accompagnés par un mentor exceptionnel : le premier éleveur de Pomsky au Canada (Alberta).
                    L’une de nos partenaires en zoothérapie provient de cet élevage pionnier, reconnu pour la qualité de ses lignées.
                    Nous avons gardé une femelle de notre première portée pour assurer la continuité de cette lignée : <strong>Daisy</strong> est en formation
                    pour devenir chien de zoothérapie et sa fille <strong>Shakira</strong> intégrera notre élevage en <strong>2026</strong> comme future reproductrice.
                </p>
            </div>
        </div>
    </section>

    <!-- Engagement à vie -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-25 md:gap-7.5 gap-10">
                <div data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="lg:mb-12.5 md:mb-10 mb-6.5">
                        <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Un engagement à vie</h2>
                        <p class="text-base mb-2.5">
                            Adopter un Pomsky, c’est s’engager pour la vie. Nous accompagnons nos familles bien après l’adoption :
                            conseils, suivis et échanges réguliers. Notre souhait : des chiens heureux, équilibrés et aimés — toute leur vie.
                        </p>
                    </div>

                    <div class="flex gap-3.75 flex-col">
                        <div class="flex items-start gap-2.5">
                            <i class="iconify tabler--circle-check size-6 text-black mt-0.5"></i>
                            <div>Suivi post-adoption personnalisé</div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="iconify tabler--circle-check size-6 text-black mt-0.5"></i>
                            <div>Conseils de socialisation et d’éducation bienveillante</div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="iconify tabler--circle-check size-6 text-black mt-0.5"></i>
                            <div>Réseau de professionnels (zoothérapie, écoles, entreprises)</div>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <img src="{{ $panelUrl2 }}" alt="Accompagnement à vie" class="size-full rounded-2xl object-cover">
                    {{-- <img src="/images/element/6.svg" alt="" class="md:absolute md:w-62.5 md:rounded-2xl md:-bottom-5 md:-start-5 md:border border-neutral-200 md:block hidden"> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Nos piliers essentiels -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="text-center lg:w-1/2 md:mb-10 mb-7.5 lg:mx-auto" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="lg:text-5.5xl md:text-4.6xl text-3.4xl mb-2.5">Nos piliers essentiels</h2>
                <p class="mb-2.5">Ce qui nous anime au quotidien, dans l’élevage comme en zoothérapie.</p>
            </div>

            <div class="grid md:grid-cols-3 lg:gap-7.5 md:gap-5 gap-5">
                <!-- La passion -->
                <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--heart-linear size-6 text-black"></i>
                        </div>
                        <h3 class="mb-2.5 lg:text-1.5xl text-xl">La passion</h3>
                        <p class="mb-2.5">
C’est notre essence, notre moteur. Nous sommes profondément passionnées, animées par l’amour de ce que nous faisons. Chaque projet, chaque geste, chaque détail porte l’empreinte de notre engagement sincère. Nous ne faisons rien à moitié : tout est pensé, créé et vécu avec le cœur                        </p>
                    </div>
                </div>

                <!-- La créativité -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--sparkles-linear size-6 text-black"></i>
                        </div>
                        <h3 class="mb-2.5 lg:text-1.5xl text-xl">La créativité</h3>
                        <p class="mb-2.5">
Nous imaginons des approches originales et bienveillantes pour faire vivre des moments uniques, ludiques et apaisants — que ce soit à travers le puppy yoga, les séances de socialisation, ou nos interventions en zoothérapie auprès des écoles, des entreprises et des clients en pratique privée                        </p>
                    </div>
                </div>

                <!-- Le respect -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--hand-heart-linear size-6 text-black"></i>
                        </div>
                        <h3 class="mb-2.5 lg:text-1.5xl text-xl">Le respect de l’humain et de l’animal</h3>
                        <p class="mb-2.5">
Chaque interaction se fait dans le respect du rythme, des besoins et du bien-être de l’animal, dans un environnement propre et soigneusement entretenu. Le client — qu’il soit adoptant, enseignant, gestionnaire ou bénéficiaire — est accueilli avec écoute, chaleur et professionnalisme, dans un souci constant de bien-être, de confort et de satisfaction.                        </p>
                    </div>
                </div>

                <!-- Service à la clientèle -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify tabler--headset size-6 text-black"></i>
                        </div>
                        <h3 class="mb-2.5 lg:text-1.5xl text-xl">Le service à la clientèle</h3>
                        <p class="mb-2.5">
Que ce soit en élevage ou en zoothérapie, nous accordons une attention particulière à chaque personne qui nous contacte. Nous offrons un accompagnement personnalisé, une écoute active, et des réponses claires et bienveillantes à toutes les questions. Notre objectif est de créer une relation de confiance durable, fondée sur le respect, la transparence et le soutien continu — parce que chaque humain mérite autant de considération que chaque chien.                        </p>
                    </div>
                </div>

                <!-- Faire connaître le Pomsky -->
                <div class="text-center md:col-span-2 lg:col-span-1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify tabler--megaphone size-6 text-black"></i>
                        </div>
                        <h3 class="mb-2.5 lg:text-1.5xl text-xl">Faire connaître le Pomsky au Québec</h3>
                        <p class="mb-2.5">
Faire connaître le Pomsky au Québec et propager le bonheur
L’un de nos engagements les plus chers est de faire découvrir ce chien exceptionnel au plus grand nombre. Nous croyons que le Pomsky, avec son tempérament doux, son intelligence vive et son charme unique, mérite d’être connu et reconnu au Québec. Et surtout, nous avons à cœur de propager le bonheur dans les familles québécoises, en leur offrant un chiot équilibré, en santé, bien socialisé et prêt à vivre une vie remplie d’amour.  Quand nous voyons qu''un client est  complètement comblé par un petit pomsky provenant de notre élevage, nous éprouvons une grande satisfaction. Apporter le bonheur dans les familles, n'est pas cela une grande source de satisfaction et de réussite!</p>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center">
                <a href="{{ url('contact') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                    Poser une question
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    {{-- Conserve si tu utilises des animations/Swiper ailleurs --}}
@endsection
