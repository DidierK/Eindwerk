@extends('layouts.app')

@section('content')
<v-container class="Container" v-cloak>

    <!-- Header -->
    <v-header class="Header Header--page" >
        <h1 class="Header__title">Spullen toevoegen</h1>
    </v-header>

    <!-- Form: Item creation -->
    <v-form class="Form Form--item-creation" action="{{ url('user/item') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         
         <v-form-item class="FormItem">
            <v-select label="Wat wil je verhuren?" name="item_names" class="input--full-width">
                @foreach ($item_names as $item_name)
                <v-option>{{ $item_name }}</v-option>
                @endforeach
            </v-select>
        </v-form-item>
        <p class="u--textSmall">Staat uw item er nog niet tussen? <a href="#">Laat het ons weten en doe een suggestie!</a></p>
        
        <v-form-item class="FormItem">
            <v-input class="Input Input--text-default Input--price" type="text" label="Prijs/dag"placeholder="50.00" name="price"></v-input><span>€</span>
        </v-form-item>
        
        <v-form-item class="FormItem">
            <v-input class="Input u--fullWidth" type="file" label="Foto" name="thumbnail"></v-input>
        </v-form-item>
        <p class="u--textSmall">Opmerking: Dit is de foto die leners als eerste te zien krijgen wanneer ze jou item vinden. Later kan je nog meer foto's toevoegen.</p>
        
        <v-form-item class="FormItem">
            <v-input class="Input Input--textarea-default u--fullWidth" type="textarea" label="Meer informatie" placeholder="Wat moet de huurder weten over jou materiaal?" name="description"></v-input>
        </v-form-item>
        
        <v-form-item>
            <v-input type="submit" value="Toevoegen"></v-input>
        </v-form-item>
    </v-form>

</v-container>
@endsection