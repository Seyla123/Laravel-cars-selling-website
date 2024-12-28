<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') | {{ config('app.name', 'Car Selling Website') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    {{-- tailwind --}}
    @vite('resources/css/app.css')
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body @isset($cssClass)class="{{ $cssClass }}"@endisset>
    {{-- content render here --}}
    @yield('childContent')
</body>

</html>
