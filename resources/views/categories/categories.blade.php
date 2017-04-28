@extends('layouts.app')

@section('content')
<v-container class="Container" v-cloak>
	<v-header class="Header Header--page">
		<h1 class="Header__title u--inlineBlock">Categorieën</h1>
	</v-header>
	@foreach ($categories as $category)
	<div>
	<v-link class="Link" link="{{ url('category/' . strtolower($category) ) }}">{{ $category }}</v-link>
	</div>
	@endforeach
</v-container>
@endsection