@extends('layouts.app')

@section('content')
<v-container class="Container" v-cloak>
    <v-card class="Card">
        <v-img src="{{ asset('images/background1.jpg') }}"></v-img>
    </v-card>
    <div>
        <h2>Dakkoffer van Wout Borghgraef</h2>
        <h3>Extra informatie</h3>
        <p>Geen beschrijving beschikbaar.</p>
        <span>€ 50,00 /dag</span>
        <v-button>Verzoek versturen</v-button>
    </div>
</v-container>
@endsection