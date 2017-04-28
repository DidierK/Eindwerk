@extends('layouts.app')

@section('content')
<v-tabs class="Tabs">
	<v-tab class="Tab__content" label="Inkomend" selected>
		<v-container class="Container" v-cloak>
			<v-header class="Header Header--page">
				<h1 class="Header__title">Inkomende verzoeken</h1>
			</v-header>
			<p>U hebt geen inkomende transacties.</p>
		</v-container>
	</v-tab>
	<v-tab class="Tab__content" label="Uitgaand">
		<v-container class="Container" v-cloak>
			<v-header class="Header Header--page">
				<h1 class="Header__title">Uitgaande verzoeken</h1>
			</v-header>
			<p>U hebt geen uitgaande transacties.</p>
		</v-container>
	</v-tab>
</v-tabs>
@endsection
