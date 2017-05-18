@extends('layouts.auth_area')

@section('auth_content')
<v-header class="Header Header--page">
	<v-container class="Container u--flex u--flexJustifyContentSpaceBetween u--flexWrap u--flexAlignItemsCenter" v-cloak>
		<h3 class="Header__title u--noMargin">Uitgaande Verzoeken</h3>
	</v-container>
</v-header>
	<v-container class="Container" v-cloak>
	<v-card class="Card">
		@if (count($requests) > 0)
		<v-ul class="List List--grid List--my-items">
			@foreach($requests as $request)
			<v-li class="List__item List__item--grid">
				<div class="List__item List__item--info">
					<v-img class="Image Image--round Image--my-items" background="{{ url($request->thumbnail) }}"></v-img>
					<p>
						Jij wilt een <a href="{{ url('user-item/' . $request->user_item_id) }}">{{ strtolower($request->item_name) }}</a> van <a href="{{ url('/users/' . $request->user_id)}}">{{ $request->user_name }}</a> lenen. 
					</p>
					<span>
					
							@php
							$lang = array();
							$lang['en'] = ['january','februari','march','april','may','june','july','august','september','october','november','december'];
							$lang['nl'] = ['januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december'];

							$converted_start_date = date('d M Y',strtotime($request->start_date));

							echo ucfirst(str_replace($lang['en'], $lang['nl'], strtolower($converted_start_date)));
							@endphp
						
						tot 
						@php 
							$converted_end_date = date('d M Y',strtotime($request->end_date));

							echo ucfirst(str_replace($lang['en'], $lang['nl'], strtolower($converted_end_date)));
							@endphp
						.
						</span>
				</div>
				<div class="u--clearFix"></div>
				<div class="List__item List__item--actions">
					<p>Status: {{ $request->status }}</p>
					<v-button class="Button Button--small Button--wrn u--linkClean">Verwijderen</v-button>
				</div>
			</v-li>
			@endforeach
		</v-ul>
		@else
		<p>Je hebt geen verzoeken voorlopig.</p>
		@endif
		</v-card>
	</v-container>
@endsection
