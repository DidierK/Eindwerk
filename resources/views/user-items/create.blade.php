@extends('layouts.app')

@section('content')
<v-content>
    <v-container class="Container" v-cloak>
        <div class="Subhead">
            <h2 class="Subhead__heading">Spullen toevoegen</h2>
            <span></span>
        </div>
        @if ($errors->any())
        <div class="Errors">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form: Item creation -->
        <v-form class="Form Form--item-creation" action="{{ url('user-item') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <v-form-item class="FormItem u--sizeHalf">
                <label class="FormItem__label">
                    <p>Wat wil je verhuren?</p>     
                    <select label="Wat wil je verhuren?" name="item_name" class="Input Input--text-default u--sizeFull">
                        @foreach ($item_names as $item_name)
                        <option>{{ $item_name }}</option>
                        @endforeach
                    </select>
                </label>
                <p class="u--textSmall u--mt-8">Staat je materiaal er nog niet tussen? <a href="/contact">Laat het ons weten en doe een suggestie!</a></p>
            </v-form-item>

            <v-form-item class="FormItem u--sizeHalf">
                <label class="FormItem__label">
                    <p>Prijs/dag</p>
                    <input class="Input Input--text-default Input--price" type="text" placeholder="50.00" name="price" /><span>€</span>
                </label>
            </v-form-item>

            <v-form-item class="FormItem u--sizeHalf">
                <label class="FormItem__label">
                    <p>Foto</p>
                    <input class="Input" type="file" name="thumbnail" accept="image/*" />
                </label>
            </v-form-item>

            <v-form-item class="FormItem u--sizeHalf">
                <label class="FormItem__label">
                    <p>Meer informatie (optioneel)</p>
                    <textarea class="Input Input--textarea-default u--sizeFull" placeholder="Vertel hier iets meer over je materiaal..." name="description"></textarea>
                </label>
            </v-form-item>

            <v-form-item class="FormItem">
                <label class="FormItem__label">
                    <p>Voor welke vakanties is dit materiaal geschikt? (optioneel)</p>
                </label>
                <div class="u--mb-8">
                    @foreach ($vacations as $vacation)
                    <input type="checkbox" name="vacations[]" value="{{ $vacation->id }}"> {{ $vacation->name }}<br />
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