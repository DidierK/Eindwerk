@extends('layouts.app')

@section('content')
<v-tabs>
	<v-tab label="Inkomend" selected>
		<v-container v-cloak>
			<v-header class="header--page">
				<h1 class="header__title inline-block">Inkomende verzoeken</h1>
			</v-header>
			<p>U hebt geen inkomende transacties.</p>
		</v-container>
	</v-tab>
	<v-tab label="Uitgaand">
		<v-container v-cloak>
			<v-header class="header--page">
				<h1 class="header__title">Uitgaande verzoeken</h1>
			</v-header>
			<p>U hebt geen uitgaande transacties.</p>
		</v-container>
	</v-tab>
</v-tabs>
@endsection
