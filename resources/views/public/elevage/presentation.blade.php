@extends('layouts.landing', ['title' => 'Présentation de moi'])

@section('content')
<section class="bg-white pt-12.5 md:pt-17.5 pb-10">
  <div class="container grid lg:grid-cols-2 gap-10 items-center">
    <div data-aos="fade-right">
      <p class="inline-flex bg-primary text-dark px-3 py-1 rounded-full text-sm font-medium">Mon histoire</p>
      <h1 class="mt-3 text-4xl md:text-5.5xl">Une passion familiale devenue vocation</h1>
      <p class="mt-4 text-slate-700">
        Depuis l’enfance, les chiens occupent une place centrale dans ma vie. Aujourd’hui, j’unis mes deux passions :
        l’élevage éthique du Pomsky et la zoothérapie professionnelle, pour créer des liens durables et faire du bien autour de nous.
      </p>
      <p class="mt-3 text-slate-700">
        Les chiots naissent et grandissent à la maison, au contact des humains, des sons du quotidien et d’environnements variés.
        Cette socialisation précoce est aussi au cœur de mes interventions en zoothérapie.
      </p>
    </div>

    <div data-aos="fade-left">
      <img src="{{ asset('photos/'.(array_values(array_filter(glob(public_path('photos/*')), 'is_file')) ? basename(glob(public_path('photos/*'))[2]) : '') ) }}" class="rounded-2xl w-full h-auto object-cover" alt="La propriétaire avec ses chiens">
    </div>
  </div>
</section>

<section class="bg-body-bg py-16">
  <div class="container grid md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-2xl border border-neutral-200">
      <h3 class="font-semibold">Approche familiale</h3>
      <p class="mt-2 text-slate-700">Environnement chaleureux, respect du rythme de chaque chiot.</p>
    </div>
    <div class="bg-white p-6 rounded-2xl border border-neutral-200">
      <h3 class="font-semibold">Formation & éthique</h3>
      <p class="mt-2 text-slate-700">Pratiques responsables, suivi vétérinaire et transparence.</p>
    </div>
    <div class="bg-white p-6 rounded-2xl border border-neutral-200">
      <h3 class="font-semibold">Zoothérapie</h3>
      <p class="mt-2 text-slate-700">Des interventions professionnelles centrées sur la relation humain-animal.</p>
    </div>
  </div>
</section>
@endsection
