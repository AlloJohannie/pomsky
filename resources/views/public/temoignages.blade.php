@extends('layouts.landing', ['title' => 'Témoignages'])

@section('content')
<section class="bg-body-bg py-16">
  <div class="container">
    <h1 class="text-4xl md:text-5xl">Recommandations d’acheteurs</h1>
    <div class="grid md:grid-cols-3 gap-6 mt-6">
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <p class="text-slate-700">“Chiot équilibré, super social, accompagnement au top.”</p>
        <div class="mt-3 text-sm text-slate-600">— Famille X</div>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <p class="text-slate-700">“La zoothérapie nous a beaucoup aidés, merci !”</p>
        <div class="mt-3 text-sm text-slate-600">— Client Y</div>
      </div>
      <div class="bg-white p-6 rounded-2xl border border-neutral-200">
        <p class="text-slate-700">“Élevage sérieux et chaleureux.”</p>
        <div class="mt-3 text-sm text-slate-600">— Famille Z</div>
      </div>
    </div>
  </div>
</section>
@endsection
