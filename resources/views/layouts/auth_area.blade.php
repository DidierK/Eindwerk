@extends('layouts.app')

@section('content')
<v-column class="Column Column--user-actions" v-cloak>
	@include('partials.auth_menu')
</v-column>
<v-column class="Column Column--main" v-cloak>
	@yield('auth_content')
</v-column>
@endsection