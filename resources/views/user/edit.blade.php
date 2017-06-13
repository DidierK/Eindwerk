@extends('layouts.app')

@section('content')
<v-container class="Container" v-cloak>
    <!-- Header -->
    <v-header class="Header Header--page" >
    <h1 class="Header__title u--textCenter">Profiel bewerken</h1>
    </v-header>

    <!-- Form: Profiel informatie bewerken -->
    <v-form class="Form Form--settings" action="{{ url('user/' . Auth::id()) }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!--  
                    TODO: CHECK FOR EACH VALUE IF IT IS NOT EMPTY, IF IT IS EMPTY THE DATA THEN JUST LEAVE VALUE EMPTY AND IT WILL SHOW THE PLACEHOLDER
                -->
                <v-form-item class="FormItem">
                    <v-input type="text" value="@if(!empty($user_details->name)){{ $user_details->name }}@endif" class="Input Input--text-default u--fullWidth" label="Naam" placeholder="Bv. Jan Janssens" name="name"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                    <v-input type="text" value="@if(!empty($user_details->email)){{ $user_details->email }}@endif" class="Input Input--text-default u--fullWidth" label="Email" placeholder="voorbeeld@email.com" name="email"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                    <v-input type="text" value="@if(!empty($user_details->tel)){{ $user_details->tel }}@endif" class="Input Input--text-default" label="Telefoonnummer (Optioneel)" placeholder="Bv. (+32) 123456789" name="tel"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                    <v-input type="text" value="@if(!empty($user_details->address)){{ $user_details->address }}@endif" class="Input Input--text-default u--fullWidth" label="Adres" placeholder="Bv. Hendrik Speecvest 46 2800 Mechelen" name="address"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                    <v-input type="submit" class="Button Button--default Button--blue u--sizeFull" value="Opslaan"></v-input>
                </v-form-item>
            </v-form>
        </v-container>
        @endsection