<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="/">
			<img src="{{ asset("images/header/HC_logo_png_feher.png") }}">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link text-dark mx-3 slide-in-text" href="{{ url('hairclinic') }}">
						<span data-from-direction="top">HairClinic</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark mx-3 slide-in-text" href="{{ url('hairclinic-extra') }}">
						<span data-from-direction="top">HairClinic<br>Extra</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark mx-3 slide-in-text" href="{{ url('hairclinic-men') }}">
						<span data-from-direction="top">HairClinic<br>Men</span>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link text-dark" href="{{ url('good-to-know') }}">Jó tudni</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="{{ url('opinions') }}">Vélemények</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto bg-white">
				<li class="nav-item">
					<a class="nav-link text-dark" href="{{ url('buying') }}">Vásárlás</a>
				</li>
			</ul>
		</div>
	</div>
</nav>