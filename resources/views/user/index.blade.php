@extends('layouts.app')

@section('content')
<div class="profile-hero">
	<div class="container">
		<h1 class="title">Profiel</h1>
	</div>
</div>
<user-nav-tabs v-cloak>
	<user-nav-tab label="Mijn spullen" selected>
		<div class="items-overview">
			<p>Tab 1</p>
		</div>
	</user-nav-tab>
	<user-nav-tab label="Instellingen">
		<div class="settings" v-cloak>
			<p>Tab 2</p>
		</div>	
	</user-nav-tab>
</user-nav-tabs>
@endsection