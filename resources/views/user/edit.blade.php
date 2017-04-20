@extends('layouts.app')

@section('content')
<v-container v-cloak>
    <v-header class="header--page" >
    <h1 class="header__title">Profiel bewerken</h1>
    </v-header>
    <v-form class="form--settings" action="{{ url('user/' . Auth::id()) }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!--  
                    TODO: CHECK FOR EACH VALUE IF IT IS NOT EMPTY, IF IT IS EMPTY THE DATA THEN JUST LEAVE VALUE EMPTY AND IT WILL SHOW THE PLACEHOLDER
                -->
                <v-form-item>
                    <v-input type="text" value="@if(!empty($user_details->name)) {{ $user_details->name }} @endif" class="input--text-default input--full-width" label="Naam" placeholder="Bv. Jan Janssens" name="name"></v-input>
                </v-form-item>
                <v-form-item>
                    <v-input type="text" value="@if(!empty($user_details->email)) {{ $user_details->email }} @endif" class="input--text-default input--full-width" label="Email" placeholder="voorbeeld@email.com" name="email"></v-input>
                </v-form-item>
                <v-form-item>
                    <v-input type="text" value="@if(!empty($user_details->tel)) {{ $user_details->tel }} @endif" class="input--text-default" label="Telefoonnummer (Optioneel)" placeholder="Bv. (+32) 123456789" name="tel"></v-input>
                </v-form-item>
                <v-form-item>
                    <v-input type="text" value="@if(!empty($user_details->adres)) {{ $user_details->adres }} @endif" class="input--text-default input--full-width" label="Adres" placeholder="Bv. Hendrik Speecvest 46 2800 Mechelen" name="address"></v-input>
                </v-form-item>
                <v-form-item>
                    <v-input type="submit" value="Opslaan"></v-input>
                </v-form-item>
            </v-form>
        </v-container>
        @endsection