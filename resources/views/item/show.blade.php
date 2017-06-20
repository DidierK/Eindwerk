@extends('layouts.app')

@section('content')
<!-- Content -->
<v-content>
	<v-container class="Container" v-cloak>
	
		<div class="Subhead">
			<h2 class="Subhead__heading">Aanbod voor {{ $item_name }}</h2>
			<span></span>
		</div>


		<!-- Sidebar -->
		<v-sidebar class="Sidebar Sidebar--left u--floatRight u--sizeFull">

			<!-- Search -->
			<v-search class="Search Search--sub-nav u--posRelative">
				<v-form>
					<input v-model="query.city" class="Search__field Search__field--sub-nav u--sizeFull" placeholder="Zoek in jou gemeente" v-on:keyup="sortUserItemsByCity( '{{ $item_url }}' )"></input>
					<v-spinner class="Spinner--search-location" v-if="showLoadingUserItemSearch"></v-spinner>
				</v-form>
			</v-search>

			<!-- Filters -->
			<h3 class="Sidebar__title">Filter op</h3>
			<v-ul class="List">
				<v-li class="List__item">
					<label class="Control Control--radio u--block u--textSmall" for="newest">
						Nieuwste
						<input v-model="query.sortOn" value="newest" class="Input Input--radio" id="newest" type="radio" name="filter" checked>
						<span></span>
					</label>
				</v-li>
				<v-li class="List__item">
					<label class="Control Control--radio u--block u--textSmall" for="cheapest">
						Goedkoopste eerst
						<input v-model="query.sortOn" value="cheapest" class="Input Input--radio" id="cheapest" type="radio" name="filter">
						<span></span>
					</label>
				</v-li>
				<v-li class="List__item">
					<label class="Control Control--radio u--block u--textSmall" for="most-expensive">
						Duurste eerst
						<input v-model="query.sortOn" value="mostExpensive" class="Input Input--radio" id="most-expensive" type="radio" name="filter">
						<span></span>
					</label>
				</v-li>
			</v-ul>
		</v-sidebar>

		<!-- Content -->
		<v-user-items-list item-url="{{ $item_url }}" ref="userItemsList"></v-user-items-list>
		<div class="u--cf"></div>
	</v-container>
</v-content>
@endsection