<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Car Selling Website</title>
</head>

<body>
    <header>My Header</header>
    {{-- content render here --}}
    @yield('content')
    <footer>My Footer</footer>
</body>

</html>
