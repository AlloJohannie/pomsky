@extends('layouts.landing', ['title' => 'Partenaires'])

@section('content')
<section class="bg-body-bg py-16">
  <div class="container">
    <h1 class="text-4xl md:text-5xl">Partenaires</h1>
    <p class="mt-2 text-slate-700">Liens externes : gâteries, vétérinaires, éducateurs, etc.</p>

    <div class="grid md:grid-cols-3 gap-6 mt-6">
      <a class="block bg-white border border-neutral-200 p-6 rounded-2xl hover:bg-neutral-50" href="https://example.com" target="_blank" rel="noopener">Gâteries naturelles — Exemple</a>
      <a class="block bg-white border border-neutral-200 p-6 rounded-2xl hover:bg-neutral-50" href="#" target="_blank" rel="noopener">Clinique vétérinaire — Exemple</a>
      <a class="block bg-white border border-neutral-200 p-6 rounded-2xl hover:bg-neutral-50" href="#" target="_blank" rel="noopener">Éducateur canin — Exemple</a>
    </div>
  </div>
</section>
@endsection
