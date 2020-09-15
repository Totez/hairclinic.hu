@extends('layouts.app')
@section('content')

	<div class="blanket">
		<img src="{{ asset("/images/header/HC_logo_png_feher.png") }}">
	</div>

	<section id="buying">


		<div class="container">

			<div class="row vh-100">

				<div class="col-10 mx-auto">


					<div class="position-relative py-5">
						<img class="w-100" src="{{ asset("images/oval.png") }}">
						<p class="text-center d-flex w-100 h-100" style="position: absolute;top:0;left:0;">
							<span class="m-auto" style="font-size:33.9px;font-weight:normal;font-style:italic;">
								Segítünk, hogy melyik webshopban <br>
								mennyibe kerül* a neked kellő termék
							</span>
						</p>
					</div>

				</div>

				<div class="col-5 offset-7">
					<span class="small text-green">
						* Fontos tudnod, hogy az árakat tájékoztató jelleggel, automatizáltan gyűjtöttük össze neked a www.rossmann.hu és www.dm.hu weboldalokon {{ $last_updated->format("Y. m. d.") }} napon 12:00 időpontban közzétett adatok alapján. Ez nem minősül konkrét ajánlattételnek.
						Hibát észleltél? Írd meg nekünk!
					</span>
				</div>
			</div>
			<div class="row">
				<div class="col-12 my-4 mx-auto">

                    <div id="price-1" class="lazy-load-container position-relative" >
							<div class="bg-white-div h-100"></div>
							<div class="my-5 p-5 buying-content">
								<div class="row p-2">
									<div class="col-5">
										<div class="buying-image lazy-load">
											<img src="{{ asset("images/packshot.png") }}" style="width:200px;">
											<span style="font-size:2rem;">HairClinic</span>
										</div>
									</div>
									<div class="col-2">
										<h6 class="text-green mt-5 font-weight-light lazy-load">30 kapszula</h6>
									</div>
									<div class="col-5">
                                        <a target="blank" href="{{ $products["rossmann_hc_30"]["url"] }}">
                                            <div class="row border-green px-1 py-3 align-items-center my-4 hc-hover mx-auto mx-md-0 position-relative lazy-load">
                                                <div class="col-7">
                                                    <img src="{{ asset("images/logo-rossmann.png") }}">
                                                </div>
                                                <div class="col justify-content-end text-right">
                                                    <img style="width:40px;" src="{{ asset("images/sale.svg") }}">
                                                </div>
                                                <div class="col-4 justify-content-end align-items-center d-flex">
                                                    <span style="font-size:1.5rem;">{{ number_format($products["rossmann_hc_30"]["price"], 0, ",", " ") }}.-</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a target="blank" href="{{ $products["dm_hc_30"]["url"] }}">
                                            <div class="row border-green px-1 py-3 align-items-center my-4 hc-hover mx-auto mx-md-0 position-relative lazy-load">
                                                <div class="col-7">
                                                    <img src="{{ asset("images/logo-drogerie-markt.png") }}">
                                                </div>
                                                <div class="col justify-content-end text-right">
                                                    <img style="width:40px;" src="{{ asset("images/sale.svg") }}">
                                                </div>
                                                <div class="col-4 justify-content-end align-items-center d-flex">
                                                    <span style="font-size:1.5rem;">{{ number_format($products["dm_hc_30"]["price"], 0, ",", " ") }}.-</span>
                                                </div>
                                            </div>
                                        </a>
									</div>
								</div>
								<div class="row p-2">
									<div class="col-2  offset-5">
										<h6 class="text-green mt-5 font-weight-light lazy-load">90 kapszula</h6>
									</div>
									<div class="col-5">
                                        <a target="blank" href="{{ $products["rossmann_hc_90"]["url"] }}">
                                            <div class="row border-green px-1 py-3 align-items-center my-4 hc-hover mx-auto mx-md-0 position-relative lazy-load">
                                                <div class="col-7">
                                                    <img src="{{ asset("images/logo-rossmann.png") }}">
                                                </div>
                                                <div class="col justify-content-end text-right">
                                                    <img style="width:40px;" src="{{ asset("images/sale.svg") }}">
                                                </div>
                                                <div class="col-4 justify-content-end align-items-center d-flex">
                                                    <span style="font-size:1.5rem;">{{ number_format($products["rossmann_hc_90"]["price"], 0, ",", " ") }}.-</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a target="blank" href="{{ $products["dm_hc_90"]["url"] }}">
                                            <div class="row border-green px-1 py-3 align-items-center my-4 hc-hover mx-auto mx-md-0 position-relative lazy-load">
                                                <div class="col-7">
                                                    <img src="{{ asset("images/logo-drogerie-markt.png") }}">
                                                </div>
                                                <div class="col justify-content-end text-right">
                                                    <img style="width:40px;" src="{{ asset("images/sale.svg") }}">
                                                </div>
                                                <div class="col-4 justify-content-end align-items-center d-flex">
                                                    <span style="font-size:1.5rem;">{{ number_format($products["dm_hc_90"]["price"], 0, ",", " ") }}.-</span>
                                                </div>
                                            </div>
                                        </a>
									</div>
								</div>
							</div>
						</div>

                    <div id="price-2" class="lazy-load-container position-relative" >
                        <div class="bg-white-div h-100"></div>
                        <div class="my-5 p-5 buying-content">
                            <div class="row p-2">
                                <div class="col-5">
                                    <div class="buying-image lazy-load">
                                        <img src="{{ asset("images/packshot_extra.png") }}" style="width:200px;">
                                        <span style="font-size:2rem;">HairClinic</span>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="text-green mt-5 font-weight-light lazy-load">27 kapszula</h6>
                                </div>
                                <div class="col-5">
                                    <a target="blank" href="{{ $products["rossmann_hc_extra"]["url"] }}">
                                        <div class="row border-green px-1 py-3 align-items-center my-4 hc-hover mx-auto mx-md-0 position-relative lazy-load">
                                            <div class="col-7">
                                                <img src="{{ asset("images/logo-rossmann.png") }}">
                                            </div>
                                            <div class="col justify-content-end text-right">
                                                <img style="width:40px;" src="{{ asset("images/sale.svg") }}">
                                            </div>
                                            <div class="col-4 justify-content-end align-items-center d-flex">
                                                <span style="font-size:1.5rem;">{{ number_format($products["rossmann_hc_extra"]["price"], 0, ",", " ") }}.-</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a target="blank" href="{{ $products["dm_hc_extra"]["url"] }}">
                                        <div class="row border-green px-1 py-3 align-items-center my-4 hc-hover mx-auto mx-md-0 position-relative lazy-load">
                                            <div class="col-7">
                                                <img src="{{ asset("images/logo-drogerie-markt.png") }}">
                                            </div>
                                            <div class="col justify-content-end text-right">
                                                <img style="width:40px;" src="{{ asset("images/sale.svg") }}">
                                            </div>
                                            <div class="col-4 justify-content-end align-items-center d-flex">
                                                <span style="font-size:1.5rem;">{{ number_format($products["dm_hc_extra"]["price"], 0, ",", " ") }}.-</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="price-3" class="lazy-load-container position-relative" >
                        <div class="bg-white-div h-100"></div>
                        <div class="my-5 p-5 buying-content">
                            <div class="row p-2">
                                <div class="col-5">
                                    <div class="buying-image lazy-load">
                                        <img src="{{ asset("images/packshot_men.png") }}" style="width:200px;">
                                        <span style="font-size:2rem;">HairClinic</span>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h6 class="text-green mt-5 font-weight-light lazy-load">60 kapszula</h6>
                                </div>
                                <div class="col-5">
                                    <a target="blank" href="{{ $products["rossmann_hc_men"]["url"] }}">
                                        <div class="row border-green px-1 py-3 align-items-center my-4 hc-hover mx-auto mx-md-0 position-relative lazy-load">
                                            <div class="col-7">
                                                <img src="{{ asset("images/logo-rossmann.png") }}">
                                            </div>
                                            <div class="col justify-content-end text-right">
                                                <img style="width:40px;" src="{{ asset("images/sale.svg") }}">
                                            </div>
                                            <div class="col-4 justify-content-end align-items-center d-flex">
                                                <span style="font-size:1.5rem;">{{ number_format($products["rossmann_hc_men"]["price"], 0, ",", " ") }}.-</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a target="blank" href="{{ $products["dm_hc_men"]["url"] }}">
                                        <div class="row border-green px-1 py-3 align-items-center my-4 hc-hover mx-auto mx-md-0 position-relative lazy-load">
                                            <div class="col-7">
                                                <img src="{{ asset("images/logo-drogerie-markt.png") }}">
                                            </div>
                                            <div class="col justify-content-end text-right">
                                                <img style="width:40px;" src="{{ asset("images/sale.svg") }}">
                                            </div>
                                            <div class="col-4 justify-content-end align-items-center d-flex">
                                                <span style="font-size:1.5rem;">{{ number_format($products["dm_hc_men"]["price"], 0, ",", " ") }}.-</span>
                                            </div>
                                        </div>
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



@endsection
