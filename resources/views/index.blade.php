@extends('layouts.app')
@section('content')
	
	<section class="hero" style="background-image: url({{ asset("images/hero.jpg") }})">
		<div class="">A hajtáplálás<br>tudománya</div>
		<img src="{{ asset('images/buy.svg') }}">
	</section>

	<section>
		<div class="container bg-blue">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</section>
	
	<section>
		<div class="container">
			<h1>Termék 1</h1>
		</div>
	</section>
	
	<section>
		<div class="container">
			<h1>Termék 2</h1>
		</div>
	</section>

	<section>
		<div class="container">
			<h1>Termék 3</h1>
		</div>
	</section>

@endsection