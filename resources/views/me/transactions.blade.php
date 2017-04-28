@extends('layouts.app')

@section('content')
<v-tabs class="Tabs">
	<v-tab class="Tab__content" label="Lopend" selected>
		<v-container class="Container" v-cloak>
			<v-header class="Header Header--page">
				<h1 class="Header__title">Lopende transacties</h1>
			</v-header>
			<p>U hebt geen lopende transacties.</p>
		</v-container>
	</v-tab>
	<v-tab class="Tab__content" label="Geschiedenis">
		<v-container class="Container" v-cloak>
			<v-header class="Header Header--page">
				<h1 class="Header__title">Geschiedenis transacties</h1>
			</v-header>
			<p>U hebt nog geen transacties afgesloten.</p>
		</v-container>
	</v-tab>
</v-tabs>
@endsection