@extends('layouts.app')

@section('content')
<v-hero class="Hero Hero--front" v-cloak>
	@include('partials.header')
	<v-container class="Container">
		<div class="u--textCenter">
			<h1 class="Hero__heading">Goedkoper op reis met TravelShare</h1>
			<h2 class="Hero__subheading">Zoek en bekijk ons groot aanbod aan reismateriaal.</h2>
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
<section class="Section Section--how-it-works">
	<v-container class="Container" v-cloak>
		<div class="Subhead u--mb-32">
			<h2 class="Subhead__heading">Hoe het werkt</h2>
			<span></span>
		</div>

		<v-ul class="List List--how-it-works">
			<v-li>
				<div class="ImageContainer">
					<img src="{{ url('images/select.svg')}}" />
				</div>
				<h4>Zoek &amp; Kies </h4>
				<p>Selecteer een product dat je graag zou willen huren. Stuur een verzoeker naar de verhuurder ervan en geef hierbij aan wanneer je het nodig hebt.</p>
			</v-li>
			<v-li>
				<div class="ImageContainer" style="margin-bottom: 81px">
				<img src="{{ url('images/mail.svg')}}" />
				</div>
				<h4>Blijf op de hoogte</h4>
				<p>Wanneer de huurder van het product jouw verzoek accepteerd, wordt je hiervan op de hoogte gebracht.</p>
			</v-li>
			<v-li>
				<div class="ImageContainer">
					<img src="{{ url('images/transport.svg')}}" />
				</div>
				<h4>Betaal &amp; Ontvang</h4>
				<p>Betaal de huur van het product veilig en snel via onze website. Ga dan het product afhalen bij de verhuurder.</p>
			</v-li>
		</v-ul>
	</v-container>
</section>
<section class="Section Section--team">
	<v-container class="Container" v-cloak>
		<div class="Subhead u--mb-32">
			<h2 class="Subhead__heading">Ontmoet het team</h2>
			<span></span>
		</div>
		<v-ul class="List List--team">
			<v-li>
				<div class="ImageContainer">
					<img class="Image Image--round" src="{{ url('images/wout.jpg')}}" />
				</div>
				<h4>Wout Borghgraef</h4>
				<p>Back-end developer</p>
			</v-li>
			<v-li >
				<div class="ImageContainer">
					<img class="Image Image--round" src="{{ url('images/didier.png')}}" />
				</div>
				<h4>Didier Kerinckx</h4>
				<p>Allround developer</p>
			</v-li>
			<v-li>
				<div class="ImageContainer">
					<img class="Image Image--round" src="{{ url('images/bram.png')}}" />
				</div>
				<h4>Bram De Nyn</h4>
				<p>Design and front-end development</p>
			</v-li>
		</v-ul>
	</v-container>
</section>
@endsection