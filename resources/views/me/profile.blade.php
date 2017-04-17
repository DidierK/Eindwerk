@extends('layouts.app')

@section('content')
<v-tabs>
	<v-tab label="Mijn spullen" selected>
		<v-container v-cloak>
			<v-header class="header--page">
				<h1 class="header__title inline-block">Mijn spullen</h1>
				<v-button class="button--blue button--default button--add-items" href="{{ url('item/create') }}">Spullen toevoegen</v-button>
			</v-header>
			<!-- TODO: Just do a blade if statement to check if their are items to show, otherwise show this -->
			<p>U hebt nog geen spullen toegevoegd. <v-link link="{{ url('item/create') }}" class="link--default">Voeg spullen toe.</v-link></p>
		</v-container>
	</v-tab>
	<v-tab label="Instellingen">
		<v-container v-cloak>
			<v-header class="header--page">
				<h1 class="header__title">Instellingen</h1>
				<p>Bekijk of bewerk hier jou persoonlijke gegevens. Deze zijn belangrijk om jou te kunnen contacteren.</p>
			</v-header>
			<v-form class="form--settings">
			<!-- TODO: We should get the user data and fill all the user data we have in the "values". -->
			<v-form-item>
				<v-input type="text" value="Wout Borghgraef" class="input--text-default input--full-width" label="Naam" placeholder="Bv. Jan Janssens"></v-input>
			</v-form-item>
			<v-form-item>
				<v-input type="text" value="wout.borghgraef@gmail.com" class="input--text-default input--full-width" label="Email" placeholder="voorbeeld@email.com"></v-input>
			</v-form-item>
			<v-form-item>
				<v-input type="text" value="" class="input--text-default" label="Telefoonnummer (Optioneel)" placeholder="Bv. (+32) 123456789"></v-input>
			</v-form-item>
			<v-form-item>
				<v-input type="text" value="" class="input--text-default input--full-width" label="Adres" placeholder="Bv. Hendrik Speecvest 46 2800 Mechelen"></v-input>
			</v-form-item>
			<v-form-item>
				<v-input type="submit" value="Opslaan"></v-input>
			</v-form-item>
			</v-form>
		</v-container>
	</v-tab>
</v-tabs>
@endsection