@extends('layouts.landing', ['title' => 'Zoothérapie – Partenaires'])

@section('content')
<section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
  <div class="container">
    <h1 class="text-4xl md:text-5xl">Partenaires</h1>
    <p class="mt-2 text-slate-700">Réseau local : vétérinaires, éducateurs canins, fournisseurs responsables.</p>

    <div class="grid md:grid-cols-3 gap-6 mt-6">
      @foreach ([
        ['Gâteries naturelles – Exemple','https://example.com'],
        ['Clinique vétérinaire – Exemple','#'],
        ['Éducateur canin – Exemple','#'],
      ] as [$name,$link])
      <a class="block bg-white border border-neutral-200 p-6 rounded-2xl hover:bg-neutral-50" href="{{ $link }}" target="_blank" rel="noopener">
        {{ $name }}
      </a>
      @endforeach
    </div>

    <div class="mt-8 text-slate-700">
      <p>Vous souhaitez collaborer&nbsp;? <a class="underline" href="{{ url('/#contact') }}">Écrivez-nous</a>.</p>
    </div>
  </div>
</section>
@endsection
