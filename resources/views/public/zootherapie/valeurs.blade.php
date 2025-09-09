@extends('layouts.landing', ['title' => 'Zoothérapie – Valeurs & pourquoi nous choisir'])

@section('content')
<section class="bg-body-bg py-16">
  <div class="container md:text-center">
    <h1 class="text-4xl md:text-5.5xl">Zoothérapie</h1>
    <p class="mt-2 text-slate-700">Valeurs, compétences et pourquoi nous choisir.</p>
  </div>
</section>

<section class="bg-white py-16">
  <div class="container grid md:grid-cols-3 gap-6">
    <div class="bg-white border border-neutral-200 p-6 rounded-2xl">
      <h3 class="font-semibold">Approche bienveillante</h3><p class="mt-2 text-slate-700">Respect, écoute, sécurité émotionnelle.</p>
    </div>
    <div class="bg-white border border-neutral-200 p-6 rounded-2xl">
      <h3 class="font-semibold">Compétences professionnelles</h3><p class="mt-2 text-slate-700">Cadre éthique et méthodologique.</p>
    </div>
    <div class="bg-white border border-neutral-200 p-6 rounded-2xl">
      <h3 class="font-semibold">Impact mesurable</h3><p class="mt-2 text-slate-700">Objectifs définis, suivi personnalisé.</p>
    </div>
  </div>
</section>
@endsection
