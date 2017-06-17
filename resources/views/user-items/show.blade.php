@extends('layouts.app')

@section('content')
<v-content>
    <v-container class="Container">
        <v-user-item-details class="UserItemDetails u--flex u--flexWrap">
            <div class="Col-sm-1-2">
                <v-img class="UserItemDetails__thumbnail" src="{{ asset($user_item_user->thumbnail) }}"></v-img>
            </div>
            <div class="Col-sm-1-2">
                <h1 class="u--alignSelfCenter">{{ $user_item_user->name }}</h1>
                <div class="UserItemDetails__user-info">
                    <a class="UserItemDetails__user-name u--linkClean" href="{{ url('/user/' . $user_item_user->user_id) }}">{{ $user_item_user->user_name }}</a>
                    <div class="u--mr-8 u--floatLeft">
                        <v-avatar class="Avatar Avatar--default" src="{{ $user_item_user->avatar }}&width=36&height=36"></v-avatar>
                    </div>
                    <div class="UserItemDetails__user-rating">N/D (nog geen reviews)</div>
                </div>
                <div class="u--cf"></div>
                <span class="UserItemDetails__price"><em>€{{  number_format($user_item_user->price,2) }}</em> per dag</span>
                <div class="Subhead Subhead--spacious">
                    <h2 clas="Subhead__heading">Huur dit item</h2>  
                </div>
                @if($owned)
                <div>
                    <p>Je kunt dit item niet huren omdat het van jou is. <a href="{{ url('user-item/' . $user_item_user->id . '/edit')}}">Bewerk je item hier.</a></p>
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
                        <v-button class="Button Button--default Button--blue u--block u--sizeFull">Verzoek versturen</v-button>
                    </v-form-item>
                </v-form>
                <h3>Uitgeleend op</h3>
                <p>Nog niet uitgeleend.</p>
                @endif
                <div class="Subhead Subhead--spacious">
                    <h2 clas="Subhead__heading">Meer informatie</h2>
                </div>
                @if($user_item_user->description)
                <p>{{ $user_item_user->description }}</p>
                @else
                <p>Geen beschrijving beschikbaar.</p>
                @endif
            </div>
        </v-user-item-details>
    </v-container>
</v-content>
@endsection