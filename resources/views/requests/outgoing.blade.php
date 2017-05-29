@extends('layouts.auth_area')

@section('auth_content')
<div class="Subhead u--flex u--flexJustifyContentSpaceBetween u--flexWrap u--flexAlignItemsCenter">
	<h2 clas="Subhead__heading">Uitgaande verzoeken</h2>
</div>
	@if (count($requests) > 0)
	<v-ul class="RequestsList u--pn">
		@foreach($requests as $request)
		<v-li class="List__item">
		<v-card class="Card">
			<div class="u--flex u--flexJustifyContentSpaceBetween u--mb-16">
				<div class="u--flex">
					<v-img class="UserItemImage Image Image--round Image--my-items" background="{{ url($request->thumbnail) }}"></v-img>
					<div class="u--flex u--flexDirectionColumn u--ml-16">
						<a class="Link u--linkClean" href="{{ url('user-item/' . $request->user_item_id) }}">
							<h3>{{ $request->item_name }}</h3>
						</a>
						<a class="Link Link--inverse" href="{{ url('/user/' . $request->user_id)}}">
							<span>van {{ $request->user_name }}</span>
						</a>
					</div>
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
			</div>
			@php
			$lang = array();
			$lang['en'] = ['january','februari','march','april','may','june','july','august','september','october','november','december'];
			$lang['nl'] = ['januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december'];

			$converted_start_date = date('d M Y',strtotime($request->start_date));
			$converted_end_date = date('d M Y',strtotime($request->end_date));
			@endphp
			<div class="RequestDetails">
				<div class="RequestDetails__row">
					<span>Status</span>
					<span>{{ $request->status }}</span>
				</div>
				<div class="RequestDetails__row">
					<span>Start Datum</span>
					<span class="RequestDetails__text">
						@php echo ucfirst(str_replace($lang['en'], $lang['nl'], strtolower($converted_start_date))); @endphp
					</span>
				</div>
				<div class="RequestDetails__row">
					<span>Eind Datum</span>
					<span class="RequestDetails__text">
						@php echo ucfirst(str_replace($lang['en'], $lang['nl'], strtolower($converted_end_date))); @endphp
					</span>
				</div>
			</div>
			</v-card>
		</v-li>
		@endforeach
	</v-ul>
	@else
	<p>Je hebt geen uitgaande transactieverzoeken voorlopig.</p>
	@endif
@endsection
