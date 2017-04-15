@extends('layouts.app')

@section('content')
<v-tabs>
	<v-tab label="Mijn spullen" selected>
		<div class="container">
			<h1>Mijn spullen</h1>
		</div>
	</v-tab>
	<v-tab label="Instellingen">
		<div class="container">
			<h1>Mijn instellingen</h1>
		</div>
	</v-tab>
</v-tabs>
@endsection