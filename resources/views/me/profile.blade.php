@extends('layouts.app')

@section('content')
<v-tabs>
	<v-tab label="Mijn spullen" selected>
		<v-container v-cloak>
			<v-header class="header--page">
				<h1 class="header__title inline-block">Mijn spullen</h1>
				<v-button class="button--blue button--default button--add-items inline-block" href="{{ url('item/create') }}">Spullen toevoegen</v-button>
			</v-header>
			@if (count($user_items) > 0)
			<v-ul class="list--grid list--my-items">
				@foreach ($user_items as $item)
				<v-li class="list-item--grid">
					<div class="list-item--info">
					<v-img class="image--my-items" background="{{ $item->thumbnail }}"></v-img>
					<h3><v-link link="{{ url('item/' . $item->id) }}">{{ $item->name }}</v-link></h3>
					<span>0 Transactieverzoeken</span>
					</div>
					<div class="clearfix"></div>
					<div class="list-item--actions">
					<v-button class="button--small button--grey" href="{{ url('item/' . $item->id . '/edit') }}">Bewerk</v-button>
					<v-button class="button--small button--wrn" v-on:click="deleteItem( {{$item->id}} )">Verwijder</v-button>
					</div>
				</v-li>
				@endforeach
			</v-ul>
			@else
			<p>U hebt nog geen spullen toegevoegd. <v-link link="{{ url('item/create') }}" class="link--default">Voeg spullen toe.</v-link></p>
			@endif
		</v-container>
	</v-tab>
	<v-tab label="Instellingen">
		<v-container v-cloak>
			<v-header class="header--page">
				<h1 class="header__title">Instellingen</h1>
				<p>Bekijk of bewerk hier uw persoonlijke gegevens. Deze zijn belangrijk om u te kunnen contacteren.</p>
			</v-header>
			<v-form class="form--settings" action="{{ url('user') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!--  
					TODO: CHECK FOR EACH VALUE IF IT IS NOT EMPTY, IF IT IS EMPTY THE DATA THEN JUST LEAVE VALUE EMPTY AND IT WILL SHOW THE PLACEHOLDER
				-->
				<v-form-item>
					<v-input type="text" value="@if(!empty($user_details->name)) {{ $user_details->name }} @endif" class="input--text-default input--full-width" label="Naam" placeholder="Bv. Jan Janssens" name="name"></v-input>
				</v-form-item>
				<v-form-item>
					<v-input type="text" value="@if(!empty($user_details->email)) {{ $user_details->email }} @endif" class="input--text-default input--full-width" label="Email" placeholder="voorbeeld@email.com" name="email"></v-input>
				</v-form-item>
				<v-form-item>
					<v-input type="text" value="@if(!empty($user_details->tel)) {{ $user_details->tel }} @endif" class="input--text-default" label="Telefoonnummer (Optioneel)" placeholder="Bv. (+32) 123456789" name="tel"></v-input>
				</v-form-item>
				<v-form-item>
					<v-input type="text" value="@if(!empty($user_details->adres)) {{ $user_details->adres }} @endif" class="input--text-default input--full-width" label="Adres" placeholder="Bv. Hendrik Speecvest 46 2800 Mechelen" name="adres"></v-input>
				</v-form-item>
				<v-form-item>
					<v-input type="submit" value="Opslaan"></v-input>
				</v-form-item>
			</v-form>
		</v-container>
	</v-tab>
</v-tabs>
@endsection