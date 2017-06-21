@extends('layouts.app')

@section('content')
<v-content>
	<v-container class="Container">
		<div class="Subhead">
			<h2 class="Subhead__heading">Gebruiksvoorwaarden</h2>
			<span></span>
		</div>
		<div class="Disclaimer">
		<p>Bij TravelShare zijn we op missie het lenen van reisspullen aangenaam te maken voor iedereen. Wij streven dan ook naar het ontwikkelen van een zo veilig mogelijke omgeving om dit te doen. Jullie medewerking is wat TravelShare een uniek platform maakt. Echter weten we dat er veel gevaar komt kijken bij het lenen van spullen. Zelfs al doe je het per ongeluk, soms gaan spullen kapot. Daarom is er voor elke transactie die op onze website gebeurd een "Travelshare garantie".</p>

		<h3 class="h3">TravelShare garantie</h3>
		<p>De huurder is verbonden aan onderstaande voorwaarden vanaf het moment dat men over het item beschikt. Vanaf dan zal de huurder aansprakelijk kunnen worden gesteld bij beschadiging, diefstal of verlies.</p>

		<h3 class="h3">Beschadiging</h3>
		<p>Bij beschadiging van het item zal worden gekeken hoe groot de schade bedraagt. Indien de schade zodanig groot is dat het item onherstelbaar is zullen alle kosten worden doorgerekend aan de huurder. Indien het item wel kan hersteld worden rekenen we enkel de herstellingskosten door aan de huurder.
		</p>

		<h3 class="h3">Verlies of Diefstal</h3>
		<p>In dit geval zullen de kosten voor een vervangend product worden doorgerekend aan de huurder. Deze kosten hangen af van de oorspronkelijke staat van het item.
		</p>
		<h3 class="h3">Schade melden</h3>
		<p>Het is voor ons gemakkelijker dat alles kan worden opgelost tussen de verhuurder en de huurder zelf. Indien dit echter niet het geval is kan je ons altijd <a href="{{ url('contact') }}">contacteren</a>. Heb je foto's? Zelfs beter! Stuur ze in dit geval door naar ons e-mailadres <a href="mailto:travelshare@gmail.com">travelshare@gmail.com</a>.
		</p>

		</div>
	</v-container>
</v-content>
@endsection