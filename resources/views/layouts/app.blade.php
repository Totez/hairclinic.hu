<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'hairclinic.hu') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body {{-- class="disable-scrolling" --}}>

	{{-- teszt --}}
		<div class="position-absolute" style="left:0;top:0;background: lightgreen; width:30px;height:30px;z-index: 99999999;">
			<div class="d-sm-none">XS</div>
			<div class="d-none d-sm-block d-md-none">SM</div>
			<div class="d-none d-md-block d-lg-none">MD</div>
			<div class="d-none d-lg-block d-xl-none">LG</div>
			<div class="d-none d-xl-block d-xxl-none">XL</div>
			<div class="d-none d-xxl-block">XXL</div>
		</div>
        <style type="text/css">
            .layouts{
                opacity: 0.1;
            }
            .layouts:nth-child(odd){
                background: yellowgreen;
            }
            .layouts:nth-child(even){
                background: #000;
            }
        </style>
        <button class="btn btn-primary position-fixed text-white lyt-btn" style="z-index: 9999999;">Layout</button>
        <div id="layout" class="container position-fixed h-100 mx-auto" style="z-index: 1000;left:0;right:0;pointer-events: none;display: none;">
            <div class="row h-100">
                <div class="layouts col-1 h-100"></div><div class="layouts col-1 h-100"></div><div class="layouts col-1 h-100"></div>
                <div class="layouts col-1 h-100"></div><div class="layouts col-1 h-100"></div><div class="layouts col-1 h-100"></div>
                <div class="layouts col-1 h-100"></div><div class="layouts col-1 h-100"></div><div class="layouts col-1 h-100"></div>
                <div class="layouts col-1 h-100"></div><div class="layouts col-1 h-100"></div><div class="layouts col-1 h-100"></div>
            </div>
        </div>
    {{-- teszt --}}


    <div id="app">
        <header>

            @include('layouts.navbar')

        </header>





        <main class="main">
            @yield('content')
        </main>

        <footer>

            @include('layouts.footer')

        </footer>
    </div>
</body>
</html>
