<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        />

        <title>{{ Str::apa((isset($title) ? $title . ' | ' : '') . 'Skillbridge') }}</title>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        @endif

        <!-- Alpine JS -->
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>

        <!-- Swiper JS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </head>
    <body>
        <x-header />

        <main class="container">
            {{ $slot }}
        </main>
    </body>

    @stack('scripts')
</html>
