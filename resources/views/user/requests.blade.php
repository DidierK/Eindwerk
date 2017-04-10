@extends('layouts.app')

@section('content')
<div class="profile-hero">
	<div class="container">
		<h1 class="title">Verzoeken</h1>
		<!-- Put a content tag here -->
	</div>
</div>
<div class="user-nav">
	<div class="container">
		<requests-nav v-on:load="showUserTab"></requests-nav>
	</div>
</div>
<div class="container">
	<!-- Aan de paragrafen gewoon ne v-show hangen. -->
	<div v-show="showIncomingRequestsTab" class="incoming-requests">
		<p>Dit zijn al uw inkomende requests.</p>
	</div>
	<div v-show= "showOutgoingRequestsTab" class="outgoing-requests" v-cloak>
		<p>Dit zijn al uw uitgaande requests.</p>
	</div>
	<p></p>
</div>
@endsection