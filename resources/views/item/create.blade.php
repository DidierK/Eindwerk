@extends('layouts.app')

@section('content')
<v-container v-cloak>
    <v-header class="header--page" >
        <h1 class="header__title">Spullen toevoegen</h1>
    </v-header>
    <v-form class="form--item-creation" action="{{ url('user/item') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <v-form-item>
            <v-select label="Wat wil je verhuren?" name="item_names" class="input--full-width">
                @foreach ($item_names as $item_name)
                <v-option>{{ $item_name }}</v-option>
                @endforeach
            </v-select>
        </v-form-item>
        <p class="text--small">Staat uw item er nog niet tussen? <a href="#">Laat het ons weten en doe een suggestie!</a></p>
        <v-form-item>
            <v-input type="text" label="Prijs/dag" class="input--text-default input--price" placeholder="50.00" name="price"></v-input><span>€</span>
        </v-form-item>
        <v-form-item>
            <v-input type="file" label="Foto" class="input--full-width" name="thumbnail"></v-input>
        </v-form-item>
        <p class="text--small">Opmerking: Dit is de foto die leners als eerste te zien krijgen wanneer ze jou item vinden. Later kan je nog meer foto's toevoegen.</p>
        <v-form-item>
            <v-input type="textarea" label="Meer informatie" class="input--textarea-default input--full-width" placeholder="Wat moet de huurder weten over jou materiaal?" name="description"></v-input>
        </v-form-item>
        <v-form-item>
            <v-input type="submit" value="Toevoegen"></v-input>
        </v-form-item>
    </v-form>
</v-container>
@endsection