@extends('layouts.app')

@section('content')
<v-hero class="Hero Hero--front" v-cloak>
	@include('partials.header')
	<v-container class="Container">
		<div class="u--textCenter">
			<h1 class="Hero__heading">Huren op maat van jou bestemming</h1> 
			<h2 class="Hero__subheading">Zoek naar alle dingen die jij nog mist voor een perfecte vakantie. <a href="#">Hier</a> leggen we uit hoe het werkt.</h2>
		</div>
		<v-search class="Search Search--main">
			<v-form>
				<v-form-item>
					<v-input class="Search__field" name="item" placeholder="Wat zoek je?"></v-input>
				</v-form-item>
				<v-form-item>	
					<v-input class="Search__field" name="location" placeholder="Jou gemeente..."></v-input>
				</v-form-item>
				<v-form-item>
					<v-button class="Search__button Search__button--blue">Zoeken</v-button>
				</v-form-item>
			</v-form>
			<div class="u--cf"></div>		
		</v-search>
	</v-container>
</v-hero>
@endsection