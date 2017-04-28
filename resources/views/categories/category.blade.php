@extends('layouts.app')

@section('content')
<!-- Hero -->
<v-hero class="Hero Hero--category" style="background: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url(' {{ asset('images/category-heroes/' . $category->hero) }} ');background-position: 50% 50%; background-size: cover; background-repeat: no-repeat;">
<v-container class="Container" v-cloak>

	<!-- Header -->
	<v-header class="Header Header--hero Header--dark">
		<h1 class="Header__title">{{ ucwords($category->name) }}</h1>
		<p>{{ $category->description }}</p>
	</v-header>

</v-container>
</v-hero>

<!-- Content -->
<v-container class="Container" v-cloak>
	@foreach ($items as $item)
	<div>
		<!-- nog de image toevoegen voor dit object -->
		<v-link class="Link" link="{{ url('item/' . strtolower($item->name) )}}">{{ $item->name }} </v-link>
	</div>
	@endforeach
</v-container>
@endsection