@extends('layouts.app')

@section('content')
<!-- Hero -->
<v-hero class="Hero Hero--item">
	<v-container class="Container" v-cloak>

		<!-- Header -->
		<v-header class="Header Header--hero">
			<h1 class="Header__title">Dakkoffer</h1>
			<p>Als je met de auto op reis gaat is dit materiaal zeker handig. Kijk hieronder wie je kan helpen.</p>
		</v-header>
		
	</v-container>
</v-hero>

<!-- Content -->
<v-container class="Container" v-cloak>
	<h2>Aanbod</h2>

	<!-- Search -->
	<v-form class="Form">
		<v-input class="Input Input--default" placeholder="Zoek op gemeente"></v-input>
	</v-form>

	<!-- Table view -->
	@if (count($items_per_user) > 0)
	<v-ul class="List List--grid List--my-items">
		@foreach ($items_per_user as $item)
		<v-li class="List__item List__item--grid">
			<div class="List__item--info">
				<h3>Naam: <v-link class="Link" link="{{ url('user/item/' . $item->id ) }}">{{ $item->name }}</v-link></h3>
			</div>
		</v-li>
		@endforeach
	</v-ul>
	@else
	<p>Er zijn voorlopig geen verhuurders voor dit materiaal. <v-link class="Link" link="#">Voeg een item toe om de eerste te zijn die dit item verhuurt!</v-link></p>
	@endif
</v-container>
@endsection