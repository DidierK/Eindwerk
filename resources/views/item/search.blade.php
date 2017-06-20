@extends('layouts.app')

@section('content')
<!-- Content -->
<v-content>
	<v-container class="Container" v-cloak>
		<div class="Subhead">
			<h2 class="Subhead__heading">Geen zoekresultaten...</h2>
			<span></span>
		</div>
		<p>Het item dat je zocht is niet gevonden. <a href="{{ url('contact')}}">Contacteer ons</a> om dit item toe te voegen.</p>
	</v-container>
</v-content>
@endsection