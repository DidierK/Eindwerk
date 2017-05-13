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
            <v-button class="Button Button--default Button--blue u--block u--sizeFull">Verzoek versturen</v-button>
        </div>
    </div>
</v-user-item>
@endsection