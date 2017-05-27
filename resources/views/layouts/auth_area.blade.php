@extends('layouts.app')

@section('content')
<v-container class="Container">
<v-column class="Column Column--user-actions" v-cloak>
	@include('partials.auth_menu')
</v-column>
<v-column class="Column Column--main" v-cloak>
	<v-container class="Container">
		@yield('auth_content')
	</v-container>
</v-column>
</v-container>
@endsection