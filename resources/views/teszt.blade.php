@extends('layouts.app')
@section('content')




		<div class="container">
			<div class="row" style="height:100vh">
				<div class="col-12 d-flex">
					<div class="m-auto">
						<p class="lax" data-lax-opacity="0 0, 200 1">
							I fade out as the page scrolls down and
							I'm gone when the page has scrolled 50%
							down the entire page height!
						</p>
					</div>
				</div>
			</div>
			<div id="second" class="row" style="height:100vh">
				<div class="col-12 d-flex">
					<div class="m-auto">
						<p class="lax" data-lax-opacity="0 1, 100 0" data-lax-anchor="#second">
							I fade out as the page scrolls down and
							I'm gone when the page has scrolled 50%
							down the entire page height!
						</p>
					</div>
				</div>
			</div>
			<div class="row" style="height:100vh">
				<div class="col-12 d-flex">
					<div class="m-auto">
						<div class="lax" data-lax-scale_small="0 1, 500 0" data-lax-scale_large="0 1, 1500 2">

							<span>Szekciók</span>
							<img src="http://placehold.it/100x100">

						</div>
					</div>
				</div>
			</div>
			<div class="row" style="height:100vh">
				<div class="col-12 d-flex">
					<div class="m-auto">
						<div class="lax" data-lax-scale_small="0 1, 500 0" data-lax-scale_large="0 1, 2500 2">

							<span>Szekciók</span>
							<img src="http://placehold.it/100x100">

						</div>
					</div>
				</div>
			</div>
		</div>





@endsection