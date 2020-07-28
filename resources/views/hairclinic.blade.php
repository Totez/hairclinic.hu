@extends('layouts.app')
@section('content')


	<section id="hariclinic">
		
		<div class="container-fluid">
			
			<div class="row">
				
				<div id="product-nav" class="d-none d-md-block col-4 position-fixed fixed-col-left h-100 bg-white" style="top:85px;padding-left:8.3333%;">
					<div class="row">
						<div class="col">
							<div class="row" style="margin-top:23%;" id="product-nav-content">
								<div class="col-3 my-auto">
									<nav class="nav product-submenu">
										<ul class="navbar-nav">
											<li class="nav-item">
												<a class="scroll-to-element nav-link text-dark" href="#" data-target="info">Ismertető</a>
												<a class="scroll-to-element nav-link text-dark" href="#" data-target="ingredients">Hatóanyagok</a>
												<a class="scroll-to-element nav-link text-dark" href="#" data-target="dosage">Adagolás</a>
												<a class="scroll-to-element nav-link text-dark" href="#" data-target="buying">Vásárlás</a>
											</li>
										</ul>
									</nav>
								</div>
								<div class="col-6">
									<img style="width:400px;margin-left:70px;" src="{{ asset("images/packshot.png") }}">
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-12 col-md-6 offset-md-6 py-5" id="info">
					<h1 class="hc-product-title">
						<span class="brand-name">HariClinic</span>
						<span class="product-type">Extra</span>
					</h1>
					<br>
					<img src="{{ asset('images/illustration.png') }}" style="width:50%;">
					<div class="row">
						<div class="col-12 col-md-6">
							<p class="my-5 text-green" style="font-style: italic;">
								A HairClinic® Extra tabletta a hajgyökeret olyan ásványi anyagokkal és vitaminokkal táplálja, amelyek hozzájárulnak az egészséges hajszerkezet megőrzéséhez.
								A retard filmtabletta különlegessége, hogy a benne lévő tápanyagmennyiséget több órán keresztül, elnyújtva juttatja a véráramba. Ezáltal folyamatosan ellátja a sejteket tápanyagokkal.
							</p>					
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 offset-md-6 py-5" id="ingredients">

					<h3 class="font-weight-normal py-5">Hatóanyagok</h3>
					@php
						$ingredients = [
							[
								"title" => "Kovaföld",
								"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
							],
							[
								"title" => "Gránátalma-kivonat",
								"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
							],
							[
								"title" => "Cink",
								"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
							],
							[
								"title" => "Réz",
								"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
							],
							[
								"title" => "A vitamin",
								"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
							]
						]
					@endphp

					@foreach($ingredients as $key => $value)
						<div class="row">
							<div class="col-12 col-md-9">
								<div class="hc-collapse">
									<div class="py-4 px-3" style="font-size:1.5rem;" data-toggle="collapse" href="#ingredientsCollapse-{{ $key }}" role="button" aria-expanded="false" aria-controls="ingredientsCollapse-{{ $key }}">
										<div class="row">
											<div class="col-10">
												{{ $value["title"] }}
											</div>
											<div class="col-2 text-right">
												<img src="{{ asset("images/plus.svg") }}">
											</div>
										</div>
									</div>
									<div class="collapse" id="ingredientsCollapse-{{ $key }}">
										<div class="m-0 py-3 px-3 text-green">
											{!! $value["content"] !!}
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach

				</div>
				<div class="col-12 col-md-6 offset-md-6 py-5" id="dosage">
					<div class="row">
						<div class="col-12 col-md-6">
							<p style="font-size:2rem;margin-top: 200px;margin-bottom:200px;">
								Naponta 1-2 tabletta bevétele javasolt, bő folyadékkal, egészben lenyelve.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="buying" class="bg-white">
			<div class="container">
				<div class="row py-5">
					<div class="col-12 col-md-6 offset-md-6">
						<div class="row small text-green">
							<div class="col-1">
								<img class="inline-block" src="{{ asset("images/icon-buy.svg") }}">
							</div>
							<div class="col">
								<span class="inline-block" style="width:200px;">Egy kattintás, és megvásárolhatod <br> a kedvenc online drogériádban</span>
							</div>
						</div>

