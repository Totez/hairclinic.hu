<section class="bg-light">
	<div class="container p-0" id="footer">
		<div class="row h-100 align-items-center">
			<div class="col-12 col-md-6 mx-auto">
				{{-- 0-tól indul, kezdő scale érték, 50-ig megy, vége scale érték --}}
				<nav class="lax" {{-- data-lax-translate-y="0 0, 100 200" data-lax-anchor="footer" --}}>
					<div class="row">
						<div class="col-4">
							<a class="nav-link text-dark small" href="{{ route('hairclinic') }}">Hairclinic</a>
						</div>
						<div class="col-4">
							<a class="nav-link text-dark small" href="{{ route('good_to_know') }}">Hasznos</a>
						</div>
						<div class="col-4">
							<a class="nav-link text-dark small" href="" data-toggle="modal" data-target="#contactModal">Kapcsolat</a>
						</div>
						<div class="col-4">
							<a class="nav-link text-dark small" href="{{ route('hairclinic_extra') }}">Haiclinic Extra</a>
						</div>
						<div class="col-4">
							<a class="nav-link text-dark small" href="{{ route('advice') }}">Zsidró Tamás tanácsai</a>
						</div>
						<div class="col-4">
							<a class="nav-link text-dark small" href="https://www.perrigodocs.com/privacy/en/default.aspx" target="_blank">Adatkezelési szabályzat</a>
						</div>
						<div class="col-4">
							<a class="nav-link text-dark small" href="{{ route('hairclinic_men') }}">Hairclinic Men</a>
						</div>
						<div class="col-4">
							<a class="nav-link text-dark small" href="{{ route('buy') }}">Vásárlás</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="position-absolute text-center mx-auto py-3" style="bottom:0;left:0;right:0;">
		Az étrend-kiegészítő nem helyettesíti a kiegyensúlyozott, vegyes étrendet és az egészséges életmódot.
		<br>
<<<<<<< HEAD
		A legutolsó frissítés dátuma: 2020.04.16
=======
		A legutolsó frissítés dátuma: {{ str_replace('-', '.', $products["rossmann_hc_30"]["updated_at"]->format("Y-m-d")) }}
>>>>>>> 2baca545f7aae47bab0451f5b3334a19372ed2ee
	</div>
</section>
