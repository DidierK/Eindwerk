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
                </label>
                <select label="Wat wil je verhuren?" name="item_names" class="input--full-width">
                    @foreach ($item_names as $item_name)
                    <option>{{ $item_name }}</option>
                    @endforeach
                </select>
                <p class="u--textSmall u--mt-8">Staat uw item er nog niet tussen? <a href="#">Laat het ons weten en doe een suggestie!</a></p>
            </v-form-item>

            <v-form-item class="FormItem">
                <label class="FormItem__label">
                    <p>Prijs/dag</p>
                </label>
                <input class="Input Input--text-default Input--price" type="text" placeholder="50.00" name="price" /><span>€</span>
            </v-form-item>

            <v-form-item class="FormItem">
                <input class="Input u--fullWidth" type="file" label="Foto" name="thumbnail" />
            </v-form-item>

            <v-form-item class="FormItem">
                <label class="FormItem__label">
                    <p>Meer informatie</p>
                </label>
                <textarea class="Input Input--text-default"></textarea>
            </v-form-item>

            <v-form-item class="FormItem">
                <label class="FormItem__label">
                    <p>Voor welke vakanties is dit materiaal geschikt?</p>
                </label>
                <input type="checkbox" name="chk_group" value="value1" />Value 1<br />
                <input type="checkbox" name="chk_group" value="value2" />Value 2<br />
                <input type="checkbox" name="chk_group" value="value3" />Value 3<br />
            </v-form-item>

            <v-form-item>
                <v-input type="submit" class="Button Button--default Button--blue u--sizeFull" value="Toevoegen"></v-input>
            </v-form-item>
        </v-form>
    </v-container>
</v-content>
@endsection