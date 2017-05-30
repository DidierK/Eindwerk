@extends('layouts.auth_area')

@section('auth_content')
@if (count($requests) > 0)
<div class="RequestsTable">
	<div class="RequestsTable__header u--flex u--notMobile">
		<div class="u--gr-2">
			<span class="TableHeader__title">Naam</span>
		</div>
		<div class="u--gr-2">
			<span class="TableHeader__title">Verzoeker</span>
		</div>
		<div class="u--gr-2">
			<span class="TableHeader__title">Start datum</span>
		</div>
		<div class="u--gr-2">
			<span class="TableHeader__title">Eind datum</span>
		</div>
		<div class="u--gr-2">
			<span class="TableHeader__title">Status</span>
		</div>
	</div>
	<div class="RequestsTable__row">
		@foreach($requests as $request)
		<div class="u--gr-2 u--flex u--flexAlignItemsCenter">
			<v-img class="UserItemImage Image Image--round Image--my-items" background="{{ url($request->thumbnail) }}"></v-img>
			<a class="Link u--linkClean u--ml-16" href="{{ url('user-item/' . $request->user_item_id) }}">
				<span>{{ $request->item_name }}</span>
			</a>
		</div>
		<div class="u--gr-2 RequestDetails__row">
			<span class="TableHeader__title u--mobileOnly">Verhuurder</span>
			<a class="Link u--linkClean" href="{{ url('user/' . $request->user_id) }}">
				<span>{{ $request->user_name }}</span>
			</a>
		</div>
		@php
		$lang = array();
		$lang['en'] = ['january','februari','march','april','may','june','july','august','september','october','november','december'];
		$lang['nl'] = ['januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december'];

		$converted_start_date = date('d F Y',strtotime($request->start_date));
		$converted_end_date = date('d F Y',strtotime($request->end_date));
		@endphp
		<div class="u--gr-2 RequestDetails__row">
			<span class="TableHeader__title u--mobileOnly">Start Datum</span>
			<span class="RequestDetails__text">
				@php echo ucfirst(str_replace($lang['en'], $lang['nl'], strtolower($converted_start_date))); @endphp
			</span>
		</div>
		<div class="u--gr-2 RequestDetails__row">
			<span class="TableHeader__title u--mobileOnly">Eind Datum</span>
			<span class="RequestDetails__text">
				@php echo ucfirst(str_replace($lang['en'], $lang['nl'], strtolower($converted_end_date))); @endphp
			</span>
		</div>
		<div class="u--gr-2 RequestDetails__row">
			<span class="TableHeader__title u--mobileOnly">Status</span>
			@if($request->status == 'Afwachten')
			<span>{{ $request->status }}</span>
			@else
			<span>Wachten op betaling</span>
			@endif
		</div>
		@if($request->status == 'Afwachten')
		<div class="Request__actions">
		<v-form action="{{ url('request/' . $request->request_id . '/accept') }}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<v-button class="Button Button--small Button--grey u--linkClean">&#10003;</v-button>
		</v-form>
		<v-form action="{{ url('request/' . $request->request_id) }}" method="post">
			<input type="hidden" name="_method" value="DELETE">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<v-button class="Button Button--small Button--wrn u--linkClean">&#10005;</v-button>
		</v-form>
		</div>
		@endif
		@endforeach
	</div>
</div>
@else
<p>Je hebt geen inkomende transactieverzoeken voorlopig.</p>
@endif
@endsection
