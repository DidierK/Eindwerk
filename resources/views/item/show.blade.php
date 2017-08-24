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
			
			<form>
				<v-form-item class="FormItem">
					<input v-model="query.city"  class="Search__field Search__field--sub-nav u--sizeFull" placeholder="Zoek in jou gemeente" v-on:keyup="submitForm('{{ $item_url }}')" />
					<v-spinner class="Spinner--search-location" v-if="showLoadingUserItemSearch"></v-spinner>
				</v-form-item>

				<v-form-item class="FormItem">
					<label class="Sidebar__title FormItem__label">Filter op</label>
					<ul class="List">
						<li class="List__item">
							<label class="Control Control--radio u--block u--textSmall" for="newest">
								Nieuwste
								<input v-model="query.sortOn" value="newest" class="Input Input--radio" id="newest" type="radio" name="filter" checked v-on:click="submitForm('{{ $item_url }}')" />
								<span></span>
							</label>
						</li>
						<v-li class="List__item">
							<label class="Control Control--radio u--block u--textSmall" for="cheapest">
								Goedkoopste eerst
								<input v-model="query.sortOn" value="cheapest" class="Input Input--radio" id="cheapest" type="radio" name="filter" v-on:click="submitForm('{{ $item_url }}')" />
								<span></span>
							</label>
						</li>
						<li class="List__item">
							<label class="Control Control--radio u--block u--textSmall" for="most-expensive">
								Duurste eerst
								<input v-model="query.sortOn" value="mostExpensive" class="Input Input--radio" id="most-expensive" type="radio" name="filter" v-on:click="submitForm('{{ $item_url }}')">
								<span></span>
							</label>
						</li>
					</ul>
				</v-form-item>

				<v-form-item>
					<label class="Sidebar__title FormItem__label"><p>Geschikt voor</p></label>
					@foreach ($vacations as $vacation)
					<input v-model="query.vacations" type="checkbox" name="vacations[]" value="{{ $vacation->id }}" id="{{ $vacation->name }}" v-on:click="submitForm('{{ $item_url }}')"><label for="{{ $vacation->name }}" class="u--ml-16" >{{ $vacation->name }}</span><br />
					@endforeach
				</v-form-item>

			</form>

		</v-sidebar>

		<!-- Content -->
		<v-user-items-list item-url="{{ $item_url }}" ref="userItemsList"></v-user-items-list>
		<div class="u--cf"></div>
	</v-container>
</v-content>
@endsection