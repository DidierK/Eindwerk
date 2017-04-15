@extends('layouts.app')

@section('content')
<div class="profile-hero">
	<div class="container">
		<h1 class="title">Transacties</h1>
	</div>
</div>
<user-nav-tabs v-cloak>
	<user-nav-tab label="Lopend" selected>
		<div class="container">
			<h1>Lopende transacties</h1>	
		</div>
	</user-nav-tab>
	<user-nav-tab label="Geschiedenis">
		<div class="container">
			<h1>Geschiedenis</h1>	
		</div>
	</user-nav-tab>
</user-nav-tabs>
@endsection