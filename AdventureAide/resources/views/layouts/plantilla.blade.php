<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Agregar los estilos de tailwind --}}
    @vite('resources/css/app.css')
    {{-- Agregar los scripts de tailwind --}}
    @vite('resources/js/app.js')

    @yield('styles')

    <title>@yield('title-page')</title>
</head>

<body>

    {{-- Contenedor del head --}}

    <head>
        @yield('head')
    </head>


    {{-- Contenedor del body --}}
    <main>
        @yield('body')
    </main>

    {{-- Contenedor del footer --}}
    <footer>
        @yield('footer')
    </footer>

</body>

</html>
