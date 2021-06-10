<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preload" href="{{ asset('fonts/Roboto-Regular.woff') }}" as="font" crossorigin>
    <link rel="preload" href="{{ asset('fonts/Roboto-Medium.woff') }}" as="font" crossorigin>
    <link rel="preload" href="{{ asset('fonts/Roboto-Bold.woff') }}" as="font" crossorigin>
    <link rel="preload" href="{{ asset('fonts/Roboto-Black.woff') }}" as="font" crossorigin>
    <link href="{{ asset('guest/css/autorizetion.css') }}" rel="stylesheet">
</head>
<body>

    <main class="py-4">
        @yield('content')
    </main>
    
     
</body>
</html>
