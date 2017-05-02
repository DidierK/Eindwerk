@extends('layouts.app')

@section('content')
<v-banner class="Banner Banner--user-items">
	<v-container class="Container" v-cloak>
		<h3 class="u--noMargin">Aanbod voor {{ strtolower('Dakkoffer') }}</h3>
	</v-container>
</v-banner>

<!-- Content -->
<v-container class="Container" v-cloak>

	<!-- Sidebar -->
	<div class="Sidebar Sidebar--left">

		<!-- Search -->
		<v-search class="Search Search--sub-nav u--posRelative">
			<v-form>
			<v-input class="Search__field Search__field--sub-nav u--sizeFull" placeholder="Zoek in jou gemeente"></v-input>
				<v-button class="Search__button Search__button--sub-nav">
					<svg class="Icon Icon--search" height="18px" version="1.1" viewBox="0 0 18 18" width="18px" x="0px" y="0px">
						<path clip-rule="evenodd" d="M16.707,15.293l-1.414,1.414l-4.825-4.825C9.487,12.58,8.295,13,7,13c-3.313,0-6-2.687-6-6s2.687-6,6-6s6,2.687,6,6c0,1.295-0.42,2.487-1.118,3.468L16.707,15.293z M7,3C4.791,3,3,4.791,3,7s1.791,4,4,4s4-1.791,4-4S9.209,3,7,3z" fill-rule="evenodd"></path>
					</svg>
				</v-button>
			</v-form>
		</v-search>

		<!-- Filters -->
		<h3>Filter op</h3>
		<v-ul class="List">
			<v-li class="List__item">
				<label class="Control Control--radio u--block u--textSmall" for="newest">
					Nieuwste
					<v-input class="Input Input--radio" id="newest" type="radio" name="filter" checked></v-input>
					<span></span>
				</label>
			</v-li>
			<v-li class="List__item">
				<label class="Control Control--radio u--block u--textSmall" for="cheapest">
					Goedkoopste eerst
					<v-input class="Input Input--radio" id="cheapest" type="radio" name="filter"></v-input>
					<span></span>
				</label>
			</v-li>
			<v-li class="List__item">
				<label class="Control Control--radio u--block u--textSmall" for="most-expensive">
					Duurste eerst
					<v-input class="Input Input--radio" id="most-expensive" type="radio" name="filter"></v-input>
					<span></span>
				</label>
			</v-li>
		</v-ul>
	</div>

	<!-- Content -->
	<div class="List List--user-items u--flex u--flexWrap">
		<a class="List List__item u--block" href="#">
			<v-card class="Card Card--user-item" v-cloak>
				<v-img class="Image Image--background Image--user-item" background="{{ asset('images/background1.jpg') }}"></v-img>
				<v-footer class="Footer Footer--user-item u--flex">
					<div class="Footer__item Footer__item--user-info">
						<h3 class="u--noMargin">Wout Borghgraef</h3>
						<span class="u--colorLight u--textSmall">3300 Tienen</span>	
					</div>
					<span class="u--marginLeft8px u--alignSelfCenter u--textMedium">€50.00</span>
				</v-footer>
			</v-card>
		</a>

		<a class="List List__item u--block" href="#">
			<v-card class="Card Card--user-item" v-cloak>
				<v-img class="Image Image--background Image--user-item" background="{{ asset('images/background1.jpg') }}"></v-img>
				<v-footer class="Footer Footer--user-item u--flex">
					<div class="Footer__item Footer__item--user-info">
						<h3 class="u--noMargin">Bram De Nyn</h3>
						<span class="u--colorLight u--textSmall">2800 Mechelen</span>	
					</div>
					<span class="u--marginLeft8px u--alignSelfCenter u--textMedium">€75.20</span>	
				</v-footer>
			</v-card>
		</a>

		<a class="List List__item u--block" href="#">
			<v-card class="Card Card--user-item" v-cloak>
				<v-img class="Image Image--background Image--user-item" background="{{ asset('images/background1.jpg') }}"></v-img>
				<v-footer class="Footer Footer--user-item u--flex">
					<div class="Footer__item Footer__item--user-info">
						<h3 class="u--noMargin">An De Schepper</h3>
						<span class="u--colorLight u--textSmall">3320 Hoegaarden</span>	
					</div>
					<span class="u--marginLeft8px u--alignSelfCenter u--textMedium">€79.99</span>
				</v-footer>
			</v-card>
		</a>
	</div>
	<!-- Table view
	@if (count($items_per_user) > 0)
	<v-ul class="List List--grid List--my-items">
		@foreach ($items_per_user as $item)
		<v-li class="List__item List__item--grid">
			<div class="List__item--info">
				<h3>Naam: <v-link class="Link" link="{{ url('user/item/' . $item->id ) }}">{{ $item->name }}</v-link></h3>
			</div>
		</v-li>
		@endforeach
	</v-ul>
	@else
	<p>Er zijn voorlopig geen verhuurders voor dit materiaal. <v-link class="Link" link="#">Voeg een item toe om de eerste te zijn die dit item verhuurt!</v-link></p>
	@endif
-->
</v-container>
@endsection