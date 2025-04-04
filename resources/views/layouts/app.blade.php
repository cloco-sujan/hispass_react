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

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body>
    {{-- <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
            </ul>
        </nav>
    </header> --}}

    <header class=" bg-[#003a8a] sticky top-0 py-2 flex  text-white flex-col ">
        <div class="mb-1 flex justify-center w-full">
            <div class="w-[1001px] flex justify-end">
                <button class=" btn bg-slate-950 rounded-2xl">X</button>
                <button class=" btn bg-slate-950 rounded-2xl">Xasdasd</button>
                <button class=" btn bg-slate-950 rounded-2xl">asdasdX</button>
            </div>
        </div>
        <div class=" border-b-1 border-blue-500 border-dashed">

        </div>
    </header>

    <div class=" bg-[#f3f0ea] flex justify-center">
        <div class=" w-[1001px] flex justify-between pt-2 pb-4 ">
            <div> logo</div>
            <div> logo</div>
        </div>

    </div>

    <main>
        @yield('content')
    </main>
    <!-- Scripts -->
    @viteReactRefresh
    @vite('resources/js/app.js')
    @yield('footer_scripts')
</body>

</html>