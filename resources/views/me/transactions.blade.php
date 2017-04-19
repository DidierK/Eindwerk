@extends('layouts.app')

@section('content')
<v-tabs>
	<v-tab label="Lopend" selected>
		<v-container v-cloak>
			<v-header class="header--page">
				<h1 class="header__title inline-block">Lopende transacties</h1>
			</v-header>
			<p>U hebt geen lopende transacties.</p>
		</v-container>
	</v-tab>
	<v-tab label="Geschiedenis">
		<v-container v-cloak>
			<v-header class="header--page">
				<h1 class="header__title">Geschiedenis transacties</h1>
			</v-header>
			<p>U hebt nog geen transacties afgesloten.</p>
		</v-container>
	</v-tab>
</v-tabs>
@endsection