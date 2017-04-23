@extends('layouts.app')

@section('content')
<v-container v-cloak>
	<v-header class="header--page">
		<h1 class="header__title inline-block">Alle spullen voor: {{ ucwords($category_name) }}</h1>
	</v-header>
</v-container>
@endsection