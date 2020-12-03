@extends('layouts.app')
@section('content')

	<div class="blanket">
		<img src="{{ asset("/images/header/HC_logo_png_feher.png") }}">
	</div>


	<section is="good-to-know">

		<div class="container">

			<div class="row">

				<div class="col-11 col-md-8 bg-white mx-auto py-5">
					<h1 class="ml-md--100 position-fixed">Hasznos</h1>

					<div class="row">

						<div class="col-12 col-md-7 offset-md-4">

							<p class="text-green py-5 text-md" style="font-style:italic;">
                                {!! $page_contents["good_to_know"]["description"]["content"] !!}
                            </p>

							@foreach($page_contents["good_to_know"]["questions"] as $question)
								<div class="hc-collapse">
									<div style="font-size:1.5rem;" data-toggle="collapse" href="#faqCollapse-{{ $loop->index }}" role="button" aria-expanded="false" aria-controls="faqCollapse-{{ $loop->index }}">
										<div class="row py-3 px-3 title">
											<div class="col-10 text-md">
												{!! $question["title"] !!}
											</div>
											<div class="col-2 text-right">
												<img src="{{ asset("images/plus.svg") }}">
											</div>
										</div>
									</div>
									<div class="collapse hc-collapse-content fadeIn" id="faqCollapse-{{ $loop->index }}">
										<div class="content m-0 py-3 px-3 text-green text-md">
											{!! $question["content"] !!}
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
