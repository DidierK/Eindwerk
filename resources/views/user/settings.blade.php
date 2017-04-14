@extends('layouts.app')

@section('content')
<v-nav>
	<v-tabs>
		<v-tab link="{{ url('/user/' . Auth::id() . '/profile/items') }}">Mijn spullen</v-tab>
		<v-tab link="{{ url('/user/' . Auth::id() . '/profile/settings') }}">Instellingen</v-tab>
	</v-tabs>
</v-nav>
<div class="user-content">
	<h1>Ay!</h1>
</div>
@endsection