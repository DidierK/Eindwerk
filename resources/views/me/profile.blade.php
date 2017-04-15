@extends('layouts.app')

@section('content')
<v-tabs>
	<v-tab label="Mijn spullen" selected>
		<v-container>
			<v-button href="{{ url('item/create') }}">Materiaal toevoegen</v-button>
		</v-container>
	</v-tab>
	<v-tab label="Instellingen">
		<div class="container">
			<h1>Mijn instellingen</h1>
		</div>
	</v-tab>
</v-tabs>
@endsection