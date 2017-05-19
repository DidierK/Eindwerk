@extends('layouts.app')

@section('content')
<v-container class="Container" v-cloak>
    <v-user-item class="UserItem UserItem--details">
        <v-card class="Card Card--user-item-details u--flex u--flexWrap">
        <div class="Column Column--left">
            <v-img src="{{ asset($user_item_user->thumbnail) }}"></v-img>
            </div>

            <div class="Column Column--right">


                <v-header class="Header Header--user-item-details u--flex">
                    <div class="Header__avatar-container">
                        <v-avatar class="Avatar Avatar--default" src="{{ $user_item_user->avatar }}"></v-avatar>
                    </div>
                    <h2 class="u--alignSelfCenter">{{ $user_item_user->name }} van {{ $user_item_user->user_name }} </h2>
                </v-header>
                
                <span class="UserItem__price u--block">€ {{  number_format($user_item_user->price,2) }} /dag</span>

                @if($owned)
                <v-button class="Button Button--default Button--blue u--block u--sizeFull" href="{{ url('user-item/' . $user_item_user->id . '/edit')}}">Item bewerken</v-button>
                @else
                
                @if ($errors->any())
                @foreach ($errors->all() as $message)
                {{ $message }} 
                @endforeach
                @elseif(Session::has('alert-success'))
                <p class="Alert-success">Je verzoek is succesvol verstuurd. Bekijk al jou <a href="{{ url('requests/outgoing')}}"> uitgaande verhuurverzoeken</a>.
                </p>
                @endif

                <v-form class="Form Form--request u--flexWrap" action="{{ url('request')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- Put in value field here the item_id -->
                    <input type="hidden" name="user_id" value="{{ $user_item_user->user_id }}">
                    <input type="hidden" name="user_item_id" value="{{ $user_item_user->id }}">
                    <v-form-item>
                        <input class="Input Input--text-default" type="text" name="start" id="start_date" placeholder="Van">
                    </v-form-item>
                    <v-form-item>
                        <input class="Input Input--text-default" type="text" name="end" id="end_date" placeholder="Tot">
                    </v-form-item>
                    <v-button class="Button Button--default Button--blue u--block">Verzoek versturen</v-button>
                </v-form>
            
                <h2>Informatie</h2>
                @if($user_item_user->description)
                <p>{{ $user_item_user->description }}</p>
                @else
                <p>Geen beschrijving beschikbaar.</p>
                @endif
                @endif

            </div>
        </v-card>
    </v-user-item>
    @endsection