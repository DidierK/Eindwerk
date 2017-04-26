@extends('layouts.app')

@section('content')
<v-hero class="hero--category">
<v-container v-cloak>
	<v-header class="header--hero">
		<h1 class="header__title">{{ ucwords($category_name) }}</h1>
		<p>Houdt u van skieën en gaat u binnenkort op reis naar de Alpen? Neem dan zeker eens een kijkje tussen alle winter artikelen die jou buren in de aanbieding hebben.</p>
	</v-header>
</v-container>
</v-hero>
<v-container v-cloak>
	@foreach ($items as $item)
	<div>
		<!-- nog de image toevoegen voor dit object -->
		<v-link link="{{ url('item/' . strtolower($item->name) )}}">{{ $item->name }} </v-link>
	</div>
	@endforeach
</v-container>
@endsection