@extends('layouts.app')

@section('content')
<div class="profile-hero">
	<div class="container">
		<h1 class="title">Profiel</h1>
		<!-- TODO: We should make a component from this page and then in this page right here in this div we should show include requests.blade.php and transactions.blade.php with ajax (?) and!
		Anyway we should always make a component of this HTML because we need to handle our tabs and we don't really want to do
		that in the global scope.
	-->
</div>
</div>
<div class="user-nav">
	<div class="container">
		<profile-nav v-on:load="showUserTab"></profile-nav>
	</div>
</div>
<div class="container">
	<!-- Aan de paragrafen gewoon ne v-show hangen. -->
	<div v-show="showMyItemsTab" class="items-overview">
		<p>U heeft nog geen eigen spullen.</p>
	</div>
	<div v-show= "showSettingsTab" class="settings" v-cloak>
		<p>Dit zijn uw instellingen.</p>
	</div>
	<p></p>
</div>
@endsection