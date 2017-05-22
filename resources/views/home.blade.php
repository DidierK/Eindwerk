@extends('layouts.app')

@section('content')
<v-hero class="Hero Hero--front" v-cloak>
	@include('partials.header')
	<v-container class="Container">
		<div class="u--textCenter">
			<h1 class="Hero__heading">Huren op maat van jouw bestemming</h1>
			<h2 class="Hero__subheading">Ga zorgeloos op reis met onze grote aanbieding aan reismateriaal.</h2>
		</div>
		<v-search class="Search Search--main">
			<v-form action="{{ url('items/search') }}" autocomplete="off">
				<v-autocomplete-main></v-autocomplete-main>
				<v-form-item>
					<v-button class="Search__button">
					<svg height="18px" version="1.1" viewBox="0 0 18 18" width="18px" x="0px" y="0px" class="Icon Icon--search">
					<path clip-rule="evenodd" d="M16.707,15.293l-1.414,1.414l-4.825-4.825C9.487,12.58,8.295,13,7,13c-3.313,0-6-2.687-6-6s2.687-6,6-6s6,2.687,6,6c0,1.295-0.42,2.487-1.118,3.468L16.707,15.293z M7,3C4.791,3,3,4.791,3,7s1.791,4,4,4s4-1.791,4-4S9.209,3,7,3z" fill-rule="evenodd">
					</path>
					</svg>
					</v-button>
				</v-form-item>
			</v-form>
			<div class="u--cf"></div>		
		</v-search>
	</v-container>
</v-hero>
<v-box1 class="box1">
	<div class="box1-container">
		<p>Vele mensen vinden reizen te duur en zeker als je al je materiaal zelf moet kopen. TravelShare wordt een online platform dat zich zal richten op het huren en verhuren of lenen en ontlenen van reismateriaal. Zo kan je zonder veel moeite veel goedkoper op reis. Je hoeft niet meer zelf die dure tent of die dakkoffer voor je auto te kopen. Je kan hem gewoon lenen bij iemand in de buurt.
			<br><br><span style="font-style: italic">En dat allemaal op een veilige manier.</span></p>

		<a href="#" class="box1-logo"></a>
	</div>


</v-box1>
@endsection