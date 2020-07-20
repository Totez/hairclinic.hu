<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'dfp.hu') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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

            @include('layouts.navbar')
            
        </header>

        <main>
            
            @yield('content')

        </main>

        <footer>
        
            @include('layouts.footer')

        </footer>
    </div>
</body>
</html>
