@extends('layouts.auth_area')

@section('auth_content')
@if (count($requests) > 0)
<div class="RequestsTable">
	<div class="RequestsTable__header u--flex u--notMobile">
		<div class="u--gr-2">
			<span class="TableHeader__title">Naam</span>
		</div>
		<div class="u--gr-2">
			<span class="TableHeader__title">Verhuurder</span>
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
	@foreach($requests as $request)
	<div class="RequestsTable__row">
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
			<span>{{ $request->status }}</span>
		</div>
		<div class="Request__actions">
			@if($request->status == 'Afwachten')
			<v-form action="{{ url('request/' . $request->request_id) }}" method="post">
				<input type="hidden" name="_method" value="DELETE">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<v-button class="Button Button--danger Button--s"><svg class="MyItem__delete-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 438.529 438.529" style="enable-background:new 0 0 438.529 438.529;" xml:space="preserve">
									<path d="M417.689,75.654c-1.711-1.709-3.901-2.568-6.563-2.568h-88.224L302.917,25.41c-2.854-7.044-7.994-13.04-15.413-17.989    C280.078,2.473,272.556,0,264.945,0h-91.363c-7.611,0-15.131,2.473-22.554,7.421c-7.424,4.949-12.563,10.944-15.419,17.989    l-19.985,47.676h-88.22c-2.667,0-4.853,0.859-6.567,2.568c-1.709,1.713-2.568,3.903-2.568,6.567v18.274    c0,2.664,0.855,4.854,2.568,6.564c1.714,1.712,3.904,2.568,6.567,2.568h27.406v271.8c0,15.803,4.473,29.266,13.418,40.398    c8.947,11.139,19.701,16.703,32.264,16.703h237.542c12.566,0,23.319-5.756,32.265-17.268c8.945-11.52,13.415-25.174,13.415-40.971    V109.627h27.411c2.662,0,4.853-0.856,6.563-2.568c1.708-1.709,2.57-3.9,2.57-6.564V82.221    C420.26,79.557,419.397,77.367,417.689,75.654z M169.301,39.678c1.331-1.712,2.95-2.762,4.853-3.14h90.504    c1.903,0.381,3.525,1.43,4.854,3.14l13.709,33.404H155.311L169.301,39.678z M347.173,380.291c0,4.186-0.664,8.042-1.999,11.561    c-1.334,3.518-2.717,6.088-4.141,7.706c-1.431,1.622-2.423,2.427-2.998,2.427H100.493c-0.571,0-1.565-0.805-2.996-2.427    c-1.429-1.618-2.81-4.188-4.143-7.706c-1.331-3.519-1.997-7.379-1.997-11.561V109.627h255.815V380.291z" fill="#FFF"/>
									<path d="M137.04,347.172h18.271c2.667,0,4.858-0.855,6.567-2.567c1.709-1.718,2.568-3.901,2.568-6.57V173.581    c0-2.663-0.859-4.853-2.568-6.567c-1.714-1.709-3.899-2.565-6.567-2.565H137.04c-2.667,0-4.854,0.855-6.567,2.565    c-1.711,1.714-2.568,3.904-2.568,6.567v164.454c0,2.669,0.854,4.853,2.568,6.57C132.186,346.316,134.373,347.172,137.04,347.172z" fill="#FFF"></path>
									<path d="M210.129,347.172h18.271c2.666,0,4.856-0.855,6.564-2.567c1.718-1.718,2.569-3.901,2.569-6.57V173.581    c0-2.663-0.852-4.853-2.569-6.567c-1.708-1.709-3.898-2.565-6.564-2.565h-18.271c-2.664,0-4.854,0.855-6.567,2.565    c-1.714,1.714-2.568,3.904-2.568,6.567v164.454c0,2.669,0.854,4.853,2.568,6.57C205.274,346.316,207.465,347.172,210.129,347.172z    " fill="#FFF"></path>
									<path d="M283.22,347.172h18.268c2.669,0,4.859-0.855,6.57-2.567c1.711-1.718,2.562-3.901,2.562-6.57V173.581    c0-2.663-0.852-4.853-2.562-6.567c-1.711-1.709-3.901-2.565-6.57-2.565H283.22c-2.67,0-4.853,0.855-6.571,2.565    c-1.711,1.714-2.566,3.904-2.566,6.567v164.454c0,2.669,0.855,4.853,2.566,6.57C278.367,346.316,280.55,347.172,283.22,347.172z" fill="#FFF"></path>
								</svg></v-button>
			</v-form>
			@else
			<a href="{{ url('request/' . $request->request_id) }}" class="Button Button--s Button--success u--linkClean u--mr-8">Huur</a>
			<v-form action="{{ url('request/' . $request->request_id) }}" method="post">
				<input type="hidden" name="_method" value="DELETE">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<v-button class="Button Button--s Button--danger u--linkClean">&#10005;</v-button>
			</v-form>
			@endif
		</div>	
	</div>
	@endforeach
</div>
@else
<p>Je hebt geen uitgaande transactieverzoeken voorlopig.</p>
@endif
@endsection
