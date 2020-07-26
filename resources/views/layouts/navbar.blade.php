<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top p-0">
	<div class="container-fluid p-0">
		<a class="navbar-brand p-0 m-0" href="{{ url('/') }}">
			<img src="{{ asset("images/header/HC_logo_png_feher.png") }}">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse align-items-start" id="navbarSupportedContent">

			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link text-dark mx-3 load-animation" href="{{ url('hairclinic') }}">
						<span data-from-direction="top">HairClinic</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark mx-3 load-animation" href="{{ url('hairclinic-extra') }}">
						<span data-from-direction="top">HairClinic<br>Extra</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark mx-3 load-animation" href="{{ url('hairclinic-men') }}">
						<span data-from-direction="top">HairClinic<br>Men</span>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link text-dark load-animation" href="{{ url('good-to-know') }}">
						<span data-from-direction="top">Jó tudni</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark load-animation" href="{{ url('opinions') }}">
						<span data-from-direction="top">Vélemények</span>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto bg-white">
				<li class="nav-item">
					<a class="nav-link text-dark load-animation justify-content-center" href="{{ url('buying') }}">
						<span data-from-direction="top">
							<span>Vásárlás</span>
							<img class="mx-3" src="{{ asset("images/icon-buy.svg") }}" style="margin-top:-5px;">
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>