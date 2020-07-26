@extends('layouts.app')
@section('content')


	<section is="good-to-know">


		<div class="container">

			<div class="row">

				<div class="col-8 bg-white mx-auto py-5">
					<h1 style="margin-left:-100px;">Jó tudni</h1>

					<div class="row">

						<div class="col-7 offset-4">

							<p class="text-green py-5" style="font-style:italic;">
							    {{ $pageTexts["goodtoknow.first"]->text }}
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
									<div class="py-4 px-3" style="font-size:1.5rem;" data-toggle="collapse" href="#faqCollapse-{{ $key }}" role="button" aria-expanded="false" aria-controls="faqCollapse-{{ $key }}">
										<div class="row">
											<div class="col-10">
												{{ $value["title"] }}
											</div>
											<div class="col-2 text-right">
												<img src="{{ asset("images/plus.svg") }}">
											</div>
										</div>
									</div>
									<div class="collapse" id="faqCollapse-{{ $key }}">
										<div class="m-0 py-3 px-3 text-green">
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
