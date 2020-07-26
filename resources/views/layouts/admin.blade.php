<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'hairclinic.hu') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

{{-- teszt --}}
<div class="position-absolute" style="left:0;top:0;background: lightgreen; width:30px;height:30px;z-index: 100;">
    <div class="d-sm-none">XS</div>
    <div class="d-none d-sm-block d-md-none">SM</div>
    <div class="d-none d-md-block d-lg-none">MD</div>
    <div class="d-none d-lg-block d-xl-none">LG</div>
    <div class="d-none d-xl-block d-xxl-none">XL</div>
    <div class="d-none d-xxl-block">XXL</div>
</div>
{{-- teszt --}}


    <div id="app" class="bg-white">
        <header>
            <form id="logout-form" action="{{ route("log-out") }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route("admin.home") }}">Dashboard</a>
            <a href="{{ route("admin.page.text.list") }}">Szövegek az oldalon</a>
            <a href="{{ route("admin.page.image.list") }}">Képek az oldalon</a>
            <a href="{{ route("admin.product.list") }}">Termékek</a>
        </header>

        <main>

            @if(Session::has("success"))
                {{ Session::get("success") }}
            @endif

            @yield('content')
        </main>

        <footer>

        </footer>
    </div>
</body>
</html>
