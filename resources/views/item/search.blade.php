@extends('layouts.app')

@section('content')
<!-- Content -->
<v-content>
	<v-container class="Container" v-cloak>
		<h1>Geen zoekresultaten...</h1>
		<p>Het item dat je zocht is niet gevonden. <a href="{{ url('contact')}}">Contacteer ons</a> om dit item toe te voegen.</p>
	</v-container>
</v-content>
@endsection