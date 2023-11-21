<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('metade', 'Por defecto')">
    <title>@yield('titulo')</title>
</head>
<body>
    @include('partials.nav')
    <!-- Se imprimirá el contenido variable -->
    @yield('contenido')
</body>
</html>