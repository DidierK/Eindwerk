@extends('layouts.app')

@section('content')
<!-- Content -->
<v-content>
	<v-container class="Container" v-cloak>
		<v-header class="PageHeader">
			<h1 class="PageHeader__title">Aanbod voor {{ $item_name }}</h1>
		</v-header>

		<!-- Sidebar -->
		<v-sidebar class="Sidebar Sidebar--left u--floatRight u--sizeFull">

			<!-- Search -->
			<v-search class="Search Search--sub-nav u--posRelative">
				<v-form>
					<input v-model="city" class="Search__field Search__field--sub-nav u--sizeFull" placeholder="Zoek in jou gemeente" v-on:keyup="sortUserItemsInItem( '{{ $item_url }}' )"></input>
					<v-button class="Search__button Search__button--sub-nav">
						<svg class="Icon Icon--search" height="18px" version="1.1" viewBox="0 0 18 18" width="18px" x="0px" y="0px">
							<path clip-rule="evenodd" d="M16.707,15.293l-1.414,1.414l-4.825-4.825C9.487,12.58,8.295,13,7,13c-3.313,0-6-2.687-6-6s2.687-6,6-6s6,2.687,6,6c0,1.295-0.42,2.487-1.118,3.468L16.707,15.293z M7,3C4.791,3,3,4.791,3,7s1.791,4,4,4s4-1.791,4-4S9.209,3,7,3z" fill-rule="evenodd"></path>
						</svg>
					</v-button>
				</v-form>
			</v-search>

			<!-- Filters -->
			<h3 class="Sidebar__title">Filter op</h3>
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
		</v-sidebar>

		<!-- Content -->
		<v-user-items-list></v-user-items-list>
		<div class="u--cf"></div>
	</v-container>
</v-content>
@endsection