@extends('layouts.app')

@section('content')
<v-container class="Container" v-cloak>
    <v-user-item class="UserItem UserItem--details u--flex u--flexWrap">
        <v-card class="Card Card--user-item-details">
            <v-img src="{{ asset($user_item_user->thumbnail) }}"></v-img>
        </v-card>
        <div>
        <v-header class="Header Header--user-item-details u--flex">
            <div class="Header__avatar-container">
                <v-avatar class="Avatar Avatar--default" src="{{ $user_item_user->avatar }}"></v-avatar>
                </div>
                <h2 class="u--alignSelfCenter">Dakkoffer van {{ $user_item_user->name }} </h2>
            </v-header>
            <h3>Extra informatie</h3>
            @if($user_item_user->description > 0)
            <p>{{ $user_item_user->description }}</p>
            @else
            <p>Geen beschrijving beschikbaar.
            @endif
            <span class="UserItem__price u--block">€ {{  number_format($user_item_user->price,2) }}</span>
            <h2>Huur dit item:</h2>
            <v-form action="{{ url('request')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- Put in value field here the item_id -->
                <input type="hidden" name="user_item_id" value="{{ $user_item_user->id }}">
                <v-form-item>Van:
                <input type="date" name="start">
                </v-form-item>
                <v-form-item>Tot:
                <input type="date" name="end">
                </v-form-item>
                <v-button class="Button Button--default Button--blue u--block u--sizeFull">Verzoek versturen</v-button>
            </v-form>
            
        </div>
    </div>
</v-user-item>
@endsection