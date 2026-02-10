@extends('layouts.landing', ['title' => 'FAQ – Pomsky & Zoothérapie'])

@section('content')

@php
  // Choix auto avec fallback (bannière)
  $bannerCandidates = [
    public_path('photos/pomsky-lavande-03.jpg'),
    public_path('photos/pomsky-chiot-studio-30.jpg'),
    public_path('photos/proprietaire-portee.jpg'),
  ];
  $bannerPath = collect($bannerCandidates)->first(fn($p) => file_exists($p));
  $bannerUrl  = $bannerPath ? asset(str_replace(public_path().DIRECTORY_SEPARATOR, '', $bannerPath)) : null;
@endphp

{{-- Hero / Titre avec image de fond --}}
<section class="relative lg:py-25 md:py-12.5 py-7.5">
  @if($bannerUrl)
    <div class="absolute inset-0 -z-10 bg-center bg-cover" style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>
  @else
    <div class="absolute inset-0 -z-10 bg-body-bg"></div>
  @endif

  <div class="container relative z-10">
    <div class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-white drop-shadow">Foire aux questions</h1>
    </div>
  </div>
</section>

{{-- Sommaire ancré --}}
<section class="bg-white">
  <div class="container-small py-10">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-2xl font-medium mb-5">Sommaire</h2>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3 text-left">
        <a href="#pelage" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Pelage & hypoallergénie</a>
        <a href="#soins" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Soins & santé</a>
        <a href="#caractere" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Caractère & cohabitation</a>
        <a href="#elevage" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Élevage & qualité</a>
        <a href="#vie" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Vie quotidienne</a>
        <a href="#meteo" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Hiver & été</a>
        <a href="#activites" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Activités & formats</a>
        <a href="#eleveur" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Reconnaître un éleveur sérieux</a>
        <a href="#adn" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Vrai Pomsky & test ADN</a>
        <a href="#contrat" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Clause de non-reproduction</a>
        <a href="#chiot-sport" class="p-4 rounded-xl bg-body-bg hover:bg-primary/10 transition">Chiot & sport</a>
      </div>
      </div>
    </div>
  </div>
</section>

