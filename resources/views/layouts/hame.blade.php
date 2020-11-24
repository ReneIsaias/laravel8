<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSRF token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Livewire') }}</title>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- script --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- font --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- livewire --}}
    @livewireStyles

</head>
<body>
    <main class="py-4">
        <div class="container">
            {{ $slot }}
        </div>
    </main>

    {{-- livewire --}}
    @livewireScripts

</body>
</html>
