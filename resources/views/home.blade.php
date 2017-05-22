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
<section>
	<v-container class="Container">
		<h1 class="u--textCenter">Hoe het werkt</h1>
		<v-ul class="List List--how-it-works">
			<v-li>
				<h4>Selecteer</h4>
				<p>Selecteer een product dat je graag zou willen huren. Stuur een verzoeker naar de verhuurder ervan en geef hierbij aan wanneer je het nodig hebt.</p>
			</v-li>
			<v-li>
				<h4>Wordt op de hoogte gesteld</h4>
				<p>Wanneer de huurder van het product jou verzoek accepteerd, wordt je hiervan op de hoogte gebracht.</p>
			</v-li>
			<v-li>
				<h4>Betaal &amp; Bezorg</h4>
				<p>Betaal de huur van het product veilig en snel via onze website. Het product zal worden geleverd op de eerste dag van het huurcontract.</p>
			</v-li>
		</v-ul>
	</v-container>
</section>
@endsection