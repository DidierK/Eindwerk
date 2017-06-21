@extends('layouts.auth_area')

@section('auth_content')
<v-container class="Container">
	<div class="Subhead u--mb-32">
		<h2 class="Subhead__heading">Lopende transacties</h2>
		<span></span>
	</div>
	<h3 class="h3">Gehuurde items</h3>
	@if (count($transactions_rented) > 0)
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
				<span class="TableHeader__title">ACTIE</span>
			</div>
		</div>
		@foreach ($transactions_rented as $transaction)
		<div class="RequestsTable__row">
			<div class="u--gr-2 u--flex u--flexAlignItemsCenter">
				<v-img class="UserItemImage Image Image--round Image--my-items" background="{{ $transaction->thumbnail }}"></v-img>
				<a class="Link u--linkClean u--ml-16" href="{{ url('user-item/' . $transaction->user_item_id) }}">
					<span>{{ $transaction->item_name }}</span>
				</a>
			</div>
			<div class="u--gr-2 RequestDetails__row">
				<span class="TableHeader__title u--mobileOnly">Verhuurder</span>
				<a class="Link u--linkClean" href="{{ url('user/' . $transaction->user_id) }}">
					<span>{{ $transaction->user_name }}</span>
				</a>
			</div>
			@php
			$lang = array();
			$lang['en'] = ['january','februari','march','april','may','june','july','august','september','october','november','december'];
			$lang['nl'] = ['januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december'];

			$converted_start_date = date('d F Y',strtotime($transaction->start_date));
			$converted_end_date = date('d F Y',strtotime($transaction->end_date));
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
				<a class="Button Button--primary u--linkClean" href="{{ url('transaction/' . $transaction->id )}}">Bekijken</a>
			</div>
		</div>
	</div>
	@endforeach
	@else
	<p>Je bent op dit moment geen items aan het huren.</p>
	@endif
	<h3 class="h3 u--mt-32">Verhuurde items</h3>
	@if (count($transactions_owned) > 0)
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
				<span class="TableHeader__title">ACTIE</span>
			</div>
		</div>
		@foreach ($transactions_owned as $transaction)
		<div class="RequestsTable__row">
			<div class="u--gr-2 u--flex u--flexAlignItemsCenter">
				<v-img class="UserItemImage Image Image--round Image--my-items" background="{{ $transaction->thumbnail }}"></v-img>
				<a class="Link u--linkClean u--ml-16" href="{{ url('user-item/' . $transaction->user_item_id) }}">
					<span>{{ $transaction->item_name }}</span>
				</a>
			</div>
			<div class="u--gr-2 RequestDetails__row">
				<span class="TableHeader__title u--mobileOnly">Verhuurder</span>
				<a class="Link u--linkClean" href="{{ url('user/' . $transaction->user_id) }}">
					<span>{{ $transaction->user_name }}</span>
				</a>
			</div>
			@php
			$lang = array();
			$lang['en'] = ['january','februari','march','april','may','june','july','august','september','october','november','december'];
			$lang['nl'] = ['januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december'];

			$converted_start_date = date('d F Y',strtotime($transaction->start_date));
			$converted_end_date = date('d F Y',strtotime($transaction->end_date));
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
				<a class="Button Button--primary u--linkClean" href="{{ url('transaction/' . $transaction->id )}}">Bekijken</a>
			</div>
		</div>
	</div>
	@endforeach
	@else
	<p>Je bent op dit moment geen items aan het huren.</p>
	@endif
</v-container>
@endsection