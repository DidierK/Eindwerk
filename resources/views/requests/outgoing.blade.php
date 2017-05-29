@extends('layouts.auth_area')

@section('auth_content')
@if (count($requests) > 0)
<div class="RequestsTable">
	<div class="RequestsTable__header u--flex u--notMobile">
	<div class="u--gr-2">
			<span class="TableHeader__title">Naam</span>
		</div>
		<div class="u--gr-2">
			<span class="TableHeader__title">Status</span>
		</div>
		<div class="u--gr-2">
			<span class="TableHeader__title">Start datum</span>
		</div>
		<div class="u--gr-2">
			<span class="TableHeader__title">Eind datum</span>
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
					<span class="TableHeader__title u--mobileOnly">Status</span>
					<span>{{ $request->status }}</span>
				</div>
				@php
				$lang = array();
				$lang['en'] = ['january','februari','march','april','may','june','july','august','september','october','november','december'];
				$lang['nl'] = ['januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december'];

				$converted_start_date = date('d M Y',strtotime($request->start_date));
				$converted_end_date = date('d M Y',strtotime($request->end_date));
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
				@if($request->status == 'Afwachten')
				<v-form action="{{ url('request/' . $request->request_id) }}" method="post">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<v-button class="Button Button--white">...</v-button>
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
		@endforeach
	</div>
</div>
@else
<p>Je hebt geen uitgaande transactieverzoeken voorlopig.</p>
@endif
@endsection
