<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top p-0">
	<div class="container-fluid p-0 bg-light">
		<a class="navbar-brand logo" href="{{ url('/') }}" style="padding-left:3rem;width:143px;">
			<img src="{{ asset("images/header/HC_logo_png_feher.png") }}" style="width:143px;">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse align-items-start position-relative" id="navbarSupportedContent">

			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link text-dark load-animation fadeIn" href="{{ url('hairclinic') }}">
						<span style="font-weight:500;font-size:14px;">HairClinic</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark load-animation fadeIn" href="{{ url('hairclinic-extra') }}">
						<span style="font-weight:500;font-size:14px;">HairClinic<br>Extra</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark load-animation fadeIn" href="{{ url('hairclinic-men') }}">
						<span style="font-weight:500;font-size:14px;">HairClinic<br>Men</span>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link text-dark load-animation fadeIn" href="{{ url('good-to-know') }}">
						<span style="font-weight: 300;font-size:14px;">Jó tudni</span>
					</a>
				</li>
{{-- 				<li class="nav-item">
					<a class="nav-link text-dark load-animation fadeIn" href="{{ url('opinions') }}">
						<span style="font-weight: 300;font-size:14px;">Vélemények</span>
					</a>
				</li> --}}
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="bg-white nav-link text-dark widthIn justify-content-center load-animation" href="{{ url('buying') }}">
						<span class="load-animation">
							<span class="load-animation">Vásárlás</span>
							<img class="mx-3 load-animation" src="{{ asset("images/icon-buy.svg") }}" style="margin-top:-5px;">
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>