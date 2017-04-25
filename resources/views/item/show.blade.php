@extends('layouts.app')

@section('content')
<v-container v-cloak>
	<v-header class="header--page" >
		<h1 class="header__title">Dakkoffer</h1>
		<p>Een dakkoffer is zeer handig om mee te nemen. Zeker wanneer u met de auto op reis gaat. Zoek een verhuurder die jou precies kan bieden wat u zoekt.</p>
	</v-header>
	@if (count($items_per_user) > 0)
	<h2>Alle verleners</h2>
	<v-ul class="list--grid list--my-items">
		@foreach ($items_per_user as $item)
		<v-li class="list-item--grid">
			<div class="list-item--info">
				<h3>Naam: <v-link link="{{ url('user/item/' . $item->id ) }}">{{ $item->name }}</v-link></h3>
			</div>
		</v-li>
		@endforeach
	</v-ul>
	@else
	<p>Er zijn voorlopig geen verhuurders voor dit materiaal. <v-link link="#">Voeg een item toe om de eerste te zijn die dit item verhuurt!</v-link></p>
	@endif
</v-container>
@endsection