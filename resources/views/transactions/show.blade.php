@extends('layouts.auth_area')

@section('content')
<v-content>
	<v-container class="Container">
		<div class="Subhead">
			<h2 class="Subhead__heading">Je transactiedetails</h2>
			<span></span>
		</div>
		<div class="u--flex u--flexWrap">
			<div class="Col-md-1-2">
				<div class="TransactionSummary">
					<div class="TransactionSummary__heading">
						<div class="Col-md-1-2">
							<img class="TransactionSummary__item-thumbnail u--floatLeft u--mr-16" src="{{ $transaction->thumbnail }}">
							<h4 class="TransactionSummary__item-name">{{ $transaction->item_name }}</h4>
							<span class="TransactionSummary__user-name">{{ $transaction->user_name }}</span>
						</div>
						<div class="Col-md-1-4">
							<div class="TransactionSummary__date-container">
								<span class="TransactionSummary__small-title">VAN</span>
								<span>{{ $transaction->start_date }}</span>
							</div>
						</div>
						<div class="Col-md-1-4">
							<div class="TransactionSummary__date-container">
								<span class="TransactionSummary__small-title">TOT</span>
								<span>{{ $transaction->end_date }}</span>
							</div>
						</div>
					</div>
					<div class="TransactionSummary__content">
						<div class="TransactionSummary__price-container">
							<h5 class="TransactionSummary__small-title">Prijs</h5>
							<span>€{{ $transaction->price }}</span>
						</div>
						<div class="TransactionSummary__day-amount-container">
							<h5 class="TransactionSummary__small-title">Aantal dagen</h5>
							<span>{{ $total_days }} dagen</span>
						</div>
						<div class="TransactionSummary__total-container u--mt-16">
							<h5 class="TransactionSummary__small-title">Totaal</h5>
							<span class="TransactionSummary__total-price">€{{ $total_price }}</span>
						</div>
					</div>
				</div>
			</div>
			<div class="Col-md-1-2">
				<h3 class="h3 u--mt-0">VERSTUUR EEN BERICHT</h3>
				<p>Stuur een bericht naar de (ver)huurder om de ophaling/afhaling te regelen.</p>
				<form>
					<p class="FormItem u--mb-16">
						<textarea class="Input Input--textarea-default u--sizeFull" placeholder="Stuur een bericht naar de verhuurder..."></textarea>
					</p>
					<button class="Button Button--primary u--floatRight">Verzenden</button>
				</form>
				<div class="u--cf">
					<div class="Remark">
						<h4 class="h4 u--pt-16">Opmerking</h4>
						<p>Elk gehuurt en verhuurt item valt onder de <a href="{{ url('/disclaimer')}}">TravelShare garantie</a>. Lees dit door om meer te weten in geval van onrecht.
						</p>
					</div>
				</div>
			</div>
		</div>
	</v-container>
</v-content>
@endsection
