@extends('layouts.app')

@section('content')
<!-- Hero -->
<v-container class="Container" v-cloak>

	<!-- Header -->
	<v-header class="Header Header--page">
		<h1 class="Header__title">{{ ucwords($category->name) }}</h1>
		<p>{{ $category->description }}</p>
	</v-header>

</v-container>


<!-- Content -->
<v-container class="Container" v-cloak>
	<v-card class="Card">
	@foreach ($items as $item)
	<div>
		<!-- nog de image toevoegen voor dit object -->
		<v-link class="Link" link="{{ url('item/' . $item->url )}}">{{ $item->name }} </v-link>
	</div>
	@endforeach
	</v-card>
</v-container>
@endsection