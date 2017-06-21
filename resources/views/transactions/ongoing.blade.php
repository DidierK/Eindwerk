@extends('layouts.auth_area')

@section('auth_content')
<v-container class="Container">
	<div class="Subhead u--mb-32">
		<h2 class="Subhead__heading">Lopende transacties</h2>
		<span></span>
	</div>
	<h3 class="h3">Gehuurde items</h3>
	@foreach ($transactions_rented as $transaction)
	<p>LOL</p>
	@endforeach
	<p>Je bent op dit moment geen items aan het huren.</p>
	<h3 class="h3">Verhuurde items</h3>
	<p>Je bent op dit moment geen items aan het verhuren.</p>
</v-container>
@endsection