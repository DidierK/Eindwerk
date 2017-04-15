@extends('layouts.app')

@section('content')
<v-container>
    <v-form class="form--item-creation">
    <v-form-item>
        <v-input type="text" label="Naam" class="input--text-default input--full-width" placeholder="Naam van het materiaal"></v-input>
    </v-form-item>
    <v-form-item>
        <v-input type="text" label="Prijs" class="input--text-default input--price" placeholder="50.00"></v-input><span>€</span>
    </v-form-item>
    <v-form-item>
        <v-input type="file" label="Foto" class="input--full-width"></v-input>
    </v-form-item>
    <v-form-item>
        <v-input type="textarea" label="Informatie" class="input--textarea-default input--full-width" placeholder="Wat moet de huurder weten over jou materiaal?"></v-input>
    </v-form-item>
    <v-form-item>
        <v-input type="submit" value="Toevoegen"></v-input>
    </v-form-item>
    </v-form>
</v-container>
@endsection