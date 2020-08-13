<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'hairclinic.hu') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/admin.js') }}" defer></script> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>


    <div id="app" class="bg-white">
        <header>
            <form id="logout-form" action="{{ route("log-out") }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route("admin.page.text.list") }}">Szövegek az oldalon</a>
            <a href="{{ route("admin.page.image.list") }}">Képek az oldalon</a>
            <a href="{{ route("admin.product.list") }}">Termékek</a>
        </header>

        <main>

            @if(Session::has("success"))
                <p class="alert alert-success">{{ Session::get("success") }}</p>
            @endif

            @yield('content')
        </main>

        <footer>

        </footer>
    </div>
</body>
</html>
