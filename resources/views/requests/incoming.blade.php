@extends('layouts.auth_area')

@section('auth_content')
<v-header class="Header Header--page">
	<v-container class="Container u--flex u--flexJustifyContentSpaceBetween u--flexWrap u--flexAlignItemsCenter" v-cloak>
		<h3 class="Header__title u--noMargin">Inkomende Verzoeken</h3>
	</v-container>
</v-header>
<v-container class="Container" v-cloak>
	<v-card class="Card">
		@if (count($requests) > 0)
		@foreach($requests as $request)
		<p><a href="#">{{ $request->user_name }}</a> wilt jou <a href="{{ url('user-item/' . $request->user_item_id) }}">{{ strtolower($request->item_name) }}</a> lenen.</p>
		@endforeach
		@else
		<p>Je hebt geen verzoeken voorlopig.</p>
		@endif
	</v-card>
</v-container>
@endsection
