@extends('layouts.landing', ['title' => 'Zoothérapie – Tarifs'])

@section('content')
<section class="bg-white py-16">
  <div class="container grid md:grid-cols-3 gap-6">
    <div class="border border-neutral-200 rounded-2xl p-6">
      <h3 class="text-xl font-semibold">Séance individuelle</h3>
      <p class="mt-2 text-slate-700">Durée 60 min — Reçu disponible.</p>
      <div class="mt-4 font-bold text-2xl">$$</div>
    </div>
    <div class="border border-neutral-200 rounded-2xl p-6">
      <h3 class="text-xl font-semibold">Séance de groupe</h3>
      <p class="mt-2 text-slate-700">Écoles, résidences — Devis sur demande.</p>
      <div class="mt-4 font-bold text-2xl">Sur mesure</div>
    </div>
    <div class="border border-neutral-200 rounded-2xl p-6">
      <h3 class="text-xl font-semibold">Programme personnalisé</h3>
      <p class="mt-2 text-slate-700">Objectifs, fréquence, évaluation.</p>
      <div class="mt-4 font-bold text-2xl">Sur devis</div>
    </div>
  </div>
</section>
@endsection
