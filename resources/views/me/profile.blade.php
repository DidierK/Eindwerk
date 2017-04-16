@extends('layouts.app')

@section('content')
<v-tabs>
	<v-tab label="Mijn spullen" selected>
		<v-container v-cloak>
			<v-header class="header--page">
				<h1 class="header__title">Mijn spullen</h1>
			</v-header>
			<v-button href="{{ url('item/create') }}">Materiaal toevoegen</v-button>
		</v-container>
	</v-tab>
	<v-tab label="Instellingen">
		<v-container v-cloak>
			<v-header class="header--page">
				<h1 class="header__title">Instellingen</h1>
			</v-header>
			</v-container>
		</v-tab>
	</v-tabs>
	@endsection