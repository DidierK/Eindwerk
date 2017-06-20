@extends('layouts.app')

@section('content')
@include('partials.auth_menu')
<v-content>
	<div class="AuthContent">
		<v-container class="Container">
			@yield('auth_content')
		</v-container>
	</div>
</v-content>
@endsection