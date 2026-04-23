@props([
    'title',
])

    <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css'])
        <title>{{ $title }} | {{ config('app.name') }}</title>
    </head>
    <body class="layout">
    <main class="page-main">
        {{ $slot }}
    </main>


    <x-main-navigation/>
    <x-main-footer/>
    </body>
</html>
