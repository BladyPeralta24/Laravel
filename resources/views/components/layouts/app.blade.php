<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $metaDescription ?? "Descripción por defecto" }}" />
    <title>{{ $titulo ?? 'Defecto' }}</title>
</head>
<body>
    <x-layouts.nav />
    {{ $slot }}
    {{ $suma }}
</body>
</html>