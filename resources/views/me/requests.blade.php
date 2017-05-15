@extends('layouts.app')

@section('content')
	

	<!-- Tab: Instellingen -->

	<v-container class="Container" v-cloak>
		<v-card class="Card">
			<v-card-header class="Card__header Card__header--my-items u--flexJustifyContentSpaceBetween u--flexAlignItemsCenter">
				<h1 class="Card__title u--inlineBlock">Persoonlijke gegevens</h1>
				<v-button class="Button Button--default Button--blue Button--add-items u--inlineBlock u--linkClean" href="{{ url('user/' . Auth::id() . '/edit') }}">Gegevens bewerken</v-button>
			</v-card-header>
			<p>Naam: Wout Borghgraef</p>
			<p>Email: wout.borghgraef@gmail.com</p>
			<p>Telefoon: +32 486 25 79 16</p>
			<p>Adres: Maagdenblokstraat 3, 3320 Hoegaarden</p>
		</v-card>
	</v-container>
</v-tabs>
@endsection
