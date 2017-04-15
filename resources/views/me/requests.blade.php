@extends('layouts.app')

@section('content')
<div class="profile-hero">
	<div class="container">
		<h1 class="title">Verzoeken</h1>
	</div>
</div>
<user-nav-tabs v-cloak>
	<user-nav-tab label="Inkomend" selected>
		<div class="container">
			<h1>Inkomend</h1>	
		</div>
	</user-nav-tab>
	<user-nav-tab label="Uitgaand">
		<div class="container">
			<h1>Uitgaand</h1>	
		</div>
	</user-nav-tab>
</user-nav-tabs>
@endsection