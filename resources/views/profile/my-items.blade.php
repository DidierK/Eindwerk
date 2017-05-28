@extends('layouts.auth_area')

@section('auth_content')
<div class="Subhead u--flex u--flexJustifyContentSpaceBetween u--flexWrap u--flexAlignItemsCenter u--pb-16">
	<v-form class="SearchForm">
		<v-input class="Input Input--text-default u--sizeFull" type="text" placeholder="Zoek in jou spullen"></v-input>
	</v-form>
	<v-button class="Button Button--default Button--white Button--add-items u--inlineBlock u--linkClean" href="{{ url('user-item/create') }}">Spullen toevoegen
	</v-button>
</div>


<div class="u--clearFix"></div>

<!-- List: Spullen -->
@if (count($user_items) > 0)
<v-ul class="List List--grid List--my-items u--flex u--flexWrap">
	@foreach ($user_items as $item)
	<v-li class="List__item List__item--grid col-1-3">
		<v-link class="Link u--linkClean" link="{{ url('user-item/' . $item->id) }}">
			<v-card class="Card">
				<v-img class="Image Image--my-items" background="{{ $item->thumbnail }}"></v-img>
				<h3 class="u--mt-16">
					{{ $item->name }}
				</h3>	
			</v-card>
		</v-link>
	</v-li>
	@endforeach
</v-ul>
@else
<p>U hebt nog geen spullen toegevoegd. <v-link link="{{ url('user-item/create') }}" class="Link Link--default">Voeg spullen toe.</v-link></p>
@endif
@endsection