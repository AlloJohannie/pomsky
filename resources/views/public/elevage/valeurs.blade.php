@extends('layouts.landing', ['title' => 'Valeurs & mission'])

@section('content')
<section class="bg-body-bg py-16 md:py-22.5">
  <div class="container text-center">
    <h1 class="text-4xl md:text-5.5xl">Nos valeurs & mission</h1>
    <p class="mt-2 text-slate-700">Philosophie de l’élevage et de la zoothérapie.</p>
  </div>
</section>

<section class="bg-white py-16">
  <div class="container grid md:grid-cols-3 gap-6">
    <div class="bg-body-bg p-6 rounded-2xl">
      <h3 class="font-semibold">Bien-être animal</h3>
      <p class="mt-2 text-slate-700">Respect des besoins physiques et émotionnels.</p>
    </div>
    <div class="bg-body-bg p-6 rounded-2xl">
      <h3 class="font-semibold">Transparence</h3>
      <p class="mt-2 text-slate-700">Suivi clair, infos de santé, accompagnement honnête.</p>
    </div>
    <div class="bg-body-bg p-6 rounded-2xl">
      <h3 class="font-semibold">Approche familiale</h3>
      <p class="mt-2 text-slate-700">Chiots élevés à la maison, socialisation précoce.</p>
    </div>
  </div>
</section>

<section class="bg-white pb-16">
  <div class="container grid md:grid-cols-2 gap-6">
    <div class="bg-primary p-6 rounded-2xl">
      <h2 class="text-2xl font-semibold">Notre mission (Élevage)</h2>
      <p class="mt-2">Élever des Pomsky équilibrés, bien socialisés et en santé, prêts à s’intégrer harmonieusement dans leur famille.</p>
    </div>
    <div class="bg-primary p-6 rounded-2xl">
      <h2 class="text-2xl font-semibold">Notre mission (Zoothérapie)</h2>
      <p class="mt-2">Mettre la relation humain-animal au service du mieux-être, du lien social et du développement personnel.</p>
    </div>
  </div>
</section>
@endsection
