@extends('layouts.auth_area')

@section('auth_content')
@if(!$completeProfile)
<div class="CompleteProfile">
	<p>Vul je verhuurdersprofiel (adres) aan voordat je items kan verhuren.</p>
</div>
@endif

<div class="Subhead u--flex u--flexJustifyContentSpaceBetween u--flexWrap u--flexAlignItemsCenter u--pb-16">
	<div>
		<h2 class="Subhead__heading">Mijn spullen</h2>
		<span></span>
	</div>
	<v-button class="Button Button--primary u--inlineBlock u--linkClean" v-modal:add-item-modal @if(!$completeProfile) disabled @endif>Spullen toevoegen
	</v-button>
</div>


<div class="u--clearFix"></div>

<!-- List: Spullen -->
@if (count($user_items) > 0)
<v-ul class="List List--grid List--my-items u--flex u--flexWrap">
	@foreach ($user_items as $item)
	<v-li class="List__item List__item--grid col-1-3">
		<v-link class="Link u--linkClean" link="{{ url('user-item/' . $item->id) }}">
			<v-card class="Card u--pn">
				<v-img class="Image Image--my-items" background="{{ $item->thumbnail }}"></v-img>
				<div class="MyItem__info u--flex u--flexJustifyContentSpaceBetween">
					<h3 class="MyItem__title">{{ $item->name }}</h3>
					<div class="MyItem__actions u--flex">
						<div class="MyItem__requests">
							<a href="{{ url('requests/incoming') }}" class="MyItem__request-count Link Link--inverse u--flex">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 511.624 511.623" style="enable-background:new 0 0 511.624 511.623;" xml:space="preserve">
									<path d="M9.135,200.996h392.862v54.818c0,2.475,0.9,4.613,2.707,6.424c1.811,1.81,3.953,2.713,6.427,2.713    c2.666,0,4.856-0.855,6.563-2.569l91.365-91.362c1.707-1.713,2.563-3.903,2.563-6.565c0-2.667-0.856-4.858-2.57-6.567    l-91.07-91.078c-2.286-1.906-4.572-2.856-6.858-2.856c-2.662,0-4.853,0.856-6.563,2.568c-1.711,1.715-2.566,3.901-2.566,6.567    v54.818H9.135c-2.474,0-4.615,0.903-6.423,2.712S0,134.568,0,137.042v54.818c0,2.474,0.903,4.615,2.712,6.423    S6.661,200.996,9.135,200.996z" fill="#b7b7b7"></path>
									<path d="M502.49,310.637H109.632v-54.82c0-2.474-0.905-4.615-2.712-6.423c-1.809-1.809-3.951-2.712-6.424-2.712    c-2.667,0-4.854,0.856-6.567,2.568L2.568,340.607C0.859,342.325,0,344.509,0,347.179c0,2.471,0.855,4.568,2.568,6.275    l91.077,91.365c2.285,1.902,4.569,2.851,6.854,2.851c2.473,0,4.615-0.903,6.423-2.707c1.807-1.813,2.712-3.949,2.712-6.427V383.72    H502.49c2.478,0,4.613-0.899,6.427-2.71c1.807-1.811,2.707-3.949,2.707-6.427v-54.816c0-2.475-0.903-4.613-2.707-6.42    C507.103,311.54,504.967,310.637,502.49,310.637z" fill="#b7b7b7"></path>
								</svg>
								<span class="u--ml-8">0</span>
							</a>
						</div>
						<v-form action="{{ url('user-item/' . $item->id) }}" method="post">
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<v-button class="Button Button--small Button--transparent u--pn">
								<svg class="MyItem__delete-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 438.529 438.529" style="enable-background:new 0 0 438.529 438.529;" xml:space="preserve">
									<path d="M417.689,75.654c-1.711-1.709-3.901-2.568-6.563-2.568h-88.224L302.917,25.41c-2.854-7.044-7.994-13.04-15.413-17.989    C280.078,2.473,272.556,0,264.945,0h-91.363c-7.611,0-15.131,2.473-22.554,7.421c-7.424,4.949-12.563,10.944-15.419,17.989    l-19.985,47.676h-88.22c-2.667,0-4.853,0.859-6.567,2.568c-1.709,1.713-2.568,3.903-2.568,6.567v18.274    c0,2.664,0.855,4.854,2.568,6.564c1.714,1.712,3.904,2.568,6.567,2.568h27.406v271.8c0,15.803,4.473,29.266,13.418,40.398    c8.947,11.139,19.701,16.703,32.264,16.703h237.542c12.566,0,23.319-5.756,32.265-17.268c8.945-11.52,13.415-25.174,13.415-40.971    V109.627h27.411c2.662,0,4.853-0.856,6.563-2.568c1.708-1.709,2.57-3.9,2.57-6.564V82.221    C420.26,79.557,419.397,77.367,417.689,75.654z M169.301,39.678c1.331-1.712,2.95-2.762,4.853-3.14h90.504    c1.903,0.381,3.525,1.43,4.854,3.14l13.709,33.404H155.311L169.301,39.678z M347.173,380.291c0,4.186-0.664,8.042-1.999,11.561    c-1.334,3.518-2.717,6.088-4.141,7.706c-1.431,1.622-2.423,2.427-2.998,2.427H100.493c-0.571,0-1.565-0.805-2.996-2.427    c-1.429-1.618-2.81-4.188-4.143-7.706c-1.331-3.519-1.997-7.379-1.997-11.561V109.627h255.815V380.291z" fill="#CB2431"/>
									<path d="M137.04,347.172h18.271c2.667,0,4.858-0.855,6.567-2.567c1.709-1.718,2.568-3.901,2.568-6.57V173.581    c0-2.663-0.859-4.853-2.568-6.567c-1.714-1.709-3.899-2.565-6.567-2.565H137.04c-2.667,0-4.854,0.855-6.567,2.565    c-1.711,1.714-2.568,3.904-2.568,6.567v164.454c0,2.669,0.854,4.853,2.568,6.57C132.186,346.316,134.373,347.172,137.04,347.172z" fill="#CB2431"></path>
									<path d="M210.129,347.172h18.271c2.666,0,4.856-0.855,6.564-2.567c1.718-1.718,2.569-3.901,2.569-6.57V173.581    c0-2.663-0.852-4.853-2.569-6.567c-1.708-1.709-3.898-2.565-6.564-2.565h-18.271c-2.664,0-4.854,0.855-6.567,2.565    c-1.714,1.714-2.568,3.904-2.568,6.567v164.454c0,2.669,0.854,4.853,2.568,6.57C205.274,346.316,207.465,347.172,210.129,347.172z    " fill="#CB2431"></path>
									<path d="M283.22,347.172h18.268c2.669,0,4.859-0.855,6.57-2.567c1.711-1.718,2.562-3.901,2.562-6.57V173.581    c0-2.663-0.852-4.853-2.562-6.567c-1.711-1.709-3.901-2.565-6.57-2.565H283.22c-2.67,0-4.853,0.855-6.571,2.565    c-1.711,1.714-2.566,3.904-2.566,6.567v164.454c0,2.669,0.855,4.853,2.566,6.57C278.367,346.316,280.55,347.172,283.22,347.172z" fill="#CB2431"></path>
								</svg>
							</v-button>
						</v-form>
					</div>
				</div>
			</v-card>
		</v-link>
	</v-li>
	@endforeach
</v-ul>
@else
<p>U hebt nog geen spullen toegevoegd. Druk rechtsboven op de knop om spullen toe te voegen.</p>
@endif
@endsection