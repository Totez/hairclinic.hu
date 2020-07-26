@extends('layouts.app')
@section('content')

	
	<section id="buying">
		

		<div class="container">
			
			<div class="row">
				
				<div class="col-8 mx-auto">
					

					<div class="position-relative py-5">
						<img class="w-100" src="{{ asset("images/oval.png") }}">
						<p class="text-center d-flex w-100 h-100" style="position: absolute;top:0;left:0;">
							<span class="m-auto" style="font-size:1.5rem;font-weight:normal;font-style:italic;">
								Segítünk, hogy melyik webshopban <br>
								mennyibe kerül* a neked kellő termék
							</span>
						</p>
					</div>

				</div>

				<div class="col-5 offset-7">
					<span class="small text-green">
						* Fontos tudnod, hogy az árakat tájékoztató jelleggel, automatizáltan gyűjtöttük össze neked a www.rossmann.hu és www.dm.hu weboldalokon 2020. 07. 20. napon 12:00 időpontban közzétett adatok alapján. Ez nem minősül konkrét ajánlattételnek.
						Hibát észleltél? Írd meg nekünk!
					</span>
				</div>
				
				<div class="col-12 my-4 mx-auto">
					
						
					@for($i=1;$i<=3;$i++)
						<div class="bg-white my-5 p-5">
							<div class="row p-2">
								<div class="col-4">
									<img src="{{ asset("images/packshot.png") }}" style="width:100px;">
									<span>HairClinic</span>
								</div>
								<div class="col-3">
									<h6 class="text-green mt-5 font-weight-light">27 kapszula</h6>
								</div>
								<div class="col-5">
									<div class="row border w-100 px-1 py-3 align-items-center my-3 hc-hover paroller">
										<div class="col-6">
											<img src="{{ asset("images/logo-rossmann.png") }}">
										</div>
										<div class="col-6 text-right">
											<img class="mr-2" style="width:30px;" src="{{ asset("images/sale.svg") }}">
											<span style="font-size:1.5rem;">23 390.-</span>
										</div>
									</div>
									<div class="row border w-100 px-1 py-3 align-items-center my-3 hc-hover paroller">
										<div class="col-6">
											<img src="{{ asset("images/logo-drogerie-markt.png") }}">
										</div>
										<div class="col-6 text-right">
											<img class="mr-2" style="width:30px;" src="{{ asset("images/sale.svg") }}">
											<span style="font-size:1.5rem;">23 390.-</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row p-2">
								<div class="col-3 offset-4">
									<h6 class="text-green mt-5 font-weight-light">90 kapszula</h6>
								</div>
								<div class="col-5">
									<div class="row border w-100 px-1 py-3 align-items-center my-3 hc-hover paroller">
										<div class="col-6">
											<img src="{{ asset("images/logo-rossmann.png") }}">
										</div>
										<div class="col-6 text-right">
											<img class="mr-2" style="width:30px;" src="{{ asset("images/sale.svg") }}">
											<span style="font-size:1.5rem;">23 390.-</span>
										</div>
									</div>
									<div class="row border w-100 px-1 py-3 align-items-center my-3 hc-hover paroller">
										<div class="col-6">
											<img src="{{ asset("images/logo-drogerie-markt.png") }}">
										</div>
										<div class="col-6 text-right">
											<img class="mr-2" style="width:30px;" src="{{ asset("images/sale.svg") }}">
											<span style="font-size:1.5rem;">23 390.-</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endfor


				</div>
			
			</div>

		</div>

	</section>



@endsection