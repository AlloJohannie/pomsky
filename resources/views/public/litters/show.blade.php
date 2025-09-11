@extends('layouts.landing', ['title' => $litter->code])

@section('content')
@include('public.partials.status-maps')
<x-hero
  title="Nos portées"
  subtitle="Portées disponibles et à venir."
  bg="{{ asset('photos/proprietaire-portee.jpg') }}"
  size="lg"
/>
<section class="bg-white py-17.5 md:py-12.5">
  
  <div class="container">
  <a href="{{ route('litters.index') }}"
     class="inline-flex items-center gap-2 rounded-2xl border border-neutral-200 px-3.5 py-2 text-sm font-medium text-dark hover:bg-neutral-50">
    Retour aux portées
  </a>
  <br><br>
    {{-- Titre + statut (même style) --}}
    <div class="flex items-center justify-between mb-6 gap-3">
      <h1 class="lg:text-5xl md:text-4xl text-3xl font-bold truncate">{{ $litter->code }}</h1>
      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm {{ $lStatusClass[$litter->status] ?? 'bg-neutral-200 text-neutral-800' }}">
        {{ $lStatusLabel[$litter->status] ?? ucfirst($litter->status) }}
      </span>
    </div>
    <div class="grid md:grid-cols-3 gap-7.5">
      <div class="md:col-span-2">

        @if($litter->description)
          <div class="bg-white rounded-2xl border border-neutral-200 p-5 mb-6">
            <h2 class="text-xl font-semibold mb-3">À propos de la portée</h2>
            <div class="prose max-w-none">{!! nl2br(e($litter->description)) !!}</div>
          </div>
        @endif

        @php $puppies = $litter->puppies ?? collect(); @endphp
        @if($puppies->count())
          <div class="bg-white rounded-2xl border border-neutral-200 p-5">
            <h2 class="text-xl font-semibold mb-4">Chiots</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-2 gap-6">
              @foreach($puppies as $puppy)
                <div class="group overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm">
                  <div class="relative">
                    <img src="{{ $puppy->photo ? asset('storage/'.$puppy->photo) : '/images/about/12.png' }}"
                         class="w-full aspect-[4/3] object-cover" alt="{{ $puppy->name ?: 'Chiot' }}">
                    <div class="absolute top-4 left-4 flex gap-2">
                      @if($puppy->sex)
                        <span class="text-xs px-2 py-1 rounded-full bg-black/70 text-white">
                          {{ $puppy->sex === 'male' ? 'Mâle' : 'Femelle' }}
                        </span>
                      @endif
                      <span class="text-xs px-2 py-1 rounded-full {{ $pStatusClass[$puppy->status] ?? 'bg-neutral-100 text-neutral-700' }}">
                        {{ $pStatusLabel[$puppy->status] ?? $puppy->status }}
                      </span>
                    </div>
                  </div>

                  <div class="p-5 space-y-2.5">
                    <div class="font-semibold text-lg">{{ $puppy->name ?: 'Chiot' }}</div>

                    <ul class="text-sm text-slate-700 space-y-1">
                      @php
                        $price = $puppy->price_cents;
                        $priceFormatted = $price !== null ? number_format($price , 2, ',', ' ') . ' $' : null;
                      @endphp
                      @if($puppy->color) <li><strong>Couleur :</strong> {{ $puppy->color }}</li> @endif
                      @if(!is_null($priceFormatted)) <li><strong>Prix :</strong> {{ $priceFormatted }}</li> @endif
                    </ul>

                    @if($puppy->description)
                      <div class="text-sm text-slate-700 leading-relaxed">{!! nl2br(e($puppy->description)) !!}</div>
                    @endif
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @else
          <div class="text-slate-600">Aucun chiot listé pour cette portée pour le moment.</div>
        @endif
      </div>

      {{-- Sidebar identique visuellement --}}
      <aside class="md:col-span-1">
        <div class="bg-white rounded-2xl border border-neutral-200 p-5">
          <h2 class="text-xl font-semibold mb-4">Parents</h2>

          <div class="flex items-center gap-4 mb-4">
            <div class="size-28 md:size-32 rounded-full overflow-hidden bg-neutral-100 ring-2 ring-neutral-200">
              <img src="{{ $litter->sire?->photo ? asset('storage/'.$litter->sire->photo) : '/images/team/5.png' }}"
                   class="w-full h-full object-cover" alt="Père: {{ $litter->sire->name ?? '-' }}">
            </div>
            <div>
              <div class="text-xs text-slate-500">Père</div>
              <div class="font-semibold text-lg">{{ $litter->sire->name ?? '-' }}</div>
              @if($litter->sire)
                <ul class="text-sm text-slate-700 space-y-0.5 mt-1">
                  @if($litter->sire->color) <li>Couleur : {{ $litter->sire->color }}</li> @endif
                  @if($litter->sire->dob) <li>Né : {{ \Illuminate\Support\Carbon::parse($litter->sire->dob)->translatedFormat('d F Y') }}</li> @endif
                  @if($litter->sire->weight_kg) <li>Poids : {{ rtrim(rtrim(number_format($litter->sire->weight_kg, 1), '0'), '.') }} kg</li> @endif
                </ul>
              @endif
            </div>
          </div>

          <div class="flex items-center gap-4">
            <div class="size-28 md:size-32 rounded-full overflow-hidden bg-neutral-100 ring-2 ring-neutral-200">
              <img src="{{ $litter->dam?->photo ? asset('storage/'.$litter->dam->photo) : '/images/team/6.png' }}"
                   class="w-full h-full object-cover" alt="Mère: {{ $litter->dam->name ?? '-' }}">
            </div>
            <div>
              <div class="text-xs text-slate-500">Mère</div>
              <div class="font-semibold text-lg">{{ $litter->dam->name ?? '-' }}</div>
              @if($litter->dam)
                <ul class="text-sm text-slate-700 space-y-0.5 mt-1">
                  @if($litter->dam->color) <li>Couleur : {{ $litter->dam->color }}</li> @endif
                  @if($litter->dam->dob) <li>Née : {{ \Illuminate\Support\Carbon::parse($litter->dam->dob)->translatedFormat('d F Y') }}</li> @endif
                  @if($litter->dam->weight_kg) <li>Poids : {{ rtrim(rtrim(number_format($litter->dam->weight_kg, 1), '0'), '.') }} kg</li> @endif
                </ul>
              @endif
            </div>
          </div>
        </div>

        <div class="bg-body-bg rounded-2xl p-5 mt-5">
          <h3 class="font-semibold mb-3">Infos portée</h3>
          <ul class="space-y-1 text-slate-700 text-sm">
            @if($litter->born_at)<li><strong>Nés le :</strong> {{ \Illuminate\Support\Carbon::parse($litter->born_at)->translatedFormat('d F Y') }}</li>@endif
            @if($litter->ready_at)<li><strong>Prêts à partir :</strong> {{ \Illuminate\Support\Carbon::parse($litter->ready_at)->translatedFormat('d F Y') }}</li>@endif
            @if(!is_null($litter->puppies_count))<li><strong>Nombre de chiots :</strong> {{ $litter->puppies_count }}</li>@endif
          </ul>

          @if(in_array($litter->status, ['available','born','pregnant','planned']))
            <div class="mt-5">
              <a href="{{ url('/#comment-reserver') }}"
                 class="block text-center rounded-2xl bg-dark text-white px-6 py-4 text-base md:text-lg hover:text-primary transition">
                Faire une demande de réservation
              </a>
            </div>
          @endif
        </div>
      </aside>
    </div>
  </div>
</section>
@endsection
