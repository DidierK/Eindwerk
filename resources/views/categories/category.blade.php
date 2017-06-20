@extends('layouts.app')

@section('content')
<!-- Hero -->
<v-content>
	<v-container class="Container" v-cloak>

		<!-- Header -->
		<div class="Subhead">
		<h2 class="Subhead__heading">{{ ucwords($category->name) }}</h2>
			<p>{{ $category->description }}</p>
			<span></span>
		</div>
		@foreach ($items as $item)
		<div>
			<!-- nog de image toevoegen voor dit object -->
			<v-link class="Link" link="{{ url('item/' . $item->url )}}">{{ $item->name }} </v-link>
		</div>
		@endforeach
	</v-container>
</v-content>
@endsection