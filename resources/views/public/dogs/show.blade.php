@extends('layouts.landing', ['title' => $dog->name])

@section('content')
@php
  $img = ($dog->photo && file_exists(public_path('storage/'.$dog->photo)))
    ? asset('storage/'.$dog->photo)
    : asset('images/logo/logo_large.jpg');
  $dob = $dog->dob ? \Illuminate\Support\Carbon::parse($dog->dob) : null;
  $age = $dob ? $dob->age : null;
@endphp

<section class="relative lg:py-20 md:py-16 py-12">
  <div class="container">
    <a href="{{ url()->previous() === route('dogs.show', $dog) ? route('dogs.index') : url()->previous() }}"
       class="inline-flex items-center gap-2 rounded-2xl border border-neutral-200 px-3.5 py-2 text-sm font-medium text-dark hover:bg-neutral-50">
      ← Retour
    </a>

    <div class="grid md:grid-cols-2 gap-y-8 mt-6">
      <div>
        <img src="{{ $img }}" alt="{{ $dog->name }}" class="w-full aspect-[1/1] object-cover rounded-2xl">
      </div>

      <div class="md:pl-8 lg:pl-10">
        <div class="flex items-center gap-3">
          <h1 class="text-3xl md:text-4xl font-bold">{{ $dog->name }}</h1>
          <span class="px-2 py-1 rounded-full text-xs
            @class([
              'bg-pink-100 text-pink-800' => $dog->sex === 'female',
              'bg-blue-100 text-blue-800' => $dog->sex === 'male',
            ])">
            {{ $dog->sex === 'female' ? 'Femelle' : 'Mâle' }}
          </span>
        </div>

        <ul class="mt-4 text-slate-700 space-y-1">
          @if($dog->size)
            <li><strong>Format :</strong>
              {{ ['standard'=>'Standard','miniature'=>'Miniature','toy'=>'Toy'][$dog->size] ?? '—' }}
            </li>
          @endif
          @if($dog->color) <li><strong>Couleur :</strong> {{ $dog->color }}</li> @endif
          @if($dob)
            <li><strong>Naissance :</strong> {{ $dob->translatedFormat('d F Y') }}
              @if(!is_null($age)) ({{ $age }} an{{ $age > 1 ? 's' : '' }}) @endif
            </li>
          @endif
          @if(!is_null($dog->weight_lb))
            <li><strong>Poids :</strong> {{ rtrim(rtrim(number_format((float)$dog->weight_lb,1,'.',''), '0'), '.') }} lb</li>
          @endif
          <li><strong>Statut :</strong>
            <span class="@class(['text-green-700'=> $dog->is_active, 'text-slate-500'=>!$dog->is_active])">
              {{ $dog->is_active ? 'Actif' : 'Retiré' }}
            </span>
          </li>
        </ul>

        @if($dog->description)
          <div class="prose max-w-none mt-5">{!! nl2br(e($dog->description)) !!}</div>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection
