@extends('layouts.app')
@section('content')

	<div class="blanket">
		<img src="{{ asset("/images/header/HC_logo_png_feher.png") }}">
	</div>

	<section data-slide-duration="500" class="hero">
		<div class="container-fluid h-100 position-fixed mx-auto" style="top:0;left:0;right:0;">
			<div class="row h-100 lax" data-lax-translate-y="-1000 -500, vh 500" data-lax-anchor=".hero">
				<div class="col-10 ml-auto" style="background-image:url({{ asset("images/hero.jpg") }});background-size:contain;background-repeat: no-repeat;background-position: bottom left;">
					<div class="load-animation slideIn cta-section">
						<div data-from-direction="top" class="py-4" style="font-size:2rem;">A hajtáplálás<br>tudománya</div>
						<a href="{{ url("/buying") }}"><img data-from-direction="left" src="{{ asset('images/buy.svg') }}"></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section data-slide-duration="500" id="slogen" class="bg-light d-flex" style="height:100vh;">
		<div class="container px-0 my-auto position-relative">
			<img class="w-100 lax" data-lax-translate-y="-300 -100, vh 100" data-lax-anchor="#slogen"  src="{{ asset("images/hc_bg.svg") }}">
			<p class="text-center d-flex w-100 h-100" style="position: absolute;top:0;left:0;">
				<span class="m-auto" style="font-weight:normal;font-style:italic;font-size:33.9px;line-height: 39px;">
					{!! $page_contents["home"]["slogen"]["content"] !!}
				</span>
			</p>
		</div>
	</section>

	<section data-slide-duration="500" id="products" class="bg-light vh-100">
		<div class="container h-100 mx-auto homeProductContainer">
			<div class="row">
				<div class="col-12 vh-100">
					<div class="row h-100 align-items-center">
						<div class="col-7 offset-2 bg-white bg-white-div"></div>
						<div id="product-images" class="col-4 col-lg-3 d-flex align-items-center position-relative">
							<div class="indicator-wrapper">
								<a data-target="products" class="scroll-to-element" href=""><span data-count="0" class="indicator"></span></a>
								<a data-target="product2" class="scroll-to-element" href=""><span data-count="1" class="indicator"></span></a>
								<a data-target="product3" class="scroll-to-element" href=""><span data-count="2" class="indicator active"></span></a>
							</div>
							<div class="animImageContainer w-100">
								<div data-count="0" class="w-100 slide-image active" style="background-image: url({{ asset("images/slide_image.png") }});"></div>
								<div data-count="1" class="w-100 slide-image" style="background-image: url({{ asset("images/slide_image_extra.png") }});"></div>
								<div data-count="2" class="w-100 slide-image" style="background-image: url({{ asset("images/slide_image_men.png") }});"></div>
							</div>
						</div>
						<div id="packshots" class="col-8 col-lg-5 d-flex align-items-center">
							<div class="animImageContainer w-100 position-relative" style="padding-top:100%;">
								<div data-count="0" class="w-100 packshot active" style="background-image: url({{ asset("images/packshot.png") }});"></div>
								<div data-count="1" class="w-100 packshot" style="background-image: url({{ asset("images/packshot_extra.png") }});"></div>
								<div data-count="2" class="w-100 packshot" style="background-image: url({{ asset("images/packshot_men.png") }});"></div>
							</div>
						</div>
						<div id="descriptions" class="col-12 col-lg-4">

							<div class="products text-center text-lg-left">
								<div data-count="0" class="title active">
									<h1 class="d-block p-type">
										HairClinic
									</h1>
								</div>
								<div data-count="1" class="title">
									<h4 class="d-block p-title">
										HairClinic
									</h4>
									<h1 class="d-block p-type">
										Extra
									</h1>
								</div>
								<div data-count="2" class="title">
									<h4 class="d-block p-title">
										HairClinic
									</h4>
									<h1 class="d-block p-type">
										Men
									</h1>
								</div>
							</div>
							<div class="product-descriptions" style="padding-top: 50px;">
								<div data-count="0" class="description active">
									<p class="text text-green text-lg" style="font-style:italic;">
                                        {!! $page_contents["home"]["hc"]["content"] !!}
									</p>
									<div class="pr-5">
										<a href="{{ route("hairclinic") }}" class="cta mr-5">
											<span class="text">Ismertető</span>
											<span class="arrow">
												<img src="{{asset("images/icon-arrow-next.svg")}}">
											</span>
										</a>
									</div>
								</div>
								<div data-count="1" class="description">
									<p class="text text-green text-lg" style="font-style:italic;">
										A kovaföldet, gránátalma-kivonatot, vitaminokat, és ásványi anyagokat több órán keresztül, elnyújtva juttatja a véráramba. 
									</p>
									<div class="pr-5">
										<a href="{{ route("hairclinic_extra") }}" class="cta mr-5">
											<span class="text">Ismertető</span>
											<span class="arrow">
												<img src="{{asset("images/icon-arrow-next.svg")}}">
											</span>
										</a>
									</div>
								</div>
								<div data-count="2" class="description">
									<p class="text text-green text-lg" style="font-style:italic;">
										Hialuronsav, koffein és szabalpálma-kivonat a szép és egészséges férfihajért.
									</p>
									<div class="pr-5">
										<a href="{{ route("hairclinic_men") }}" class="cta mr-5">
											<span class="text">Ismertető</span>
											<span class="arrow">
												<img src="{{asset("images/icon-arrow-next.svg")}}">
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section data-slide-duration="500" id="product2" class="placeholder bg-light vh-100 py-5">
		<div class="container homeProductContainer">
		</div>
	</section>

	<section data-slide-duration="500" id="product3" class="placeholder bg-light py-5" style="height:150vh;">
		<div class="container homeProductContainer">
		</div>
	</section>


	<div class="loadingPage">
		<img src="{{ asset("/images/header/HC_logo_png_feher.png") }}">
	</div>

@endsection