{{-- FAQ blocs --}}
<section class="bg-white lg:py-25 md:py-22.5 py-17.5">
  <div class="container-small">

    {{-- Pelage & hypoallergénie --}}
    <div id="pelage" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="120" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Pelage & hypoallergénie</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        {{-- #1 Hypoallergène --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que le pomsky est un chien hypo allergène?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">Non. Assurez-vous de ne pas avoir des allergies si vous désirez accueillir un pomsky au sein de votre famille.</p>
          </div>
        </div>
        {{-- #2 Perte de poil --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que le pomsky perd son poil?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">Oui, si vous cherchez un chien qui ne perd pas son poil, le pomsky n’est pas un bon choix. Le pomsky a deux grosses mues par année. Sortez votre brosse!! Ou contactez votre toiletteur préféré afin de retirer tout le sous poil qui forme des nœuds et crée de l’inconfort à votre ami poilu.</p>
          </div>
        </div>
        {{-- #3 Raser --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que je peux raser mon pomsky?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5"><strong>SURTOUT PAS!</strong> Les chiens à plusieurs épaisseurs de poils, comme le pomsky ont principalement deux couches de fourrure. La première, le sous poil, sont les poils les plus proches de la peau. C’est la fourrure qui mue. Cette couche sert à emprisonner l’air et sert d’isolant pour le chien. En fait, elle le garde au chaud en hiver et au frais en été. La couche de finition est composée de poils de garde qui ne muent pas, et qui protège votre animal contre les rayons du soleil et les piqûres d’insectes. Elle les protège en fait de la chaleur.</p>
          </div>
        </div>
      </div>
    </div>

    {{-- Soins & santé --}}
    <div id="soins" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="130" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Soins & santé</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        {{-- #4 Soins annuels --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Quels sont les soins annuels d’un chiot?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Tous les ans, vous devez protéger votre nouvel ami.</p>
              <ul class="list-disc ms-5">
                <li>Vaccin de base à jour</li>
                <li>Vaccin leptospirose à jour</li>
                <li>Vaccin de rage à jour</li>
                <li>Vaccin de Lyme fortement recommandé</li>
                <li>Certains propriétaires offriront aussi la protection bravecto et interceptor pour les mois de mai à octobre.</li>
              </ul>
              <p>Il faut prévoir 400/500$ par année pour la vaccination dépendamment de votre vétérinaire.</p>
              <p>Vous devez également prévoir la taille des griffes mensuelle et le brossage de votre chien. Si vous n’êtes pas en mesure de le faire vous-même, prévoir des frais de toilettage de 100$ par mois</p>
            </div>
          </div>
        </div>
        {{-- #8 Durée de vie --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Quelle est la durée de vie moyenne d’un Pomsky ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">La durée de vie moyenne est de 12 à 15 ans</p>
          </div>
        </div>
      </div>
    </div>

    {{-- Caractère & cohabitation --}}
    <div id="caractere" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="140" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Caractère & cohabitation</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        {{-- #5 Caractère --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Le caractère du Pomsky</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Nous avons demandé à nos clients de décrire le caractère de leur pomsky, car c’est l’une des questions qui revient le plus souvent? Est-ce davantage comme un husky ou comme un poméranien?</p>
              <p>Le pomsky a son propre caractère et voici ce que nos clients avaient à dire</p>
              <ul class="list-disc ms-5 columns-2 sm:columns-1 md:columns-2">
                <li>Très joueur</li>
                <li>Intelligent, apprend très vite les consignes de base, la propreté et même faire des tours</li>
                <li>Apprend vite</li>
                <li>Énergique</li>
                <li>Têtu</li>
                <li>Futé</li>
                <li>Affectueux</li>
                <li>Fidèle</li>
                <li>Espiègle</li>
                <li>Sociable</li>
                <li>Aventurier</li>
                <li>Charmeur</li>
                <li>Aime la présence de d’autres animaux</li>
                <li>Chien de famille, adore la présence des enfants</li>
                <li>Attire les regards</li>
              </ul>
            </div>
          </div>
        </div>
        {{-- #6 Cohabitation avec animaux --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">J’ai déjà un chien / un chat: est-ce compatible ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <p class="mt-5">Lorsque vous achetez un chiot, il a 9-10 semaines de vie. Il est une véritable éponge. Il s’adapte à tout type d’environnement. Il est curieux. Il découvre et explore. Il sera enclin à vouloir jouer avec les autres animaux que vous possédez. Le problème rencontré est davantage avec l’animal que vous avez déjà. Il aura le sentiment de perdre sa place. Il devra s’adapter au petit nouveau. Il faut leur laisser le temps de s’apprivoiser. Généralement, après 2 mois, tout rentre dans l’ordre. Soyez patient! Il est tout à fait possible d’intégrer un pomsky à votre famille si vous avez un chien, un chat et même un lapin.</p>
          </div>
        </div>
      </div>
    </div>

    {{-- Élevage & qualité --}}
    <div id="elevage" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Élevage & qualité</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        {{-- #6 bis Voir l’environnement --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce important de voir l’environnement d’élevage ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Bien sûr! C’est même essentiel. C’est la raison pour laquelle, tous les clients qui réservent au sein de notre élevage sont invités à venir à notre domicile lorsque les chiots ont 5 semaines de vie. Il est important de voir les installations et l’environnement dans lequel le chiot est éduqué et ainsi voir comment il vit au quotidien. Si vous n’êtes pas en mesure de voir les installations, la portée de chiots, les interactions avec la fratrie et les reproducteurs, <strong>MÉFIEZ-VOUS!</strong></p>
              <p>Les usines à chiots, font en sorte que votre nouveau bébé pourrait souffrir d’anxiété et avoir des problèmes de comportements majeurs. Par ailleurs, vous devez vous assurer de faire affaire avec un éleveur éthique et que le chiot est élevé dans des conditions saines avec un bon protocole d’hygiène et une surveillance 24 heures sur 24 pour éviter tout accident.</p>
              <p>Privilégiez les élevages familiaux dans les maisons privées et assurez-vous de visiter au moins une fois l’endroit. Ne jamais faire de transactions dans un stationnement de commerce. Un éleveur éthique n’a rien à cacher et sera ravie de vous accueillir et vous montrer la maternité des chiots.</p>
            </div>
          </div>
        </div>
        {{-- #7 Tous s’équivaut ? --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que tous les pomsky s’équivaut ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p><strong>ABSOLUMENT PAS!!</strong></p>
              <p>Tout est une question de génétique. Est-ce que le chiot provient d’une lignée où les critères de beauté sont conformes aux normes de l’APKC et de l’IPA. Bien que tous les chiots soient<br>« mignons », la question à se poser est sera-til encore beau une fois adulte? Si les reproducteurs ont de longues oreilles difformes ne respectant pas les standards de la race, votre chiot sera identique à l’âge adulte.</p>
              <ul class="list-disc ms-5">
                <li>Regardez les 2 reproducteurs. Est-ce que les caractéristiques physiques respectent ce qui est attendu d’un pomsky</li>
                <li>Regardez les tests embark. Assurez-vous qu’ils sont conformes aux standards APKC et IPA</li>
              </ul>
              {{-- <p>En termes de conformité voici ce qui est adéquat et non adéquat:</p> --}}
              {{-- Le document ne fournit pas de tableau; laisser l’intitulé tel quel pour respecter l’information. --}}
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Vie quotidienne --}}
    <div id="vie" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="160" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Vie quotidienne</h2>

      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        {{-- #9 Exercice quotidien --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">De combien d’exercice un Pomsky a-t-il besoin chaque jour ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Le Pomsky est un chien énergique et intelligent qui a besoin de stimulation physique et mentale quotidienne pour rester équilibré et heureux.</p>
              <p>En moyenne, il lui faut au moins 60 minutes d’activité par jour. Cela peut inclure:</p>
              <ul class="list-disc ms-5">
                <li>Une sortie au parc à chiens d’environ 30 minutes, pour courir, socialiser et se dépenser librement.</li>
                <li>Une ou deux marches en laisse, selon votre rythme et celui du chien.</li>
                <li>Des jeux interactifs à la maison (lancer de balle, jeux de recherche, entraînement à l’obéissance, mastication).</li>
              </ul>
              <p>Un Pomsky qui ne dépense pas assez d’énergie peut développer des comportements indésirables comme l’hyperactivité, l’aboiement excessif ou la destruction. Il est donc essentiel de lui offrir un mode de vie actif et enrichissant.</p>
            </div>
          </div>
        </div>
        {{-- #10 Énergie vs Husky --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que le pomsky et le husky ont le même niveau d’énergie?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Le Pomsky n’a pas le même niveau d’énergie qu’un Husky, mais il reste un chien actif et stimulant.</p>
              <p><strong>Husky sibérien:</strong> C’est une race de travail conçue pour tirer des traîneaux sur de longues distances. Il possède une endurance exceptionnelle et a besoin de plusieurs heures d’exercice intense par jour. Sans stimulation suffisante, il peut devenir destructeur ou fugueur. <br><strong>Pomsky:</strong> Bien qu’il hérite de l’énergie du Husky, le Pomsky est plus petit, plus adaptable et a un niveau d’activité modéré à élevé. Il a besoin d’environ 60 minutes d’exercice quotidien, réparties idéalement entre:</p>
              <ul class="list-disc ms-5">
                <li>Une sortie au parc à chiens d’environ 30 minutes pour courir et socialiser</li>
                <li>Une ou deux marches en laisse</li>
                <li>Des jeux interactifs à la maison pour stimuler son intelligence</li>
              </ul>
              <p>Le Pomsky est donc plus facile à gérer qu’un Husky en milieu urbain ou en appartement, mais il ne doit pas être sous-stimulé. Il a besoin d’un mode de vie actif, mais pas extrême.</p>
            </div>
          </div>
        </div>
        {{-- #11 Appartement --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Puis-je avoir un Pomsky en appartement?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Oui, vous pouvez tout à fait avoir un Pomsky en appartement, à condition de répondre à ses besoins physiques et mentaux. Le Pomsky est un chien de taille moyenne à petite, ce qui le rend bien adapté à la vie en appartement. Toutefois, il est aussi énergique, intelligent et curieux, donc il a besoin d’un environnement stimulant.</p>
              <ul class="list-disc ms-5">
                <li><strong>Exercice quotidien:</strong> au moins 60 minutes par jour, incluant une sortie au parc à chiens d’environ 30 minutes pour courir et socialiser, ainsi que des marches régulières.</li>
                <li><strong>Stimulation mentale:</strong> jeux interactifs, apprentissage de tours, tapis de fouille, jouets distributeurs de gâteries.</li>
                <li><strong>Routine stable:</strong> les Pomskys aiment la constance. Des horaires réguliers pour les repas, les sorties et les moments de jeu les aident à se sentir en sécurité.</li>
                <li><strong>Présence humaine:</strong> ce sont des chiens très attachés à leur famille. Ils peuvent mal vivre la solitude prolongée. Si vous travaillez à l’extérieur, envisagez un promeneur ou une garderie canine.</li>
              </ul>
              <p>En résumé: oui, un Pomsky peut vivre en appartement, mais il ne doit pas y être confiné sans activité. Avec de l’amour, du temps et de l’engagement, il s’épanouira parfaitement, même sans cour arrière.</p>
            </div>
          </div>
        </div>
        {{-- #12 Seul combien de temps --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Combien de temps puis-je laisser mon Pomsky seul?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Un Pomsky peut tolérer jusqu’à 8 heures seul à la maison, mais ce n’est pas idéal pour son bien-être émotionnel et comportemental.</p>
              <p>Le Pomsky est un chien très sociable, intelligent et énergique. Il a besoin de stimulation mentale, d’interaction et d’exercice quotidien. Le laisser seul pendant 8 heures chaque jour peut entraîner:</p>
              <ul class="list-disc ms-5">
                <li>Ennui → comportements destructeurs (mordillage, grattage, aboiements)</li>
                <li>Anxiété de séparation → agitation, pleurs, stress</li>
                <li>Manque d’exercice → surplus d’énergie difficile à gérer en soirée</li>
              </ul>
              <p>Si vous travaillez à temps plein, voici comment compenser:</p>
              <ul class="list-disc ms-5">
                <li><strong>Avant de partir:</strong> une sortie au parc à chiens d’au moins 30 minutes ou une bonne marche pour le fatiguer.</li>
                <li><strong>Pendant la journée:</strong> envisagez un promeneur canin, une garderie de jour ou un proche qui peut passer.</li>
                <li><strong>À la maison:</strong> laissez des jeux interactifs, un tapis de fouille, ou des jouets distributeurs de gâteries.</li>
                <li><strong>En soirée:</strong> prévoyez du temps de qualité avec lui (jeu, entraînement, câlins).</li>
              </ul>
              <p>Le Pomsky peut s’adapter à un horaire de travail, mais il ne doit pas être laissé seul toute la journée sans stimulation. Si votre rythme de vie est très chargé, il est important de prévoir des solutions pour répondre à ses besoins.</p>
            </div>
          </div>
        </div>
        {{-- #12 bis Cage --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que la cage est bonne pour le Pomsky?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Oui, vous pouvez laisser votre Pomsky en cage (ou en enclos) pour de courtes périodes, mais cela doit être fait avec bienveillance, dans un cadre éducatif et sécurisant.</p>
              <p>La cage n’est pas une punition: c’est un espace de repos et de sécurité pour le chiot. Lorsqu’elle est bien introduite, elle devient un refuge apaisant où le Pomsky peut se détendre, dormir ou se retirer.</p>
              <p><strong>Bonnes pratiques:</strong></p>
              <ul class="list-disc ms-5">
                <li>Introduisez la cage progressivement, avec des récompenses et des moments positifs.</li>
                <li>Utilisez-la pour les siestes, les nuits ou les absences courtes (maximum 3 à 4 heures pour un chiot, 5 à 6 heures pour un adulte).</li>
                <li>Placez-y une couverture, des jouets et de l’eau pour le confort.</li>
                <li>Ne jamais utiliser la cage comme punition ou pour isoler le chien après un mauvais comportement.</li>
              </ul>
              <p><strong>À éviter:</strong></p>
              <ul class="list-disc ms-5">
                <li>Ne laissez jamais un chiot en cage toute la journée.</li>
                <li>Ne forcez pas le chien à y entrer s’il montre des signes de stress ou de peur.</li>
                <li>Ne laissez pas un Pomsky en cage plus de 6 heures consécutives, même adulte.</li>
              </ul>
              <p>Alternative: un enclos intérieur peut être une bonne solution pour les périodes un peu plus longues, offrant plus d’espace tout en gardant un cadre sécuritaire.</p>
            </div>
          </div>
        </div>
        {{-- #13 Enfants --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que le pomsky est un bon choix pour une famille avec des enfants?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Oui, le Pomsky est généralement un excellent chien de famille et s’entend très bien avec les enfants, surtout s’il est bien socialisé dès son plus jeune âge</p>
              <p><strong>Pourquoi le Pomsky est adapté aux familles:</strong></p>
              <ul class="list-disc ms-5">
                <li>Il est joueur, affectueux et curieux, ce qui en fait un compagnon idéal pour les enfants.</li>
                <li>Il adore interagir et participer à la vie de famille, que ce soit pour les jeux, les câlins ou les promenades.</li>
                <li>Sa taille moyenne le rend moins intimidant pour les jeunes enfants, tout en étant assez robuste pour jouer sans se blesser facilement.</li>
              </ul>
              <p><strong>Précautions à prendre:</strong></p>
              <ul class="list-disc ms-5">
                <li>Comme pour tous les chiens, il est important d’enseigner aux enfants à respecter le chien: ne pas le déranger pendant qu’il mange ou dort, ne pas tirer sur ses poils ou ses oreilles.</li>
                <li>Une supervision est recommandée avec les jeunes enfants pour éviter les maladresses.</li>
                <li>Une bonne socialisation dès le jeune âge du chiot favorise un comportement équilibré et calme avec les enfants et les visiteurs.</li>
              </ul>
              <p>En résumé: le Pomsky est un chien familial par excellence, à condition qu’il soit bien éduqué et que les enfants soient sensibilisés à une cohabitation respectueuse.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Hiver & été --}}
    <div id="meteo" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="170" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Saisons: hiver & été</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        {{-- #14 Hiver --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que le pomsky aime l’hiver?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Oui, le Pomsky aime généralement l’hiver et s’épanouit dans les climats froids grâce à son pelage épais et isolant.</p>
              <p>Le Pomsky hérite du double pelage dense de ses parents — le Husky sibérien et le Pomeranian — tous deux originaires de régions froides. Ce pelage lui permet de résister aux basses températures et de profiter pleinement des activités hivernales.</p>
              <ul class="list-disc ms-5">
                <li>Il adore jouer dans la neige, creuser, courir et sauter.</li>
                <li>Il tolère bien les températures froides, parfois même en dessous de –10 °C, tant qu’il est actif et surveillé.</li>
                <li>Il apprécie les promenades dans l’air frais, surtout si elles sont accompagnées de jeux ou de sorties au parc à chiens.</li>
              </ul>
              <p><strong>Précautions à prendre en hiver</strong></p>
              <ul class="list-disc ms-5">
                <li>Protégez ses pattes du sel et des produits chimiques sur les trottoirs (botillons ou nettoyage après la marche).</li>
                <li>Surveillez les signes de froid: tremblements, levée des pattes, agitation.</li>
                <li>Limitez les sorties prolongées par temps glacial ou venteux, surtout pour les chiots ou les Pomskys de petite taille.</li>
              </ul>
              <p>En résumé: le Pomsky aime l’hiver, mais il faut adapter les sorties à la météo et à son niveau de tolérance. Avec les bons soins, il sera ravi de vous accompagner dans vos aventures enneigées!</p>
            </div>
          </div>
        </div>
        {{-- #14 bis Été --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que le pomsky aime l’été?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Le Pomsky peut vivre en été, mais il est sensible à la chaleur et nécessite des précautions particulières pour éviter les coups de chaleur.</p>
              <p>Le Pomsky possède un épais pelage double, hérité du Husky et du Pomeranian, conçu pour le froid. En été, ce pelage peut rapidement devenir un handicap si le chien est exposé à des températures élevées sans protection.</p>
              <p><strong>Risques en période de chaleur:</strong></p>
              <ul class="list-disc ms-5">
                <li>Coup de chaleur: respiration rapide, léthargie, vomissements</li>
                <li>Déshydratation</li>
                <li>Brûlures aux coussinets sur les trottoirs chauds</li>
              </ul>
              <p><strong>Conseils pour protéger ton Pomsky en été:</strong></p>
              <ul class="list-disc ms-5">
                <li>Évite les sorties entre 11 h et 15 h, moment où la chaleur est la plus intense.</li>
                <li>Privilégie les promenades tôt le matin ou en soirée, à l’ombre si possible.</li>
                <li>Hydrate-le en permanence: eau fraîche disponible à volonté, avec des glaçons ou des friandises glacées (ex.: bouillon congelé, fruits adaptés).</li>
                <li>Propose un coin frais à l’intérieur: ventilateur, carrelage, tapis rafraîchissant ou pièce climatisée.</li>
                <li>Ne rase jamais son pelage: cela perturbe sa régulation thermique. Un brossage régulier suffit à éliminer le sous-poil mort et à améliorer la circulation de l’air.</li>
                <li>Surveille les signes de surchauffe: halètement excessif, langue très rouge, faiblesse, refus de bouger.</li>
              </ul>
              <p>En résumé: le Pomsky peut profiter de l’été, mais il faut adapter ses activités, ses horaires de sortie et son environnement pour éviter tout risque lié à la chaleur.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Activités, formats & randonnée/baignade --}}
    <div id="activites" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="180" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Activités, formats & randonnée</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        {{-- #15 Baignade --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que le pomsky aime se baigner?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Certains Pomskys aiment se baigner, mais ce n’est pas garanti: cela dépend de leur personnalité et de leur expérience avec l’eau.</p>
              <p>Le Pomsky est un mélange entre:</p>
              <ul class="list-disc ms-5">
                <li>Le Husky sibérien, qui aime généralement l’eau et peut être un bon nageur.</li>
                <li>Le Pomeranian, qui est moins à l’aise dans l’eau et peut être réticent à nager.</li>
              </ul>
              <p>Résultat: le goût pour la baignade varie d’un Pomsky à l’autre. Certains adorent sauter dans les flaques ou nager dans un lac, tandis que d’autres préfèrent rester au sec.</p>
              <p><strong>Comment encourager la baignade:</strong></p>
              <ul class="list-disc ms-5">
                <li>Commence doucement: bassins peu profonds, baignades courtes, jouets flottants.</li>
                <li>Utilise des encouragements positifs: friandises, félicitations, présence rassurante.</li>
                <li>Ne force jamais: un chien effrayé par l’eau peut développer une aversion durable.</li>
                <li>Surveille toujours: même s’il aime nager, le Pomsky n’est pas un nageur naturel comme un Labrador.</li>
              </ul>
              <p><strong>Sécurité avant tout:</strong></p>
              <ul class="list-disc ms-5">
                <li>Utilise un gilet de flottaison pour les baignades en lac ou en rivière.</li>
                <li>Rince-le après la baignade pour éliminer le chlore, le sel ou les algues.</li>
                <li>Ne le laisse jamais sans surveillance près d’une piscine ou d’un plan d’eau.</li>
              </ul>
              <p>En résumé: le Pomsky peut aimer se baigner, mais cela dépend de son tempérament. Avec une approche douce et sécurisée, tu peux l’aider à découvrir les plaisirs de l’eau</p>
            </div>
          </div>
        </div>
        {{-- #16 Randonnée --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que le pomsky aime suivre son humain en randonnée?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Oui, le Pomsky aime généralement suivre son humain en randonnée, surtout s’il est bien entraîné et en bonne condition physique. C’est un compagnon curieux, énergique et sociable qui adore explorer de nouveaux environnements avec sa famille.</p>
              <ul class="list-disc ms-5">
                <li>Il hérite du goût de l’aventure du Husky, qui aime les grands espaces et les longues marches.</li>
                <li>Sa taille moyenne le rend plus maniable que le Husky, tout en conservant une bonne endurance.</li>
                <li>Il est très attaché à son humain et aime participer aux activités extérieures, surtout s’il peut courir, grimper ou renifler</li>
              </ul>
              <p><strong>Conseils pour randonner avec un Pomsky:</strong></p>
              <ul class="list-disc ms-5">
                <li>Commence par des sentiers faciles pour tester son endurance et sa tolérance au terrain.</li>
                <li>Assure-toi qu’il a au moins 12 mois avant de faire de longues randonnées (pour préserver ses articulations).</li>
                <li>Prévoyez des pauses régulières pour l’hydrater et le laisser se reposer.</li>
                <li>Utilise un harnais confortable et une laisse adaptée (ou une longe pour plus de liberté).</li>
                <li>Emporte de l’eau, des friandises, des sacs pour les besoins et éventuellement un kit de premiers soins.</li>
              </ul>
              <p><strong>Attention à:</strong></p>
              <ul class="list-disc ms-5">
                <li>La chaleur excessive en été (le Pomsky est sensible à la chaleur).</li>
                <li>Les terrains trop accidentés ou glissants.</li>
                <li>Les autres animaux sauvages ou chiens non tenus en laisse.</li>
              </ul>
              <p>En résumé: le Pomsky est un excellent compagnon de randonnée, à condition de respecter son rythme et de bien le préparer. Il adorera partager ces moments d’exploration avec toi!</p>
            </div>
          </div>
        </div>
        {{-- #17 Formats --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Pomsky standard, miniature et toy ont-ils les mêmes besoins?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Non, les Pomskys standard, miniature et toy n’ont pas exactement les mêmes besoins — leur taille influence leur niveau d’énergie, leur fragilité physique et leur tolérance à l’environnement.</p>
              <p>Les Pomskys standard ont besoin de sorties plus longues et plus dynamiques, comme des randonnées ou des jeux au parc à chiens. Les formats toy et miniature peuvent se contenter de marches plus courtes, mais doivent tout de même être stimulés quotidiennement.</p>
              <p><strong>Stimulation mentale:</strong> Tous les Pomskys, quelle que soit leur taille, ont besoin de jeux d’intelligence, d’apprentissage et d’interaction. Les plus petits peuvent être plus sensibles au stress, donc les activités doivent être douces et rassurantes.</p>
              <p><strong>Toilettage:</strong> Le pelage est similaire pour tous les formats: double couche nécessitant un brossage régulier, surtout en période de mue.</p>
              <p><strong>Santé et fragilité:</strong> Les Pomskys toy sont plus sensibles aux manipulations brusques, aux chutes et aux températures extrêmes. Ils demandent une attention particulière, surtout avec les jeunes enfants ou dans les environnements très actifs.</p>
              <p>En résumé: plus le Pomsky est petit, plus ses besoins sont adaptés à un mode de vie calme et doux, tandis que les formats standard et miniature demandent plus d’activité physique et d’espace.</p>
            </div>
          </div>
        </div>
        {{-- #18 Sports canins --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce que le Pomsky peut faire du sport ou des activités canines ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Oui, le Pomsky peut faire du sport et participer à des activités canines! C’est un chien vif, intelligent et motivé qui adore se dépenser physiquement et mentalement</p>
              <p>Le Pomsky a besoin de 60 minutes d’exercice par jour, réparties en plusieurs sessions. Il n’est pas aussi endurant qu’un Husky, mais il reste très actif.</p>
              <p>Voici quelques sports et activités qu’il peut pratiquer:</p>
              <ul class="list-disc ms-5">
                <li>Agilité: parcours d’obstacles avec sauts, tunnels, slaloms — parfait pour son agilité et son intelligence.</li>
                <li>Canicross: course à pied avec ton chien attaché à la taille — idéal pour les Pomskys standard ou miniature.</li>
                <li>Obéissance: apprentissage de commandes et routines — excellent pour renforcer le lien maître-chien.</li>
                <li>Dog dancing: chorégraphies ludiques avec ton chien — très apprécié des Pomskys toy ou miniature.</li>
                <li>Randonnée: exploration en nature, adaptée à son niveau d’endurance.</li>
                <li>Jeux de flair: recherche d’objets ou de friandises cachées — stimule son odorat et sa concentration.</li>
              </ul>
              <p><strong>Stimulation mentale</strong></p>
              <p>Le Pomsky est très intelligent et a besoin de défis cognitifs:</p>
              <ul class="list-disc ms-5">
                <li>Jeux interactifs</li>
                <li>Entraînement à de nouveaux tours</li>
                <li>Puzzles alimentaires</li>
              </ul>
              <p><strong>À adapter selon la taille</strong></p>
              <ul class="list-disc ms-5">
                <li>Les Pomskys toy sont plus sensibles et doivent éviter les sports trop intenses ou les sauts hauts.</li>
                <li>Les Pomskys standard peuvent faire des activités plus physiques comme le canicross ou les longues randonnées.</li>
              </ul>
              <p>En résumé: le Pomsky est un excellent candidat pour les sports canins, à condition d’adapter l’intensité à sa taille et son âge. Il adore apprendre, se dépenser et partager des moments actifs avec son humain.</p>
            </div>
          </div>
        </div>
        {{-- #19 Chiot & sport --}}
<div id="chiot-sport" class="hs-accordion bg-body-bg p-5 rounded-2xl scroll-mt-28">
  <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
    <h3 class="md:text-1.5xl text-xl">Chiot et sport : l’exercice à quel âge ?</h3>
    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
      <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
      <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
    </div>
  </button>

  <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
    <div class="prose prose-sm mt-5">
      <p>
        Lorsque vous accueillez enfin vos chiots de 9 semaines, veuillez garder cette image à l'esprit.
        Leurs os ne se touchent même pas encore. Ils marchent si joliment avec de grosses pattes souples
        et des mouvements bancals parce que leurs articulations sont entièrement constituées de cartilages,
        de muscles, de tendons et de ligaments recouverts de peau. Rien n'est encore bien ajusté ou n'a
        encore de véritable prise.
      </p>

      <p>
        Lorsque vous les faites courir de manière excessive ou que vous ne limitez pas leur exercice pour
        les empêcher d'en faire trop pendant cette période, vous ne leur donnez pas la chance de grandir
        correctement. Chaque grand saut ou course bondissante et excitée provoque des impacts entre les os.
        En quantités raisonnables, ce n'est pas problématique et c'est une usure normale qui s’opèrera.
      </p>

      <p>
        Mais lorsque vous laissez le chiot sauter du canapé ou du lit, l’emmenez faire de longues promenades,
        vous endommagez cette articulation en formation. Lorsque vous laissez le chiot se déplacer sur des
        carreaux glissants, vous endommagez l'articulation.
      </p>

      <p>
        Vous n'avez la chance de les faire grandir qu'une seule fois. Un corps bien construit est quelque chose
        qui vient d'un excellent élevage et d'une bonne éducation. LES DEUX, pas seulement un.
      </p>

      <p>
        Une fois adulte, vous aurez le reste de votre vie à passer à jouer et à vous engager dans des exercices
        à fort impact. Alors gardez-le au calme tant qu’il est encore petit et offrez-lui le cadeau qui ne peut
        être offert qu'une seule fois.
      </p>

      @php
        $osImgPath = public_path('photos/os_pomsky.jpg');
        $tableauImgPath = public_path('photos/tableau.jpg');
        $osImg = file_exists($osImgPath) ? asset('photos/os_pomsky.jpg') : null;
        $tableauImg = file_exists($tableauImgPath) ? asset('photos/tableau.jpg') : null;
      @endphp

      @if($osImg || $tableauImg)
        <div class="not-prose mt-6 grid md:grid-cols-2 gap-4">
          @if($osImg)
            <figure class="bg-white rounded-2xl shadow-md overflow-hidden border border-neutral-200">
              <img src="{{ $osImg }}" alt="Chiot - développement des articulations" class="w-full h-auto object-contain" loading="lazy">
            </figure>
          @endif

          @if($tableauImg)
            <figure class="bg-white rounded-2xl shadow-md overflow-hidden border border-neutral-200">
              <img src="{{ $tableauImg }}" alt="Tableau exercice chiot selon l'âge" class="w-full h-auto object-contain" loading="lazy">
            </figure>
          @endif
        </div>
      @endif
    </div>
  </div>
</div>

      </div>
    </div>

    {{-- Éleveur sérieux & aide-mémoire --}}
    <div id="eleveur" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="190" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Comment reconnaître un éleveur sérieux ?</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        {{-- #19 Éleveur sérieux --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Critères essentiels à vérifier</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Un éleveur sérieux de Pomsky se distingue par sa transparence, son engagement envers le bien-être animal, et le respect de normes sanitaires et éthiques élevées. Il ne vend pas simplement un chiot, mais accompagne l’adoptant dans une démarche responsable.</p>
              <p><strong>Voici les critères essentiels à vérifier avant d’acheter:</strong></p>
              <p><em>Engagement envers le bien-être animal</em></p>
              <ul class="list-disc ms-5">
                <li>Les chiots vivent dans un environnement propre, spacieux et stimulant.</li>
                <li>L’éleveur limite le nombre de portées par an pour préserver la santé des mères.</li>
                <li>Une seule portée par année par chienne.</li>
                <li>Il ne vend pas trop tôt: les chiots partent après 8 semaines minimum</li>
                
              </ul>
              <p><em>Transparence et traçabilité</em></p>
              <ul class="list-disc ms-5">
                <li>Il fournit un contrat de vente, un carnet de santé, et parfois un certificat vétérinaire de conformité.</li>
                <li>Il présente les parents du chiot, leur tempérament, leur historique de santé, et les résultats de tests génétiques</li>
              </ul>
              <p><em>Éducation et socialisation</em></p>
              <ul class="list-disc ms-5">
                <li>Les chiots sont habitués aux bruits, aux humains, aux autres animaux dès le plus jeune âge.</li>
                <li>L’éleveur pose des questions à l’acheteur pour s’assurer que le chiot ira dans un foyer adapté.</li>
              </ul>
              <p><em>Suivi et accompagnement</em></p>
              <ul class="list-disc ms-5">
                <li>Il propose un suivi post-adoption: conseils, disponibilité en cas de problème</li>
                <li>Il ne pousse pas à l’achat, mais encourage une réflexion responsable.</li>
              </ul>
              <p><strong>À éviter absolument</strong></p>
              <ul class="list-disc ms-5">
                <li>Vente en ligne sans visite possible</li>
                <li>Absence de documents officiels</li>
                <li>Chiots trop jeunes ou trop nombreux</li>
                <li>Refus de montrer les parents ou le lieu d’élevage</li>
                <li>Transaction dans un stationnement et non à la résidence de l’éleveur</li>
              </ul>
              <p>En résumé: un bon éleveur est passionné, transparent et soucieux du bien-être de ses chiens. Il vous aide à accueillir un Pomsky équilibré, en bonne santé et bien socialisé.</p>
              <p><strong>En rappel, lorsqu’on désire se procurer un pomsky</strong></p>
              <ol class="list-decimal ms-5">
                <li><strong>Regarder les parents et leur génétique.</strong><br>Un chiot est toujours beau. Le restera-t-il?<br>Est-ce que les parents ont de longues oreilles difformes. La beauté des parents est un facteur à ne pas négliger car il donne un aperçu de l’apparence qu’aura votre chiot adulte. Achetez sans avoir vu les parents est une grave erreur.</li>
                <li><strong>Demandez les test embark.</strong> Votre devez connaître l’ADN de votre chien. Es-il vraiment un pomsky? Il y a malheureusement beaucoup de fraude à Montréal et de faux pomsky en circulation. Renseignez-vous …..<br>American Pomsky Kennel club, International Pomsky association. <br>Vous verrez ce qui est accepté comme génétique. Plusieurs personnes mélangent avec des races non autorisées. Assurez-vous d’avoir un vrai au prix que ça coûte. <br>Seul husky, pomeranien et American esquimau sont des races approuvées</li>
                <li><strong>L’éleveur doit accepter de vous montrer l’environnement où le chien est élevé.</strong><br>Éviter les transactions dans un stationnement de commerce.<br>Un éleveur éthique vous fera venir chez lui, une fois le dépôt donné.<br>Vous aurez l’occasion de voir où le chiot grandi, l’interaction avec la fratrie, les parents du chiot.<br>Vous aurez l’occasion de voir votre chiot dans son quotidien et ainsi évaluer comment il interagit avec son entourage. Est-il équilibré ?</li>
                <li><strong>Assurez-vous d’avoir un contrat.</strong> Ensuite, si le chien a un problème, vous avez une preuve de transaction. Le contrat est signé par les 2 parties, vous et l’éleveur</li>
                <li><strong>Demander s’il s’agit d’un F1-F2-F3-F4, F3b. F4b.</strong><br>Sachez ce que vous achetez et surtout renseignez-vous sur la valeur sur le marché.<br>Les plus coûteux sont les lignées F3-F4.<br><br>Tous les pomsky ne s’équivaut pas. Il y a des lignées de plus grande qualité que d’autres et il faut savoir les reconnaître.<br><br>Avant d’acheter, renseignez-vous!<br> - International pomsky association<br> - American pomsky Kennel club<br> - test embark</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Prix au Québec --}}
    <div id="prix" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="185" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Prix au Québec</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">quel est le prix d'un pomsky toy, miniature et standard au Québec</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Au Québec, le prix d’un Pomsky varie selon sa taille: les formats toy  sont généralement plus chers que les standards, en raison de leur rareté et de leur apparence très recherchée.</p>
              <p>Le pelage est l’un des éléments qui rend le Pomsky si unique et populaire. Il peut ressembler à celui d’un Husky miniature ou à un Spitz élégant et influencent fortement le prix et la demande.</p>
              <p>La couleur du pelage et des yeux influence souvent le prix d’un Pomsky, surtout au Québec où les acheteurs recherchent des traits esthétiques bien précis.</p>
              <p>Plus le Pomsky a une apparence “mini husky” avec pelage contrasté et yeux bleus, vairons ou deux couleurs, plus son prix augmente. Ces traits sont rares, demandent plusieurs générations de sélection, et sont donc valorisés par les éleveurs.</p>
              <p>Tout dépend des lignées génétiques. </p>
              <p>De façon générale, </p>
              <ul class="list-disc ms-5">
                <li>Standard et miniature: entre 3000$ et 4500$</li>
                <li>Toy: 5000-6000$</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Éthique d’élevage --}}
    <div id="ethique" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="186" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Éthique d’élevage</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">À quelle fréquence, les chiennes sont-elles accouplées</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Une éthique d’élevage responsable</p>
              <p>Chez nous, chaque décision est guidée par le respect profond que nous portons à nos animaux. Il est donc fondamental de préciser que nos chiennes ne sont jamais accouplées deux fois de suite de manière intentionnelle.</p>
              <p>Si une chienne venait à avoir deux portées consécutives sans période de repos suffisante, cela relèverait d’un accident exceptionnel et en aucun cas d’un choix délibéré. Une telle situation serait contraire à nos valeurs et à notre philosophie d’élevage.</p>
              <p>Nous croyons fermement que le corps d’une chienne doit avoir le temps de se régénérer, de retrouver son équilibre, et de vivre pleinement sa vie — faite de jeux, de liberté et de tendresse. La récupération entre chaque portée est essentielle, tant pour sa santé physique que pour son bien-être émotionnel.</p>
              <p>Notre engagement est clair: refuser toute forme de surexploitation et offrir à chaque animal une vie heureuse, respectée et aimée.</p>
              <p>C’est pourquoi nous ne faisons qu’une seule portée par an par chienne et nous limitons le nombre total de portées au cours de sa vie. Une fois ce nombre atteint, elle profite d’une retraite paisible, entourée d’affection, loin de toute contrainte, pour simplement vivre sa vie de chien dans le bonheur et la sérénité.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Visites & fonctionnement --}}
    <div id="visite" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="187" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Visites & fonctionnement</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Est-ce possible de visiter l'élevage ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Un élevage familial, pas une animalerie</p>
              <p>Notre élevage est avant tout une maison familiale, où les chiens vivent librement, entourés d’amour, de jeux et de présence humaine au quotidien. Ici, il n’y a ni cages, ni vitrines, ni locaux à visiter — seulement un foyer chaleureux où chaque animal est considéré comme un membre de la famille. Nous limitons les allées et venues à notre domicile, car ce n’est pas un commerce ni un local d’exposition: c’est une maison privée, dédiée au bien-être de nos animaux et de notre famille.</p>
              <p>Par souci de sécurité pour nos chiots et nos enfants, nous ne communiquons pas l’adresse de notre domicile à tout le monde. Ce choix n’est pas un manque de transparence, mais une mesure de protection essentielle. Nous ne sommes pas une animalerie, et notre maison unifamiliale n’est pas ouverte au public comme un commerce.</p>
              <p>Les chiens évoluent chez nous en liberté, dans un environnement calme et bienveillant. Leur bien-être passe avant toute chose, et nous faisons le maximum pour leur offrir une vie équilibrée, respectée et heureuse.</p>
              <p>De plus, certains de nos chiens sont confiés à des familles d’accueil, avec qui nous avons établi des partenariats de confiance. Ces familles merveilleuses s’occupent de nos chiens avec amour et dévouement, leur offrant une véritable vie de famille, entourés d’enfants, de jeux et de tendresse. Grâce à elles, nos chiens bénéficient d’un environnement chaleureux, stimulant et affectueux, même lorsqu’ils ne vivent pas directement chez nous. C’est une façon pour nous de garantir que chaque chien reçoit toute l’attention, l’amour et la qualité de vie qu’il mérite.</p>
              <p>Les personnes qui réservent un chiot chez nous sont invitées à venir à notre domicile lorsque les chiots atteignent l’âge de 5 semaines. Ce moment privilégié permet de rencontrer la maman, observer la fratrie, découvrir l’environnement dans lequel les chiots grandissent, et poser toutes les questions nécessaires. Seules les familles ayant réservé un chiot sont accueillies chez nous.</p>
              <p>Pour les personnes qui souhaitent s’informer ou nous rencontrer avant de réserver, nous participons chaque année à plusieurs salons spécialisés, où il est possible de discuter avec nous, voir nos chiens, et découvrir notre philosophie d’élevage. En dehors de ces événements, nous sommes également ouverts à nous déplacer dans un lieu neutre, comme un parc, pour présenter nos chiens dans un cadre sécuritaire et convivial.</p>
              <p>Par souci de sécurité, l’adresse de notre domicile est communiquée uniquement aux familles ayant réservé un chiot. Ce principe nous permet de préserver la tranquillité de notre foyer et le bien-être de nos animaux, tout en maintenant une relation de confiance avec nos adoptants.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Vrai Pomsky & test ADN --}}
    <div id="adn" class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="195" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Vrai Pomsky & test ADN</h2>

      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        {{-- #21 Vrai Pomsky --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Comment savoir si on me vend un « vrai Pomsky » ?</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>

          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">

              <h4>Une prise de sang ne suffit pas</h4>
              <p>
                Contrairement à une croyance populaire, une simple prise de sang ne permet pas de confirmer si un chien est un vrai Pomsky.
                Elle peut donner des informations sur la santé (inflammation, carences, etc.), mais elle ne révèle aucune donnée sur l’ADN
                ou les origines génétiques. Pour cela, seul un test ADN spécialisé comme <strong>Embark</strong> peut vous donner une réponse fiable.
              </p>

              <h4>Le test Embark : la référence pour identifier un vrai Pomsky</h4>
              <p>
                Le test ADN <strong>Embark</strong> est le moyen le plus fiable pour confirmer l’authenticité d’un Pomsky.
                Il analyse l’ADN en profondeur et fournit des informations précises sur les origines et certains risques héréditaires.
              </p>

              <h4>Ce que le test Embark peut révéler</h4>
              <ul class="list-disc ms-5">
                <li>Le pourcentage exact de <strong>Husky sibérien</strong> et de <strong>Poméranien</strong> dans l’ADN de votre chien</li>
                <li>La détection de <strong>plus de 225 maladies génétiques</strong> : un outil essentiel pour prévenir les risques héréditaires</li>
                <li>L’identification de <strong>races non conformes</strong> : toute autre race présente dans l’ADN sera détectée</li>
              </ul>

              {{-- ✅ Exemples de tests(images) --}}
              @php
                $testCandidates = [
                  'images/element/test1.jpg',
                  'images/element/test2.jpg',
                  'images/element/test3.jpg',
                ];

                $testImages = collect($testCandidates)
                  ->map(function($rel) {
                    $abs = public_path($rel);
                    return file_exists($abs) ? asset($rel) : null;
                  })
                  ->filter()
                  ->values();
              @endphp

              @if($testImages->count())
                <div class="not-prose mt-6">
                  <p class="text-slate-700 font-medium mb-3">Exemples de résultats Embark</p>

                  <div class="grid sm:grid-cols-3 gap-4">
                    @foreach($testImages as $src)
                      <figure class="bg-white rounded-2xl shadow-md overflow-hidden">
                        <div class="aspect-[9/16] w-full bg-white flex items-center justify-center">
                          <img
                            src="{{ $src }}"
                            alt="Exemple de résultat Embark"
                            class="w-full h-full object-contain p-3"
                            loading="lazy"
                          >
                        </div>
                      </figure>
                    @endforeach
                  </div>
                </div>
              @endif

              <h4 class="mt-6">Quelles races sont acceptées pour un Pomsky authentique ?</h4>
              <p>
                Selon les standards de l’<strong>American Pomsky Kennel Club (APKC)</strong> et de l’<strong>International Pomsky Association (IPA)</strong> :
              </p>

              <div class="not-prose overflow-x-auto">
                <table class="w-full text-sm border-separate border-spacing-0 rounded-xl overflow-hidden">
                  <thead>
                    <tr>
                      <th class="text-left bg-white/70 px-4 py-3 border-b">Race</th>
                      <th class="text-left bg-white/70 px-4 py-3 border-b">Statut</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white/50">
                    <tr>
                      <td class="px-4 py-3 border-b">Husky sibérien</td>
                      <td class="px-4 py-3 border-b">Acceptée</td>
                    </tr>
                    <tr>
                      <td class="px-4 py-3 border-b">Poméranien</td>
                      <td class="px-4 py-3 border-b">Acceptée</td>
                    </tr>
                    <tr>
                      <td class="px-4 py-3 border-b">American Eskimo</td>
                      <td class="px-4 py-3 border-b">Acceptée</td>
                    </tr>
                    <tr>
                      <td class="px-4 py-3 border-b">Samoyède</td>
                      <td class="px-4 py-3 border-b">Non reconnue</td>
                    </tr>
                    <tr>
                      <td class="px-4 py-3 border-b">Shiba Inu</td>
                      <td class="px-4 py-3 border-b">Non reconnue</td>
                    </tr>
                    <tr>
                      <td class="px-4 py-3 border-b">Alaskan Malamute</td>
                      <td class="px-4 py-3 border-b">Non reconnue</td>
                    </tr>
                    <tr>
                      <td class="px-4 py-3 border-b">American Klee Kai</td>
                      <td class="px-4 py-3 border-b">Non reconnue</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p class="mt-5">
                Ces races sont parfois utilisées pour obtenir un look nordique, mais <strong>elles ne sont pas reconnues</strong> par les associations officielles.
              </p>

              <h4>En résumé</h4>
              <ul class="list-disc ms-5">
                <li>Une prise de sang ne suffit pas : seul un <strong>test ADN</strong> peut confirmer si on vous vend un vrai Pomsky.</li>
                <li>Un test comme <strong>Embark</strong> permet de vérifier les origines, l’ADN et d’obtenir une meilleure visibilité génétique.</li>
                <li>Les races attendues sont : <strong>Husky sibérien</strong>, <strong>Poméranien</strong> et <strong>American Eskimo</strong>.</li>
              </ul>

              <p>
                À Montréal, il y a actuellement une grande quantité de faux Pomsky en circulation. Plusieurs personnes vendent des chiens
                mélangés avec des races non autorisées au prix d’un “vrai” Pomsky. C’est pourquoi il est essentiel de <strong>demander les résultats ADN</strong>,
                la preuve de génétique des parents et un <strong>contrat</strong>.
              </p>

              <h4>Le tempérament d’un vrai Pomsky : une assurance comportementale</h4>
              <p>
                Un Pomsky issu de lignées conformes tend à présenter des traits plus prévisibles. Vous investissez dans un animal dont les traits
                sont connus, appréciés et recherchés — un compagnon fidèle, joyeux et bien adapté à la vie moderne.
              </p>
              <ul class="list-disc ms-5">
                <li><strong>Intelligent et curieux</strong></li>
                <li><strong>Joueur et affectueux</strong></li>
                <li><strong>Sociable et adaptable</strong></li>
              </ul>

              <p>
                Avant l’achat, il est essentiel de <strong>vérifier la lignée</strong> et de <strong>demander un test ADN</strong> pour garantir non seulement
                l’apparence, mais aussi le tempérament que vous attendez de votre futur compagnon.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

    {{-- Clause de non-reproduction --}}
    <div id="contrat" class="text-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
      <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Clause de non‑reproduction & stérilisation</h2>
      <div class="md:space-y-7.5 space-y-5 hs-accordion-group text-start max-w-3xl mx-auto">
        {{-- #20 Non-reproduction --}}
        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
          <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
            <h3 class="md:text-1.5xl text-xl">Politique de reproduction</h3>
            <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
              <svg class="h-5 w-5 block hs-accordion-active:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
              <svg class="h-5 w-5 hidden hs-accordion-active:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/></svg>
            </div>
          </button>
          <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
            <div class="prose prose-sm mt-5">
              <p>Afin de préserver la qualité, la traçabilité et le bien-être de mes lignées, toute reproduction est strictement interdite pour les chiens issus de mon élevage. Aucun chiot ne peut être utilisé à des fins de reproduction.</p>
              <p><strong>La stérilisation ou la castration est obligatoire:</strong></p>
              <ul class="list-disc ms-5">
                <li>Pour les mâles, elle doit être réalisée entre 7 et 12 mois.</li>
                <li>Pour les femelles, elle doit être effectuée après leur première chaleur</li>
              </ul>
              <p>L’achat d’un chiot au sein de mon élevage implique l’acceptation d’un contrat de non-reproduction, incluant une clause de stérilisation obligatoire</p>
            </div>
          </div>
        </div>
      </div>

      {{-- CTA final (contact) --}}
      <div class="text-center md:mt-12.5 mt-10 flex gap-1.25 flex-col">
        <h3 class="mb-2.5 md:text-1.5xl text-xl">Vous avez une autre question&nbsp;?</h3>
        <div>
          <a href="{{ url('/contact') }}" class="py-3.5 md:px-7.5 px-6 inline-flex bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
            Nous contacter
          </a>
        </div>
        <a href="#top" class="underline text-sm mt-3 opacity-70">Retour en haut</a>
      </div>
    </div>

  </div>
</section>

@endsection
