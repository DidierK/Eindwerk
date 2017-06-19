@extends('layouts.auth_area')

@section('content')
<v-content>
	<v-container class="Container">
		<p>Hier komen de details van de request en de user en de user item. Hier komt ook een textarea dat een email zal verzenden
			naar de verhuurder waarin je kan afspreken hoe en wanneer je dingen gaat ophalen/afleveren. Bij het klikken van "Betaal en Verzend" wordt je naar het betaalscherm eigenlijk gebracht. (En anders gewoon naar de transactions/ongoing route redirecten).
		</p>
	</v-container>
</v-content>
@endsection
