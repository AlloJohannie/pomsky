<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
<nav class="bg-white shadow">
  <div class="max-w-7xl mx-auto px-4 py-3 flex gap-6">
    <a href="{{ route('home') }}" class="font-semibold">Accueil</a>

    <div class="group relative">
      <span class="cursor-default">Élevage</span>
      <div class="absolute hidden group-hover:block bg-white shadow rounded p-2">
        <a class="block px-3 py-1" href="/elevage/presentation">Présentation</a>
        <a class="block px-3 py-1" href="/elevage/valeurs">Valeurs</a>
        <a class="block px-3 py-1" href="{{ route('dogs.femelles') }}">Femelles</a>
        <a class="block px-3 py-1" href="{{ route('dogs.males') }}">Mâles</a>
        <a class="block px-3 py-1" href="{{ route('litters.index') }}">Portées</a>
        <a class="block px-3 py-1" href="{{ route('faq') }}">FAQ</a>
      </div>
    </div>

    <div class="group relative">
      <span class="cursor-default">Zoothérapie</span>
      <div class="absolute hidden group-hover:block bg-white shadow rounded p-2">
        <a class="block px-3 py-1" href="/zootherapie/valeurs">Valeurs</a>
        <a class="block px-3 py-1" href="/zootherapie/services">Services</a>
        <a class="block px-3 py-1" href="/zootherapie/tarifs">Tarifs</a>
        <a class="block px-3 py-1" href="/zootherapie/partenaires">Partenaires</a>
      </div>
    </div>

    @auth
      <a href="{{ route('dashboard') }}">Admin</a>
    @endauth
  </div>
</nav>

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
