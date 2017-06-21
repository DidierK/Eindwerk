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
							<span>{{ $total_days }} dag(en)</span>
						</div>
						<div class="TransactionSummary__total-container u--mt-16">
							<h5 class="TransactionSummary__small-title">Totaal</h5>
							<span class="TransactionSummary__total-price">€{{ $total_price }}</span>
						</div>
					</div>
				</div>
				@if($owned)
				<h3 class="h3">Wachten op betaling</h3>
				<p>De verhuurder zal je item zo snel mogelijk proberen te betalen of afspreken met jou om het item te betalen. Indien de huurder niet tijdig betaald moet je ons <a href="{{ url('/contact')}}">contacteren</a> en wij zullen dit nakijken.</p>
				@else
				<p class="u--mt-16">Je kan dit item betalen op 2 manieren.</p>
				<h3 class="h3">Betalen via bankoverschrijving</h3>
				

				<p class="u--mt-16">De veiligste manier is om het juiste bedrag over te schrijven op onze bankrekening. Hieronder vindt je onze gegevens.</p>

				<ul class="u--mt-16 u--pn">
					<li>
						<p><b>Naam: </b>TravelShare</p>
					</li>
					<li>
						<p><b>Rekeningnummer: </b>BE123456789</p>
					</li>
				</ul>

				<p class="u--mt-16">Wij zullen dit dan storten op het account van de verhuurder. Indien je hiervoor kiest zal je item beschermt zijn onder de <a href="{{ url('/disclaimer')}}">TravelShare garantie</a>.</p>

				<h3 class="h3">Contant betalen</h3>
				<p class="u--mt-16">Je kan er ook voor kiezen om contant te betalen. In dat geval komt TravelShare niet tussen en zal je item niet onder onze garantie vallen. Dit is daarom niet aanbevolen.</p>
				@endif
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
						<p>Elk gehuurt en verhuurt item valt onder de <a href="{{ url('/disclaimer')}}">TravelShare garantie</a>. Lees dit om meer hierover te weten te komen.
						</p>
					</div>
				</div>
			</div>
		</div>
	</v-container>
</v-content>
@endsection
