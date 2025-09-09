@extends('layouts.landing', ['title' => 'Le Pomsky'])

@section('content')
<section class="bg-body-bg py-16 md:py-22.5">
  <div class="container text-center">
    <h1 class="text-4xl md:text-5.5xl">Le Pomsky</h1>
    <p class="mt-2 text-slate-700">Un compagnon vif, affectueux et intelligent.</p>
  </div>
</section>

<section class="bg-white py-16">
  <div class="container grid md:grid-cols-2 gap-10 items-center">
    <div data-aos="fade-right">
      <img src="{{ asset('photos/'.(array_values(array_filter(glob(public_path('photos/*')), 'is_file')) ? basename(glob(public_path('photos/*'))[0]) : '')) }}" class="rounded-2xl w-full h-auto object-cover" alt="Pomsky">
    </div>
    <div data-aos="fade-left">
      <h2 class="text-3xl md:text-4xl">Origines & tempérament</h2>
      <p class="mt-3 text-slate-700">
        Issu du Husky sibérien et du Spitz nain, le Pomsky combine curiosité, sociabilité et intelligence.
        Il crée un lien fort avec sa famille et aime participer à la vie quotidienne.
      </p>
      <ul class="mt-4 grid sm:grid-cols-2 gap-2 text-slate-700">
        <li class="flex gap-2"><i class="iconify tabler--heart"></i> Très attaché à l’humain</li>
        <li class="flex gap-2"><i class="iconify tabler--run"></i> Besoin d’activités quotidiennes</li>
        <li class="flex gap-2"><i class="iconify tabler--ruler"></i> Taille petite à moyenne (selon lignées)</li>
        <li class="flex gap-2"><i class="iconify tabler--brush"></i> Entretien du poil régulier</li>
      </ul>
    </div>
  </div>
</section>

<section class="bg-white py-16">
  <div class="container grid md:grid-cols-3 gap-6">
    <div class="bg-body-bg p-6 rounded-2xl">
      <h3 class="font-semibold">Besoins d’exercice</h3>
      <p class="mt-2 text-slate-700">Jeux, promenades, stimulation mentale quotidienne.</p>
    </div>
    <div class="bg-body-bg p-6 rounded-2xl">
      <h3 class="font-semibold">Éducation</h3>
      <p class="mt-2 text-slate-700">Cohérence, douceur, renforcement positif.</p>
    </div>
    <div class="bg-body-bg p-6 rounded-2xl">
      <h3 class="font-semibold">Vie de famille</h3>
      <p class="mt-2 text-slate-700">Très sociable, s’épanouit auprès des humains.</p>
    </div>
  </div>
</section>

<section class="bg-white pb-16">
  <div class="container text-center">
    <a href="{{ route('litters.index') }}" class="inline-flex rounded-xl bg-dark text-white px-6 py-3 hover:text-primary transition">Voir nos portées</a>
  </div>
</section>
@endsection
