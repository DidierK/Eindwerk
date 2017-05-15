@extends('layouts.app')

@section('content')
<v-hero class="Hero Hero--front" v-cloak>
	@include('partials.header')
	<v-container class="Container">
		<div class="u--textCenter">
			<h1 class="Hero__heading">Travel<span>Share</span></h1>
			<h2 class="Hero__subheading">The cheapest way to discover the world</h2>
		</div>
		<v-search class="Search Search--main">
			<v-form action="{{ url('items/search') }}">
				<v-autocomplete-main></v-autocomplete-main>
				<v-form-item>
					<v-button class="Search__button Search__button--blue">Zoeken
					</v-button>
				</v-form-item>
			</v-form>
			<div class="u--cf"></div>		
		</v-search>
	</v-container>
</v-hero>
@endsection