@extends('layouts.landing', ['title' => 'Évènements publics'])

@section('content')
<section class="bg-white py-16">
  <div class="container">
    <h1 class="text-4xl md:text-5xl">Évènements publics annuels</h1>
    <p class="mt-2 text-slate-700">Venez nous rencontrer !</p>

    <div class="grid md:grid-cols-2 gap-6 mt-6">
      <div class="border border-neutral-200 rounded-2xl p-6">
        <h3 class="font-semibold">Journée portes ouvertes – Lavandes</h3>
        <p class="mt-2 text-slate-700">Démonstrations, rencontres, séances photo.</p>
        <div class="mt-3 text-sm text-slate-600">Date / Lieu à venir</div>
      </div>
      <div class="border border-neutral-200 rounded-2xl p-6">
        <h3 class="font-semibold">Atelier découverte Zoothérapie</h3>
        <p class="mt-2 text-slate-700">Présentation des objectifs et bienfaits.</p>
        <div class="mt-3 text-sm text-slate-600">Date / Lieu à venir</div>
      </div>
    </div>
  </div>
</section>
@endsection
