@extends('layouts.auth_area')

@section('auth_content')
<v-header class="Header Header--page">
	<v-container class="Container u--flex u--flexJustifyContentSpaceBetween u--flexWrap u--flexAlignItemsCenter" v-cloak>
		<h3 class="Header__title u--noMargin">Uitgaande Verzoeken</h3>
	</v-container>
</v-header>
<v-container class="Container" v-cloak>
	<v-card class="Card">
	<p>Je hebt nog geen openstaande transacties</p>
	</v-card>
</v-container>
@endsection