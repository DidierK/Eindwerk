@extends('layouts.app')

@section('content')
<!-- Content -->
<v-content>
	<v-container class="Container" v-cloak>
		<div class="Subhead">
			<h2 class="Subhead__heading">Zoekresultaten voor {{ $searchTerm }}</h2>
			<span></span>
		</div>
		@if(count($user_items) > 0)
		@foreach($user_items as $user_item)
		<a class="UserItemsListItem u--block u--linkClean" href="{{ url('user-item/' . $user_item->user_item_id) }}">
			<div class="Card">
				<v-img class="UserItemsListItem__thumbnail" background="{{ asset('uploads/user-items/' . $user_item->thumbnail) }}"></v-img>
				<v-footer class="UserItemsListItem__footer u--flex">
					<div class="UserItemsListItem__user-info">
						<h3 class="UserItemsListItem__user-name u--noMargin">
							<span>{{ $user_item->title }}</span>
						</h3>
						<span class="UserItemsListItem__user-address u--colorLight u--textSmall">
						{{ $user_item->zip . " " . $user_item->locality }}
						</span>
					</div>
					<span class="UserItemsListItem__user-item-price u--marginLeft8px u--alignSelfCenter u--textMedium">€{{ $user_item->price }}</span> 
				</v-footer>
			</div>
		</a>
		@endforeach
		@else
		<p>Er zijn geen zoekresultaten gevonden. Doe <a href="{{ url('contact')}}">hier</a> een suggestie.</p>
		@endif
	</v-container>
</v-content>
@endsection