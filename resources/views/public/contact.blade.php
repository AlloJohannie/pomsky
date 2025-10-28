@extends('layouts.landing', ['title' => 'Contact'])

@section('content')
@php
    // Photo du bandeau (assurez-vous que le fichier existe dans public/photos)
    $bannerUrl = asset('photos/pomsky-adulte-famille-50.jpg');
@endphp

{{-- HERO / Bandeau --}}
<section class="relative lg:py-25 md:py-22.5 py-17.5">
    <div class="absolute inset-0 -z-10 bg-center bg-cover"
         style="background-image:url('{{ $bannerUrl }}');"></div>
    <div class="absolute inset-0 -z-0 bg-black/35"></div>

    <div class="container relative z-10 text-center max-w-3xl mx-auto">
        <h1 class="lg:text-5.5xl md:text-4.6xl text-4xl mb-2.5 text-white drop-shadow">
            Contact
        </h1>
        <p class="text-white/90 drop-shadow">
            Écrivez-nous pour les prochaines portées, des infos sur la race ou la zoothérapie.
        </p>
    </div>
</section>

{{-- FORMULAIRE & COORDONNÉES --}}
<section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
  <div class="container grid lg:grid-cols-2 gap-10 items-start">

    {{-- Coordonnées --}}
    <div data-aos="fade-right" data-aos-duration="500">
      <div class="bg-body-bg rounded-2xl p-6 md:p-8">
        <h2 class="text-2xl font-semibold">Nos coordonnées</h2>
        <ul class="mt-4 space-y-2 text-slate-700">
          <li>
            <span class="inline-flex items-center gap-2">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16v16H4z" opacity=".0"/><path d="M4 8l8 5 8-5"/><rect x="4" y="4" width="16" height="16" rx="2"/></svg>
              <a class="underline" href="mailto:pomskyduquebec@hotmail.com">pomskyduquebec@hotmail.com</a>
            </span>
          </li>
          <li>
            <span class="inline-flex items-center gap-2">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12a10 10 0 1 1-20 0 10 10 0 0 1 20 0z"/><path d="M16.24 7.76a6 6 0 1 0 0 8.49"/></svg>
              <a class="underline" href="#" target="_blank" rel="noopener">Instagram</a>
            </span>
          </li>
        </ul>

        <div class="mt-6 text-slate-700">
          <p class="text-sm">Nous répondons habituellement en 24–48h ouvrables.</p>
        </div>
      </div>

      {{-- Encadré FAQ (facultatif) --}}
      <div class="mt-6 bg-white border border-neutral-200 rounded-2xl p-6">
        <h3 class="font-semibold">Avant d’écrire</h3>
        <ul class="list-disc ms-5 text-slate-700 space-y-1 mt-2">
          <li>Indiquez votre ville et le meilleur moment pour vous joindre.</li>
          <li>Pour une adoption : parlez-nous de votre milieu de vie.</li>
          <li>Pour la zoothérapie : précisez le contexte (école, aînés, individuel).</li>
        </ul>
      </div>
    </div>

    {{-- Formulaire --}}
    <div data-aos="fade-left" data-aos-duration="500">
      <form action="{{ route('contact.send') }}" method="POST"
            class="bg-white border border-neutral-200 rounded-2xl p-6 md:p-8">
        @csrf

        {{-- Honeypot anti-bot --}}
        <input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden" aria-hidden="true">
        <input type="hidden" name="hp_time" value="{{ time() }}">

        @if(session('sent'))
          <div class="mb-4 rounded-xl bg-primary/30 text-dark px-4 py-3">
            Merci, votre message a été envoyé. Nous vous répondrons rapidement.
          </div>
        @endif

        <div class="grid md:grid-cols-2 gap-4">
          <div>
            <input id="name" name="name" value="{{ old('name') }}" type="text"
                   class="w-full rounded-xl border-neutral-300" placeholder="Nom" required>
            @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
          </div>

          <div>
            <input id="email" name="email" value="{{ old('email') }}" type="email"
                   class="w-full rounded-xl border-neutral-300" placeholder="Courriel" required>
            @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
          </div>

          <div class="md:col-span-2">
            <input id="phone" name="phone" value="{{ old('phone') }}" type="tel"
                   class="w-full rounded-xl border-neutral-300" placeholder="Téléphone (optionnel)">
            @error('phone') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
          </div>

          <div class="md:col-span-2">
            <textarea id="message" name="message" rows="5"
                      class="w-full rounded-xl border-neutral-300" placeholder="Votre message" required>{{ old('message') }}</textarea>
            @error('message') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
          </div>
        </div>

        <button class="mt-5 w-full rounded-2xl bg-dark text-white py-3 font-medium hover:text-primary transition"
                type="submit">Envoyer</button>
      </form>
    </div>
  </div>
</section>
@endsection
