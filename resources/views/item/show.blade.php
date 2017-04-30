@extends('layouts.app')

@section('content')
<v-header class="Header Header--page">
	<v-container class="Container" v-cloak>
		<h2 class="Header__title">Aanbod voor {{ strtolower('Dakkoffer') }}</h2>
	</v-container>
</v-header>

<!-- Content -->
<v-container class="Container" v-cloak>

	<!-- Sidebar -->
	<div class="Sidebar Sidebar--left">
		<v-card class="Card" v-cloak>
			<h3>Zoek bij jou in de buurt</h3>
			<v-form class="Form">
				<v-form-item class="FormItem--search">
					<v-input class="Input u--borderless" placeholder="Bv. Mechelen"></v-input>
					<v-button>Zoeken</v-button>
				</v-form-item>
			</v-form>

			<!-- Filters -->
			<h3>Filter op</h3>
			<v-ul class="List">
				<v-li class="List__item">
					<label class="Control Control--radio u--block" for="newest">
						Nieuwste
						<v-input class="Input Input--radio" id="newest" type="radio" name="filter" checked></v-input>
						<span></span>
					</label>
				</v-li>
				<v-li class="List__item">
					<label class="Control Control--radio u--block" for="cheapest">
						Goedkoopste eerst
						<v-input class="Input Input--radio" id="cheapest" type="radio" name="filter"></v-input>
						<span></span>
					</label>
				</v-li>
				<v-li class="List__item">
					<label class="Control Control--radio u--block" for="most-expensive">
						Duurste eerst
						<v-input class="Input Input--radio" id="most-expensive" type="radio" name="filter"></v-input>
						<span></span>
					</label>
				</v-li>
			</v-ul>
		</v-card>
	</div>

	<!-- Content -->
	<div class="List List--user-items u--floatLeft">
		<a class="List List__item u--block" href="#">
			<v-card class="Card Card--user-item" v-cloak>
				<v-img background="{{ asset('images/background1.jpg') }}"></v-img>
				<v-footer class="Footer Footer--user-item">
					<h3>Wout Borghgraef</h3>
					<span>Tienen</span>	
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