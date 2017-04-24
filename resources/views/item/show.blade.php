@extends('layouts.app')

@section('content')
<v-container v-cloak>
	<v-header class="header--page" >
		<h1 class="header__title">Dakkoffer</h1>
		<p>Een dakkoffer is zeer handig om mee te nemen. Zeker wanneer u met de auto op reis gaat. Zoek een verhuurder die jou precies kan bieden wat u zoekt.</p>
	</v-header>
	<v-ul class="list--grid list--my-items">
		<v-li class="list-item--grid">
			<div class="list-item--info">
			<h3><v-link link="{{ url('user/item/1') }}">Wout Borghgraef</v-link></h3>
				<span>Locatie: Tienen</span>
				<span>Prijs: €50,00</span>
			</div>
		</v-li>
	</v-ul>
</v-container>
@endsection