<!doctype html>
<html lang="en">
<head>
    @include('layouts.partials.title-meta', ['title' => $title])

    @yield('css')

    @vite(['resources/css/landinger.css'])
</head>

<body>

    @include('layouts.partials.topbar')

    @yield('content')

    @include('layouts.partials.footer')

    @vite(['resources/js/landinger.js'])

    @yield('scripts')

</body>

</html>
