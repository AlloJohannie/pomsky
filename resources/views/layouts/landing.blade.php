<!doctype html>
<html lang="en">
<head>
    @include('layouts.partials.title-meta', ['title' => $title])

    @yield('css')

@vite(['resources/css/landinger.css', 'resources/js/landinger.js'])

</head>

<body>

    @include('layouts.partials.topbar')

    @yield('content')

    @include('layouts.partials.footer')



    @yield('scripts')

</body>

</html>
