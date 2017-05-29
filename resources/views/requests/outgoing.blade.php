@extends('layouts.auth_area')

@section('auth_content')
<v-card class="Card">
	@if (count($requests) > 0)
	<v-ul class="RequestsList u--pn">
		@foreach($requests as $request)
		<v-li class="List__item">
		<div class="u--flex u--mb-16">
				<v-img class="UserItemImage Image Image--round Image--my-items" background="{{ url($request->thumbnail) }}"></v-img>
				<div class="u--flex u--flexDirectionColumn u--ml-16">
					<a class="Link u--linkClean" href="{{ url('user-item/' . $request->user_item_id) }}">
						<h2>{{ $request->item_name }}</h2>
					</a>
					<a class="Link Link--inverse" href="{{ url('/user/' . $request->user_id)}}">van {{ $request->user_name }}</a>
				</div>
			</div>
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
			<p>Status: {{ $request->status }}</p>
			<div class="u--clearFix"></div>
			<div>
				@if($request->status == 'Afwachten')
				<v-form action="{{ url('request/' . $request->request_id) }}" method="post">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<v-button class="Button Button--small Button--wrn u--linkClean">Verwijderen</v-button>
				</v-form>
				@else
				<v-form action="#" method="post">
					<input type="hidden" name="_method" value="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<v-button class="Button Button--small Button--grey u--linkClean">Betalen</v-button>
				</v-form>
				<v-form action="{{ url('request/' . $request->request_id) }}" method="post">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<v-button class="Button Button--small Button--wrn u--linkClean">Afbreken</v-button>
				</v-form>
				@endif	
			</div>
		</v-li>
		@endforeach
	</v-ul>
	@else
	<p>Je hebt geen uitgaande transactieverzoeken voorlopig.</p>
	@endif
</v-card>
@endsection
