@extends('layouts.auth_area')

@section('auth_content')
<v-header class="Header Header--page">
	<v-container class="Container u--flex u--flexJustifyContentSpaceBetween u--flexWrap u--flexAlignItemsCenter" v-cloak>
		<h3 class="Header__title u--noMargin">Gegevens</h3>
	</v-container>
</v-header>	

<v-container v-cloak>
	<v-card class="Card">
		<h2>Algemene informatie</h2>
		<v-form class="Form Form--settings" action="{{ url('user/' . Auth::id()) }}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!--  
                    TODO: CHECK FOR EACH VALUE IF IT IS NOT EMPTY, IF IT IS EMPTY THE DATA THEN JUST LEAVE VALUE EMPTY AND IT WILL SHOW THE PLACEHOLDER
                -->
                <v-form-item class="FormItem">
                	<v-input type="text" value="@if(!empty($user_details->name)) {{ $user_details->name }} @endif" class="Input Input--text-default u--fullWidth" label="Naam" placeholder="Bv. Jan Janssens" name="name"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                	<v-input type="text" value="@if(!empty($user_details->email)) {{ $user_details->email }} @endif" class="Input Input--text-default u--fullWidth" label="Email" placeholder="voorbeeld@email.com" name="email"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                	<v-input type="text" value="@if(!empty($user_details->tel)) {{ $user_details->tel }} @endif" class="Input Input--text-default" label="Telefoonnummer (Optioneel)" placeholder="Bv. (+32) 123456789" name="tel"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                	<v-input type="text" value="@if(!empty($user_details->address)) {{ $user_details->address }} @endif" class="Input Input--text-default u--fullWidth" label="Postcode" placeholder="Bv. 2800" name="address"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                	<v-input type="submit" class="Button Button--default Button--blue" value="Opslaan"></v-input>
                </v-form-item>
            </v-form>
        </v-card>
        <v-card class="Card">
		<h2>Account instellingen</h2>
		<v-form class="Form Form--settings" action="{{ url('user/' . Auth::id()) }}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!--  
                    TODO: CHECK FOR EACH VALUE IF IT IS NOT EMPTY, IF IT IS EMPTY THE DATA THEN JUST LEAVE VALUE EMPTY AND IT WILL SHOW THE PLACEHOLDER
                -->
                <v-form-item class="FormItem">
                	<v-input type="text" value="@if(!empty($user_details->name)) {{ $user_details->name }} @endif" class="Input Input--text-default u--fullWidth" label="Naam" placeholder="Bv. Jan Janssens" name="name"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                	<v-input type="text" value="@if(!empty($user_details->email)) {{ $user_details->email }} @endif" class="Input Input--text-default u--fullWidth" label="Email" placeholder="voorbeeld@email.com" name="email"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                	<v-input type="text" value="@if(!empty($user_details->tel)) {{ $user_details->tel }} @endif" class="Input Input--text-default" label="Telefoonnummer (Optioneel)" placeholder="Bv. (+32) 123456789" name="tel"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                	<v-input type="text" value="@if(!empty($user_details->address)) {{ $user_details->address }} @endif" class="Input Input--text-default u--fullWidth" label="Gemeente" placeholder="Bv. Hendrik Speecvest 46 2800 Mechelen" name="address"></v-input>
                </v-form-item>

                <v-form-item class="FormItem">
                	<v-input type="submit" class="Button Button--default Button--blue" value="Opslaan"></v-input>
                </v-form-item>
            </v-form>
        </v-card>
    </v-container>
    @endsection