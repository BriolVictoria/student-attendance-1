@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>
        @if ($title)
            {{ $title }} |
        @endif {{ config('app.name') }}
    </title>
</head>


<body class="page--centered">
    <x-app.logo />
    {{ $slot }}
    <x-main-footer />
</body>

</html>
