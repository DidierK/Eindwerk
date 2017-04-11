@extends('layouts.app')

@section('content')
<div class="profile-hero">
	<div class="container">
		<h1 class="title">Profiel</h1>
	</div>
</div>
<user-nav-tabs v-cloak>
	<user-nav-tab label="Mijn spullen" selected>
		<div class="container">
			<h1>Mijn spullen</h1>	
		</div>
	</user-nav-tab>
	<user-nav-tab label="Instellingen">
		<div class="container">
			<h1>Instellingen</h1>	
		</div>
	</user-nav-tab>
</user-nav-tabs>
@endsection