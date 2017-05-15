@extends('layouts.app')

@section('content')
<!-- Tabs -->
<v-column class="Column Column--user-actions">
<!-- On mobile make menu button toggle user actions -->
	<h3>MENU</h3>
	<ul class="TreeView TreeView--user-actions">
		<li><div>Profiel</div>
			<ul>
				<li><a class="u--linkClean" href="#">Mijn spullen</a></li>
				<li><a class="u--linkClean" href="#">Gegevens</a></li>
			</ul>
		</li>
		<li><div>Transacties</div>
			<ul>
				<li><a class="u--linkClean" href="#">Lopend</a></li>
				<li><a class="u--linkClean" href="#">Geschiedenis</a></li>
			</ul>
		</li>
		<li><div>Verzoeken</div>
			<ul>
				<li><a class="u--linkClean" href="#">Inkomend</a></li>
				<li><a class="u--linkClean" href="#">Uitgaand</a></li>
			</ul>
		</li>
	</ul>
</v-column>
<v-column class="Column Column--main">
	<v-banner class="Banner Banner--user-items">
		<v-container class="Container u--flex u--flexJustifyContentSpaceBetween u--flexWrap u--flexAlignItemsCenter" v-cloak>
			<h3 class="Banner__title u--noMargin">Mijn spullen</h3>
			<v-button class="Button Button--default Button--blue Button--add-items u--inlineBlock u--linkClean" href="{{ url('user-item/create') }}">Spullen toevoegen
				</v-button>
		</v-container>
	</v-banner>
	

	<!-- Tab: Mijn spullen -->


	<v-container class="Container" v-cloak>

		<!-- Header -->

		<v-card class="Card Card--my-items">
			
			<div class="u--clearFix"></div>

			<!-- List: Spullen -->
			@if (count($user_items) > 0)
			<v-ul class="List List--grid List--my-items">
				@foreach ($user_items as $item)
				<v-li class="List__item List__item--grid">
					<div class="List__item List__item--info">
						<v-img class="Image Image--round Image--my-items" background="{{ $item->thumbnail }}"></v-img>
						<h3>
							<v-link class="Link u--linkClean" link="{{ url('user-item/' . $item->id) }}">{{ $item->name }}</v-link>
						</h3>
						<span>0 Transactieverzoeken</span>
					</div>
					<div class="u--clearFix"></div>
					<div class="List__item List__item--actions">
						<v-button class="Button Button--small Button--grey u--linkClean" href="{{ url('user-item/' . $item->id . '/edit') }}">Bewerk</v-button>
						<v-button class="Button Button--small Button--wrn u--linkClean" v-on:click="deleteItem( {{$item->id}} )">Verwijder</v-button>
					</div>
				</v-li>
				@endforeach
			</v-ul>
			@else
			<p>U hebt nog geen spullen toegevoegd. <v-link link="{{ url('user-item/create') }}" class="Link Link--default">Voeg spullen toe.</v-link></p>
			@endif
		</v-card>
	</v-container>
</v-column>
@endsection