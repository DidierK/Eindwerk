@extends('layouts.app')

@section('content')
<v-content>
    <v-container class="Container" v-cloak>
        <div class="Subhead">
            <h2 class="Subhead__heading">Spullen toevoegen</h2>
            <span></span>
        </div>
        <!-- Form: Item creation -->
        <v-form class="Form Form--item-creation" action="{{ url('user-item') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <v-form-item class="FormItem">
                <label class="FormItem__label">
                    <p>Wat wil je verhuren?</p>     
                <select label="Wat wil je verhuren?" name="item_names" class="Input Input--text-default u--sizeHalf">
                    @foreach ($item_names as $item_name)
                    <option>{{ $item_name }}</option>
                    @endforeach
                </select>
                </label>
                <p class="u--textSmall u--mt-8">Staat je materiaal er nog niet tussen? <a href="/contact">Laat het ons weten en doe een suggestie!</a></p>
            </v-form-item>

            <v-form-item class="FormItem">
                <label class="FormItem__label">
                    <p>Prijs/dag</p>
                <input class="Input Input--text-default Input--price" type="text" placeholder="50.00" name="price" /><span>€</span>
                </label>
            </v-form-item>

            <v-form-item class="FormItem">
                <input class="Input u--fullWidth" type="file" label="Foto" name="thumbnail" />
            </v-form-item>

            <v-form-item class="FormItem">
                <label class="FormItem__label">
                    <p>Meer informatie (optioneel)</p>
                <textarea class="Input Input--textarea-default u--sizeHalf" placeholder="Vertel hier iets meer over je materiaal..."></textarea>
                </label>
            </v-form-item>

            <v-form-item class="FormItem">
                <label class="FormItem__label">
                    <p>Voor welke vakanties is dit materiaal geschikt? (optioneel)</p>
                </label>
                <div class="u--mb-8">
                @foreach ($vacation_names as $vacation_name)
                <input type="checkbox" name="vacations"> {{ $vacation_name }}<br />
                @endforeach
                </div>
                <p>Indien je hier niets aanduid zal het materiaal beschouwd worden als geschikt voor "Alle vakanties".</p>
            </v-form-item>

            <v-form-item>
                <v-input type="submit" class="Button Button--primary" value="Toevoegen"></v-input>
            </v-form-item>
        </v-form>
    </v-container>
</v-content>
@endsection