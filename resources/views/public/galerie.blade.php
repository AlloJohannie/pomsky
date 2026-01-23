@extends('layouts.landing', ['title' => 'Galerie photos'])

@section('content')
@php
    // Recherche toutes les images dans public/photos (jpg, jpeg, png, webp, jfif)
    $patterns = [
        public_path('photos/*.jpg'),
        public_path('photos/*.jpeg'),
        public_path('photos/*.png'),
        public_path('photos/*.webp'),
        public_path('photos/*.jfif'),
    ];

    $files = [];
    foreach ($patterns as $p) {
        $files = array_merge($files, glob($p) ?: []);
    }

    // Enlever les doublons (même chemin)
    $files = array_values(array_unique($files));

    natsort($files); // tri naturel par nom
    $gallery = array_map('basename', $files);
@endphp

<section class="bg-white py-16 md:py-20">
  <div class="container">
    <h1 class="text-3xl md:text-4xl font-semibold text-center mb-10">Galerie photos</h1>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      @forelse($gallery as $file)
        <img
          src="{{ asset('photos/'.$file) }}"
          alt="Photo Pomsky"
          loading="lazy"
          class="w-full aspect-square object-contain bg-[#FAF9F6] rounded-xl shadow-sm"
        >
      @empty
        <p class="col-span-full text-center text-slate-600">
          Aucune photo pour l’instant – ajoutez vos images dans <code>public/photos</code>.
        </p>
      @endforelse
    </div>
  </div>
</section>
@endsection
