@extends('layouts.app')

@section('content')
<v-container>
    <v-form class="form--item-creation">
    <v-form-item>
        <v-input type="text" label="Naam" class="input--full-width" placeholder="Naam van het materiaal"></v-input>
    </v-form-item>
    <v-form-item>
        <v-input type="textarea" label="Informatie" class="input--full-width" placeholder="Wat moet de huurder weten over jou materiaal?"></v-input>
    </v-form-item>
    <p>Specifieer de vervoersmethode:</p>
    <v-form-item>
        <v-input type="checkbox" label="Ophalen"></v-input>
    </v-form-item>
    <v-form-item>
        <v-input type="checkbox" label="Geleverd"></v-input>
    </v-form-item>
    <v-form-item>
        <v-input type="file" label="Voeg een foto toe" class="input--full-width"></v-input>
    </v-form-item>
    <v-form-item>
        <v-input type="submit" value="Toevoegen"></v-input>
    </v-form-item>
    </v-form>
</v-container>
@endsection