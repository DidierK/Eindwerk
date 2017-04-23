@extends('layouts.app')

@section('content')
<v-container v-cloak>
	<v-header class="header--page">
		<h1 class="header__title inline-block">Categorieën</h1>
	</v-header>
	@foreach ($categories as $category)
	<div>
	<v-link link="{{ url('category/' . strtolower($category) ) }}">{{ $category }}</v-link>
	</div>
	@endforeach
</v-container>
@endsection