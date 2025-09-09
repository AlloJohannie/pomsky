<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials.title-meta', ['title' => $title])

    @yield('css')

    @vite(['resources/css/style.css'])
</head>

<body>

    @yield('content')

    @vite(['resources/js/app.js'])

</body>

</html>