@extends('layouts.app')

@section('content')
<v-hero class="hero--category" style="background: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url(' {{ asset('images/category-heroes/' . $category->hero) }} ');background-position: 50% 50%; background-size: cover; background-repeat: no-repeat;">
<v-container v-cloak>
	<v-header class="header--hero header--dark">
		<h1 class="header__title">{{ ucwords($category->name) }}</h1>
		<p>{{ $category->description }}</p>
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