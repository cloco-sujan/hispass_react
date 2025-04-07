<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Meta Tags -->
    <title>{{ $meta['title'] ?? config('app.name') }}</title>
    <meta name="description" content="{{ $meta['description'] ?? 'Default description' }}">
    <meta name="keywords" content="{{ $meta['keywords'] ?? 'laravel, php' }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="home page-template page-template-front-page page-template-front-page-php page page-id-83">
    <main>
        @yield('content')
    </main>
</body>
</html>