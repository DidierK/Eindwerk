@extends('layouts.app')

@section('content')
<!-- Tabs -->
<v-tabs class="Tabs">

	<!-- Tab: Mijn spullen -->
	<v-tab class="Tabs__content" label="Mijn spullen" selected>
		<v-container class="Container" v-cloak>

			<!-- Header -->
			<v-header class="Header Header--page">
				<h1 class="Header__title u--inlineBlock">Mijn spullen</h1>
				<v-button class="Button Button--blue Button--default Button--add-items u--inlineBlock" href="{{ url('user-item/create') }}">Spullen toevoegen</v-button>
			</v-header>

			<!-- List: Spullen -->
			@if (count($user_items) > 0)
			<v-ul class="List List--grid List--my-items">
				@foreach ($user_items as $item)
				<v-li class="List__item List__item--grid">
					<div class="List__item List__item--info">
						<v-img class="Image Image--my-items" background="{{ $item->thumbnail }}"></v-img>
						<h3>
							<v-link class="Link" link="{{ url('user-item/' . $item->id) }}">{{ $item->name }}</v-link>
						</h3>
						<span>0 Transactieverzoeken</span>
					</div>
					<div class="u--clearFix"></div>
					<div class="List__item List__item--actions">
						<v-button class="Button Button--small Button--grey" href="{{ url('user-item/' . $item->id . '/edit') }}">Bewerk</v-button>
						<v-button class="Button Button--small Button--wrn" v-on:click="deleteItem( {{$item->id}} )">Verwijder</v-button>
					</div>
				</v-li>
				@endforeach
			</v-ul>
			@else
			<p>U hebt nog geen spullen toegevoegd. <v-link link="{{ url('user/item/create') }}" class="Link Link--default">Voeg spullen toe.</v-link></p>
			@endif

		</v-container>
	</v-tab>

	<!-- Tab: Instellingen -->
	<v-tab class="Tabs__content" label="Instellingen">
		<v-container class="Container" v-cloak>

			<!-- Header -->
			<v-header class="Header Header--page">
				<h1 class="Header__title u--inlineBlock">Instellingen</h1>
				<v-button class="Button Button--blue Button--default Button--add-items u--inlineBlock" href="{{ url('user/' . Auth::id() . '/edit') }}">Profiel bewerken</v-button>
				<p>Bekijk of bewerk hier uw persoonlijke gegevens. Deze zijn belangrijk om u te kunnen contacteren.</p>
			</v-header>
			
		</v-container>
	</v-tab>

</v-tabs>
@endsection