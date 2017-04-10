@extends('layouts.app')

@section('content')
<div class="profile-hero">
	<div class="container">
		<h1 class="title">Transacties</h1>
		<!-- Put a content tag here -->
	</div>
</div>
<div class="user-nav">
	<div class="container">
		<transactions-nav v-on:load="showUserTab"></transactions-nav>	
	</div>
</div>
<div class="container">
	<!-- Aan de paragrafen gewoon ne v-show hangen. -->
	<div v-show="showOnGoingTransactionsTab" class="ongoing-transactions">
		<p>Dit zijn uw lopende transacties.</p>
	</div>
	<div v-show= "showTransactionsHistoryTab" class="history-transactions" v-cloak>
		<p>Dit is een geschiedenis van uw transacties.</p>
	</div>
	<p></p>
</div>
@endsection