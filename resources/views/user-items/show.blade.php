@extends('layouts.app')

@section('content')
<v-container class="Container" v-cloak>
    <v-user-item class="UserItem UserItem--details u--flex u--flexWrap">
        <v-card class="Card Card--user-item-details">
            <v-img src="{{ asset('images/background1.jpg') }}"></v-img>
        </v-card>
        <div>
        <v-header class="Header Header--user-item-details u--flex">
            <div class="Header__avatar-container">
                <v-avatar class="Avatar Avatar--default" src="https://graph.facebook.com/v2.8/1360943520618003/picture?type=normal&width=32&height=32"></v-avatar>
                </div>
                <h2 class="u--alignSelfCenter">Dakkoffer van Wout Borghgraef</h2>
            </v-header>
            <h3>Extra informatie</h3>
            <p>Dit is een koffer gemaakt om veel spullen in te vervoeren. Vier personen is ideaal maar het kunnen er zeker ook meer zijn.</p>
            <span class="UserItem__price u--block">€ 50,00 /dag</span>
            <h2>Huur dit item:</h2>
            <v-form action="{{ url('request')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <v-form-item>Van:
                <input type="date" name="from">
                </v-form-item>
                <v-form-item>Tot:
                <input type="date" name="to">
                </v-form-item>
                <v-button class="Button Button--default Button--blue u--block u--sizeFull">Verzoek versturen</v-button>
            </v-form>
            
        </div>
    </div>
</v-user-item>
@endsection