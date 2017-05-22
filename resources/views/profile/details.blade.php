@extends('layouts.auth_area')

@section('auth_content')
	<v-header class="Header Header--page">
		<v-container class="Container u--flex u--flexJustifyContentSpaceBetween u--flexWrap u--flexAlignItemsCenter" v-cloak>
			<h3 class="Header__title u--noMargin">Gegevens</h3>
			<v-button class="Button Button--default Button--blue Button--add-items inline-block u--linkClean" href="{{ url('user/' . Auth::id() . '/edit') }}">Gegevens bewerken</v-button>
		</v-container>
	</v-header>	

	<v-container v-cloak>
	<v-card class="Card">
			<p>Uw gegevens zijn nog niet beschikbaar.</p>
		</v-card>
		</v-container>
@endsection