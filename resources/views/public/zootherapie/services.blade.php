@extends('layouts.landing', ['title' => 'Zoothérapie – Services'])

@section('content')
<section class="bg-white py-16">
  <div class="container">
    <h1 class="text-4xl md:text-5xl">Nos services de zoothérapie</h1>
    <div class="grid md:grid-cols-3 gap-6 mt-6">
      <div class="bg-body-bg p-6 rounded-2xl"><h3 class="font-semibold">Individuel</h3><p class="mt-2">Objectifs personnalisés.</p></div>
      <div class="bg-body-bg p-6 rounded-2xl"><h3 class="font-semibold">Groupe</h3><p class="mt-2">Cohésion, communication.</p></div>
      <div class="bg-body-bg p-6 rounded-2xl"><h3 class="font-semibold">Milieux scolaires / aînés</h3><p class="mt-2">Programmes adaptés.</p></div>
    </div>
  </div>
</section>
@endsection
