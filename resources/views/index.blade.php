@extends('layouts.app')
@section('content')
	
	<section class="hero position-fixed" style="top:0;background-image: url({{ asset("images/hero.jpg") }})">
		<div class="load-animation" style="position: absolute; left:100px; bottom:150px;width:300px;">
			<div data-from-direction="top" class="py-4" style="font-size:2rem;">A hajtáplálás<br>tudománya</div>
			<img class="mx-auto" data-from-direction="left" src="{{ asset('images/buy.svg') }}">
		</div>
	</section>

	<section class="bg-light" style="margin-top:100vh;">
		<div class="container px-0 pb-5 position-relative">
			<img class="w-100" src="{{ asset("images/hc_bg.svg") }}">
			<p class="text-center d-flex w-100 h-100" style="position: absolute;top:0;left:0;">
				<span class="m-auto" style="font-weight:normal;font-style:italic;">
					A szép és egészséges hajért fontos tudnod,<br>
					hogyan tápláld és kezeld megfelelően a hajadat
				</span>
			</p>
		</div>
	</section>
	
	<section class="bg-light vh-100 py-5">
		<div class="container d-flex h-100 mx-auto homeProductContainer">
			<div class="row m-auto">
				<div class="col-4">
					<div class="animImageContainer w-100">
						<img class="w-100 active" src="{{ asset("images/products/hairclinic_image.png") }}">
						<img class="w-100" src="{{ asset("images/products/hairclinic_image.png") }}">
						<img class="w-100" src="{{ asset("images/products/hairclinic_image.png") }}">
					</div>
				</div>
				<div class="col-4">
					<img class="w-100" src="{{ asset("images/packshot.png") }}">
				</div>
				<div class="col-4">

					<h4 class="load-animation">
						<span data-from-direction="top">
							HairClinic
						</span>
					</h4>
					<p class="text-green" style="font-style:italic;">
						Búzacsíraolajjal és<br>
						aranyköles-kivonattal a haj<br>
						táplálására a gyökereken keresztül.
					</p>
					<button>Ismertető</button>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-light vh-100 py-5">
		<div class="container d-flex h-100 mx-auto homeProductContainer">
			<div class="row m-auto">
				<div class="col-4">
					<div class="animImageContainer w-100">
						<img class="w-100" src="{{ asset("images/products/hairclinic_image.png") }}">
						<img class="w-100 active" src="{{ asset("images/products/hairclinic_image.png") }}">
						<img class="w-100" src="{{ asset("images/products/hairclinic_image.png") }}">
					</div>
				</div>
				<div class="col-4">
					<img class="w-100" src="{{ asset("images/packshot.png") }}">
				</div>
				<div class="col-4">
					<h4 class="load-animation">
						<span data-from-direction="right" style="font-size:2rem;">
							Extra
						</span>
						<span data-from-direction="top">
							HairClinic
						</span>
					</h4>
					<p class="text-green" style="font-style:italic;">
						Búzacsíraolajjal és<br>
						aranyköles-kivonattal a haj<br>
						táplálására a gyökereken keresztül.
					</p>
					<button>Ismertető</button>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-light vh-100 py-5">
		<div class="container d-flex h-100 mx-auto homeProductContainer">
			<div class="row m-auto">
				<div class="col-4">
					<div class="animImageContainer w-100">
						<img class="w-100" src="{{ asset("images/products/hairclinic_image.png") }}">
						<img class="w-100" src="{{ asset("images/products/hairclinic_image.png") }}">
						<img class="w-100 active" src="{{ asset("images/products/hairclinic_image.png") }}">
					</div>
				</div>
				<div class="col-4">
					<img class="w-100" src="{{ asset("images/packshot.png") }}">
				</div>
				<div class="col-4">
					<h4 class="load-animation">
						<span data-from-direction="right" style="font-size:2rem;">
							Men
						</span>
						<span data-from-direction="top">
							HairClinic
						</span>
					</h4>
					<p class="text-green" style="font-style:italic;">
						Búzacsíraolajjal és<br>
						aranyköles-kivonattal a haj<br>
						táplálására a gyökereken keresztül.
					</p>
					<button>Ismertető</button>
				</div>
			</div>
		</div>
	</section>




	<div class="loadingPage">
		<img src="{{ asset("/images/header/HC_logo_png_feher.png") }}">
	</div>

@endsection