{{-- Contact modal --}}
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content bg-light p-4">
			<div class="modal-body">
				<form action="" method="">
					<p class="text-lg">Omega Pharma Hungary Kft.</p>
					<p class="my-3 text-sm text-green">
						1138 Budapest, Magyarország	<br>
						Madarász Viktor u. 47-49. 2. épület
					</p>
					{{-- <p>Írjon nekünk!</p>

					<div class="contactInput my-5">
						<span class="placeholder text-green py-2 px-3">Ön neve</span>
						<input class="form-control border-0" type="" name="name" required>
						<span class="text-sm error" style="color:#D79797;display: none;">Írja be a nevét</span>
					</div>
					<div class="contactInput my-5">
						<span class="placeholder text-green py-2 px-3">E-mail címe</span>
						<input class="form-control border-0" type="" name="email" required>
						<span class="text-sm error" style="color:#D79797;display: none;">Helytelen e-mail formátum</span>
					</div>
					<div class="contactInput my-5">
						<span class="placeholder text-green py-2 px-3">Írja meg üzenetét</span>
						<textarea class="form-control border-0" name="message" required></textarea>
						<span class="text-sm error" style="color:#D79797;display: none;">Írja meg üzenetét</span>
					</div>

					<input class="form-control btn btn-primary text-white w-50 mx-auto border-0" type="submit" name="sendMessage" id="sendMessage" value="Küldés">
					 --}}

					<div class="my-3">
						<div class="row">
							<div class="col-12">
								{{-- <div class="px-3"> --}}
									<a href="tel:+3619201570" class="text-green">+ 36 1 920 1570</a><br>
									<a target="_blank" href="www.omegapharma.hu" class="text-green">www.omegapharma.hu</a><br>
									<a href="mailto:infohungary@perrigo.com">infohungary@perrigo.com</a>
									<p style="font-size:12px;"" class="mt-3">Kérjük, ha bármely Omega Pharma Hungary Kft. által forgalmazott készítménnyel kapcsolatos mellékhatást, nemkívánatos hatást szeretne bejelenteni, illetve a készítmények alkalmazásával, minőségével kapcsolatos kérdése, észrevétele van, írjon a HU.safety@perrigo.com e-mail címre vagy hívja a <a href="tel:+3619201570">+ 36 1 920 1570</a> telefonszámot.</p>
								{{-- </div> --}}
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

{{-- cookie modal --}}
<div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="cookieModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content bg-light p-4">
			<div class="modal-body">
				<p>A Sütik fontosak egy oldal megfelelő működéséhez. Sütiket az élmény javítása érdekében használunk, hogy megjegyezzük a belépési adatokat, biztonságos belépést biztosítsunk, statisztikai adatokat gyűjtsünk az oldal optimális működéséhez, és az Ön érdeklődési körének megfelelően szabjuk testre az oldalt. Kattintson az Elfogadom és tovább gombra a sütik elfogadásához és az oldalra történő közvetlen lépéshez, vagy kattintson a További információk gombra a sütitípusok részletes leírásának megtekintéséhez és annak kiválasztásához, mely sütiket engedélyezi az oldal böngészése közben.</p>
			</div>
			<div class="row px-5">
				<div class="col-6">
					<button class="btn btn-primary text-white" data-dismiss="modal">Mégse</button>
				</div>
				<div class="col-6 text-right">
					<button class="btn btn-primary text-white cb-enable">Elfogadás</button>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- köszönő modal --}}
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content bg-light p-4">
			<div class="modal-body">
				Köszönjük a megkeresést, kollegánk hamarosan keresni fogja önt!
			</div>
		</div>
	</div>
</div>
