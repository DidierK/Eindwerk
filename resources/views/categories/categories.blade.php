@extends('layouts.app')

@section('content')
<v-container class="Container" v-cloak>
	<div class="Subhead u--mt-32">
		<h2 class="Subhead__heading">Categorieën</h2>
		<span></span>
	</div>
	@foreach ($categories as $category)
	<div>
		<v-link class="Link" link="{{ url('category/' . strtolower($category) ) }}">{{ $category }}</v-link>
	</div>
	@endforeach
</v-container>
@endsection