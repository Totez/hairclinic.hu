@extends('layouts.app')
@section('content')

	<div class="blanket">
		<img src="{{ asset("/images/header/HC_logo_png_feher.png") }}">
	</div>


	<section is="good-to-know">

		<div class="container">

			<div class="row">
				
				<div class="col-11 col-md-8 bg-white mx-auto py-5">
					<h1 class="ml-md--100 position-fixed">Jó tudni</h1>

					<div class="row">
						
						<div class="col-12 col-md-7 offset-md-4">

							<p class="text-green py-5 text-lg" style="font-style:italic;">
							    A hajképző folyamat központja a fejbőr alatt található hajgyökér, amely a hajszálak növekedéséért és rögzítéséért felelős. A hajgyökeret rugalmas szövetek veszik körül (ún. kollagén-burok). A hajszálerek, amelyek a hajképzéshez szükséges tápanyagokat szállítják, e szöveteken keresztül jutnak be a hajgyökérbe. Fontos, hogy a hajgyökereknek rendelkezésükre álljanak a szép és egészséges hajszálakhoz szükséges minőségű és mennyiségű tápanyagok.
                            </p>

							@php
								$faq = [
									[
										"title" => "Zsidró Tamás mesterfodrász hajápolási tanácsai",
										"content" => '<p>Fontos, hogy mindig kímélő sampont használj a hajadra, ezzel is csökkentve a terhelését.</p><p>Mindig alaposan ki kell öblíteni a habot, nagyjából ötször annyi időt fordíts az öblítésre, mint a mosásra!</p><p>Nem szabad túl forró levegővel szárítani a hajat! Ha időd és az időjárás engedi, az a legjobb, ha magától szárad meg, törölközővel gyengéden segítve.</p><p>Számít, hogy milyen fésűt használsz. Csak jó minőségű, lekerekített végű vagy sörtéjű hajkefét használj!</p><p>Ha hosszú a hajad, sokat segíthetsz a pihentetésben azzal, ha gyakran viseled kiengedve. A hajgumik és csatok károsítják a hajszálakat.</p>'
									],
									[
										"title" => "Úgy hallottam, az aranyköles jót tesz a hajnak.",
										"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
									],
									[
										"title" => "Száraz, töredezett haj",
										"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
									],
									[
										"title" => "Hajhullás",
										"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
									],
									[
										"title" => "Zsíros haj",
										"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
									],
									[
										"title" => "Naponta 30-40 hajszálam hullik ki, ez normális?",
										"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
									],
									[
										"title" => "Ha sok vitamint fogyasztok, azzal ugye megelőzhetem a hajhullást?",
										"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
									],
									[
										"title" => "Milyen kefét, fésűt használjak, ha kímélni szeretném a hajam?",
										"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
									],
									[
										"title" => "Naponta 30-40 hajszálam hullik ki, ez normális?",
										"content" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident."
									]
								]
							@endphp

							@foreach($faq as $key => $value)
								<div class="hc-collapse">
									<div style="font-size:1.5rem;" data-toggle="collapse" href="#faqCollapse-{{ $key }}" role="button" aria-expanded="false" aria-controls="faqCollapse-{{ $key }}">
										<div class="row py-3 px-3 title">
											<div class="col-10 text-md">
												{{ $value["title"] }}
											</div>
											<div class="col-2 text-right">
												<img src="{{ asset("images/plus.svg") }}">
											</div>
										</div>
									</div>
									<div class="collapse hc-collapse-content fadeIn" id="faqCollapse-{{ $key }}">
										<div class="content m-0 py-3 px-3 text-green text-md">
											{!! $value["content"] !!}
										</div>
									</div>
								</div>
							@endforeach

						</div>

					</div>

				</div>

			</div>


		</div>


	</section>


@endsection