{{-- 						<p class="dm">Rossmann hc_extra_27 ár: {{ $price['rossmann']['hc_extra_27'] ?? '' }}</p>
						<p class="dm">Rossmann hc_men_60 ár: {{ $price['rossmann']['hc_men_60'] ?? '' }}</p>
						<p class="dm">Dm hc_extra_27 ár: {{ $price['dm']['hc_extra_27'] ?? '' }}</p>
						<p class="dm">Dm hc_men_60 ár: {!! $price['dm']['hc_men_60'] ?? '' !!}</p> --}}


						<h6 class="text-green mt-5 font-weight-light">30 kapszula</h6>
						<div class="row border w-75 px-1 py-3 align-items-center my-3 hc-hover mx-auto mx-md-0 position-relative">
							<div class="col-6">
								<img src="{{ asset("images/logo-rossmann.png") }}">
							</div>
							<div class="col-6 justify-content-end align-items-center d-flex">
								<img class="mr-2" style="width:30px;" src="{{ asset("images/sale.svg") }}">
								<span style="font-size:1.5rem;">{{ number_format($price['rossmann']['hc_30'][0], 0, ",", " ") }}.-</span>
							</div>
							@isset($price['rossmann']['hc_30'][1])
								<span class="position-absolute text-green" style="bottom:0px;right:1rem;font-size:0.55rem;">Utolsó frissítés: {{ $price['rossmann']['hc_30'][1]->format("Y-m-d") }}</span>
							@endisset
						</div>
						<div class="row border w-75 px-1 py-3 align-items-center my-3 hc-hover mx-auto mx-md-0 position-relative">
							<div class="col-6">
								<img src="{{ asset("images/logo-drogerie-markt.png") }}">
							</div>
							<div class="col-6 justify-content-end align-items-center d-flex">
								<img class="mr-2" style="width:30px;" src="{{ asset("images/sale.svg") }}">
								<span style="font-size:1.5rem;">{{ number_format($price['dm']['hc_30'][0], 0, ",", " ") }}.-</span>
							</div>
							@isset($price['dm']['hc_30'][1])
								<span class="position-absolute text-green" style="bottom:0px;right:1rem;font-size:0.55rem;">Utolsó frissítés: {{ $price['dm']['hc_30'][1]->format("Y-m-d") }}</span>
							@endisset
						</div>

						<h6 class="text-green mt-5 font-weight-light">90 kapszula</h6>
						<div class="row border w-75 px-1 py-3 align-items-center my-3 hc-hover mx-auto mx-md-0 position-relative">
							<div class="col-6">
								<img src="{{ asset("images/logo-rossmann.png") }}">
							</div>
							<div class="col-6 justify-content-end align-items-center d-flex">
								<img class="mr-2" style="width:30px;" src="{{ asset("images/sale.svg") }}">
								<span style="font-size:1.5rem;">{{ number_format($price['rossmann']['hc_90'][0], 0, ",", " ") }}.-</span>

							</div>
							@isset($price['rossmann']['hc_90'][1])
								<span class="position-absolute text-green" style="bottom:0px;right:1rem;font-size:0.55rem;">Utolsó frissítés: {{ $price['rossmann']['hc_90'][1]->format("Y-m-d") }}</span>
							@endisset
						</div>
						<div class="row border w-75 px-1 py-3 align-items-center my-3 hc-hover mx-auto mx-md-0 position-relative">
							<div class="col-6">
								<img src="{{ asset("images/logo-drogerie-markt.png") }}">
							</div>
							<div class="col-6 justify-content-end align-items-center d-flex">
								<img class="mr-2" style="width:30px;" src="{{ asset("images/sale.svg") }}">
								<span style="font-size:1.5rem;">{{ number_format($price['dm']['hc_90'][0], 0, ",", " ") }}.-</span>
							</div>
							@isset($price['dm']['hc_90'][1])
								<span class="position-absolute text-green" style="bottom:0px;right:1rem;font-size:0.55rem;">Utolsó frissítés: {{ $price['dm']['hc_90'][1]->format("Y-m-d") }}</span>
							@endisset
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>



@endsection
