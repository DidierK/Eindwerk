@extends('layouts.app')

@section('content')
<v-content>
	<v-container class="Container">
		<div class="Subhead">
			<h2 class="Subhead__heading">Gebruiksvoorwaarden</h2>
			<span></span>
		</div>
		<div class="Disclaimer">
			<p>Bij TravelShare zijn we op missie het lenen van reisspullen aangenaam te maken voor iedereen. Wij streven dan ook naar het ontwikkelen van een zo veilig mogelijke omgeving om dit te doen. Jullie medewerking is wat TravelShare een uniek platform maakt. Echter zal niet altijd alles feilloos verlopen maar TravelShare wil hierbij helpen.</p>

			<h3 class="h3">TravelShare verzekering</h3>
			<p>Om gedekt te zijn tegen schade kan je als verhuurder je items laten verzekeren. Deze verzekering zal geldig zijn voor 1 huuperiode. Wanneer je item tijdens die huurperiode beschadigt raakt ben je dus verzekerd. Je hoeft hierbij ook je verzekering niet zelf te betalen, deze zal automatisch worden afgehouden (10%) van het totale huurbedrag voor die periode.</p>

			<h3 class="h3">Beschadiging</h3>
			<p>Bij beschadiging zijn er twee opties:</p>
			<ol type="a">
				<li>Het item is in een staat waarin het repareerbaar is.</li>
				<li>De schade is te groot waardoor het item niet kan hersteld worden.</li>
			</ol>
			<p>Indien het item dus nog kan gerepareerd worden zal dit ook gebeuren. De verhuurder zal het item in deze staat terugkrijgen. Indien het item niet gerepareerd kan worden zal er een plaatsvervangend item met dezelfde waarde worden voorzien. Deze waarde zal de dagwaarde (waarvoor 2dehands.be wordt geraadpleegd) minus de restwaarde zijn. Dit wordt ook weer vastgesteld door de verzekeringsmaatschappij.

			<h3 class="h3">Verlies of diefstal</h3>
			<p>In dit geval zullen de kosten voor een vervangend product worden doorgerekend aan de huurder. Deze kosten hangen af van de oorspronkelijke staat van het item.
			</p>
			<h3 class="h3">Schade melden</h3>
			<p>Wij raden gebruikers van TravelShare om zoveel mogelijk zaken onder elkaar op te lossen. Dit is het gemakkelijkste. Indien dit onmogelijk is en je toch beroep wilt doen op de verzekering dan kan je ons altijd <a href="{{ url('contact') }}">contacteren</a>. Heb je foto's? Zelfs beter! Stuur ze in dit geval door naar ons e-mailadres <a href="mailto:travelshare@gmail.com">travelshare@gmail.com</a>. Deze zullen door de verzekeringsmaatschappij waarmee we samenwerken worden bekeken of ze in aanmerking komen voor de verzekering.
			</p>

		</div>
	</v-container>
</v-content>
@endsection