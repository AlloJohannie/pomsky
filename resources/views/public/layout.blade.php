<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Accueil')</title>
  @vite(['resources/css/landinger.css', 'resources/js/landinger.js'])
</head>
<body class="antialiased">
  {{-- Header Landinger avec id="navbar" --}}
  @include('public.partials.title-meta')
{{-- @include('public.partials.topbar') --}}
  <main>
    @yield('content')
  </main>

  @include('public.partials.footer')
</body>
</html>
