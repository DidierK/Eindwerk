@extends('layouts.auth_area')

@section('content')
<v-content>
	<v-container class="Container">
		<div class="Subhead">
			<h2 class="Subhead__heading">Je transactiedetails</h2>
			<span></span>
		</div>
		<div class="u--flex">
			<div class="Col-md-1-2">
			<div class="TransactionSummary">
				<div class="TransactionSummary__heading">
					
				</div>
			</div>
				<p>Je bent dit item aan het huren. Betaal je product hier indien je dat nog niet hebt gedaan.</p>
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
