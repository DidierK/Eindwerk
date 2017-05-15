@extends('layouts.app')

@section('content')
<!-- Tabs -->
<v-tabs class="Tabs">

	<!-- Tab: Mijn spullen -->
	<v-tab class="Tabs__content" label="Mijn spullen" selected>
		<v-container class="Container" v-cloak>

			<!-- Header -->
			
			<v-card class="Card Card--my-items">
				<v-card-header class="Card__header Card__header--my-items u--flexJustifyContentSpaceBetween u--flexAlignItemsCenter">
					<h1 class="Card__title u--inlineBlock">Mijn spullen</h1>
					<v-button class="Button Button--default Button--blue Button--add-items u--inlineBlock u--linkClean" href="{{ url('user-item/create') }}">Spullen toevoegen
					</v-button>
				</v-card-header>
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
	</v-tab>

	<!-- Tab: Instellingen -->
	<v-tab class="Tabs__content" label="Instellingen">
		<v-container class="Container" v-cloak>
			<v-card class="Card">
				<v-card-header class="Card__header Card__header--my-items u--flexJustifyContentSpaceBetween u--flexAlignItemsCenter">
					<h1 class="Card__title u--inlineBlock">Persoonlijke gegevens</h1>
					<v-button class="Button Button--default Button--blue Button--add-items u--inlineBlock u--linkClean" href="{{ url('user/' . Auth::id() . '/edit') }}">Gegevens bewerken</v-button>
				</v-card-header>
				<p>Naam: Wout Borghgraef</p>
				<p>Email: wout.borghgraef@gmail.com</p>
				<p>Telefoon: +32 486 25 79 16</p>
				<p>Adres: Maagdenblokstraat 3, 3320 Hoegaarden</p>
			</v-card>
		</v-container>
	</v-tab>

</v-tabs>
@endsection