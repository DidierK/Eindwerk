@extends('layouts.app')

@section('content')
<v-container v-cloak>
	<v-header class="header--page">
		<h1 class="header__title inline-block">Alle spullen voor: {{ ucwords($category_name) }}</h1>
	</v-header>
	@foreach ($items as $item)
	<div>
	<!-- nog de image toevoegen voor dit object -->
	<v-link link="{{ url('item/' . strtolower($item->name) )}}">{{ $item->name }} </v-link>
	</div>
	@endforeach
</v-container>
@endsection