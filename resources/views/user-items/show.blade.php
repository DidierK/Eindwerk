@extends('layouts.app')

@section('content')
<v-content>
    <v-container class="Container">
        <div class="Subhead">
            <h2 class="Subhead__heading">{{ ($user_item_user->title) ? $user_item_user->title : $user_item_user->name }}</h2>
            <span></span>
        </div>

        <v-user-item-details class="UserItemDetails u--flex u--flexWrap">
            <div class="Col-sm-1-2">
                <v-img class="UserItemDetails__thumbnail" src="{{ asset('uploads/user-items/' . $user_item_user->thumbnail) }}"></v-img>
            </div>
            <div class="Col-sm-1-2">
                <div class="UserItemDetails__user-info">
                    <a class="UserItemDetails__user-name u--linkClean" href="{{ url('/user/' . $user_item_user->user_id) }}">{{ $user_item_user->user_name }}</a>
                    <div class="u--mr-8 u--floatLeft">
                        <v-avatar class="Avatar Avatar--default" src="{{ $user_item_user->avatar }}&width=36&height=36"></v-avatar>
                    </div>
                    <div class="UserItemDetails__user-rating">N/D (nog geen reviews)</div>
                </div>
                <div class="u--cf"></div>
                <span class="UserItemDetails__price"><em id="itemPrice">€{{  number_format($user_item_user->price,2) }}</em> (extra dag: €{{ $user_item_user->price / 100 * 10}} )</span>
                <div class="Subhead Subhead--spacious">
                    <h2 clas="Subhead__heading">Huur dit item</h2>  
                </div>
                @if($owned)
                <div>
                    <p class="u--mb-16">Je kan dit item niet huren omdat het van jou is.</p>
                    <button v-on:click.prevent v-modal:edit-item-modal class="Button Button--primary">Bewerk item</button>
                    <form action="{{ url('user-item/' . $user_item_user->id) }}" method="post" class="u--inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="Button Button--danger">Verwijder item</button>
                    </form>
                </div>
                @else
                @if ($errors->any())
                <div class="Errors">
                    <h3>Verzoek niet verstuurd</h3>
                    <ul>
                        @foreach ($errors->all() as $message)
                        <li><p>{{ $message }}</p></li> 
                        @endforeach
                    </ul>
                </div>
                @elseif(Session::has('alert-success'))
                <div class="Alert-success">
                    <h3>Verzoek verstuurd.</h3>
                    <p>Je verzoek is succesvol verstuurd. Bekijk al jou <a href="{{ url('requests/outgoing')}}"> uitgaande verhuurverzoeken</a>.</p>
                </div>
                @endif
                <v-form class="RequestForm u--mb-16 u--flex u--flexWrap" action="{{ url('request')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- Put in value field here the item_id -->
                    <input type="hidden" name="user_id" value="{{ $user_item_user->user_id }}">
                    <input type="hidden" name="user_item_id" value="{{ $user_item_user->id }}">
                    <v-form-item class="FormItem FormItem--text">
                        <input class="Input Input--text-default u--sizeFull" type="text" name="start" id="start_date" placeholder="Van">
                    </v-form-item>
                    <v-form-item class="FormItem FormItem--text">
                        <input class="Input Input--text-default u--sizeFull" type="text" name="end" id="end_date" placeholder="Tot">
                    </v-form-item>
                    <v-form-item class="FormItem FormItem--button">
                        <v-button class="Button Button--primary u--block u--sizeFull">Verzoek versturen</v-button>
                    </v-form-item>
                    <p id="totalPrice" class="u--mt-8"></p>
                </v-form>
                <h3>Uitgeleend van</h3>
                @if(count($unavailable_dates) > 0)
                @foreach($unavailable_dates as $unavailable_date)
                @php
                $lang = array();
                $lang['en'] = ['january','februari','march','april','may','june','july','august','september','october','november','december'];
                $lang['nl'] = ['januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december'];

                $converted_start_date = date('d F Y',strtotime($unavailable_date->start_date));
                $converted_end_date = date('d F Y',strtotime($unavailable_date->end_date));
                @endphp
                <p>@php echo ucfirst(str_replace($lang['en'], $lang['nl'], strtolower($converted_start_date))); @endphp tot @php echo ucfirst(str_replace($lang['en'], $lang['nl'], strtolower($converted_end_date))); @endphp</p>
                @endforeach
                @else
                <p>Nog niet uitgeleend.</p>
                @endif
                @endif
                <div class="Subhead Subhead--spacious">
                    <h2 clas="Subhead__heading">Meer informatie</h2>
                </div>

                @if($user_item_user->description)
                <p>{{ $user_item_user->description }}</p>
                @else
                <p>Geen beschrijving beschikbaar.</p>
                @endif

                <div class="Subhead Subhead--spacious">
                    <h2 clas="Subhead__heading">Geschikt voor</h2>
                </div>

                @if(count($suitable_vacations) > 0)
                <ul class="ItemList">
                    @foreach($suitable_vacations as $vacation)
                    <li>{{ $vacation->name }}</li>
                    @endforeach
                </ul>
                @else 
                <p>Alle vakanties</p>
                @endif

                <div class="Subhead Subhead--spacious">
                    <h2 clas="Subhead__heading">Verzekering</h2>
                </div>
                
                @if($user_item_user->insured)
                <span class="Checkmark__success">✓</span><span>Dit item is verzekerd.</span>
                @else
                <span class="Cross__danger">&#9932;</span><span>Dit item is niet verzekerd.</span>
                @endif


                @if($owned)

                @if($user_item_user->insured)
                <form action="{{ url('user-item/' . $user_item_user->id . '/insure') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="Button Button--danger">Verwijder verzekering</button>
                </form>
                @else
                <form action="{{ url('user-item/' . $user_item_user->id . '/insure') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="Button Button--primary">Verzeker item</button>
                </form>
                @endif

                @endif

                <p class="u--textSmall u--mt-16">Lees <a href="{{ url('disclaimer') }}">hier</a> hoe de verzekering werkt.</p>
            </div>
        </v-user-item-details>
    </v-container>
</v-content>
<v-edit-item-modal ref="edit-item-modal">
    <!-- Position the spinner with a v-spinner-modal or just with the parent modal? -->
    <v-spinner class="Spinner--add-item-modal" v-if="showLoading"></v-spinner>
    <v-edit-item-form method="post" :data="items" item-name="{{ $user_item_user->name }}" price="{{ number_format($user_item_user->price,2) }}" description="{{ $user_item_user->description }}" item-id="{{ $user_item_user->id }}" v-else>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" slot="csrf">
    </v-edit-item-form>
</v-edit-item-modal> 
@endsection