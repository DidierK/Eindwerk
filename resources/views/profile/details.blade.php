@extends('layouts.auth_area')

@section('auth_content')
<div>
  <div class="Subhead">
    <h2 class="Subhead__heading">Algemene informatie</h2>
    <span></span>
  </div>
  @if ($errors->any())
  <div class="Errors">
    <h3>Informatie niet geupdate</h3>
    <ul>
      @foreach ($errors->all() as $message)
      <li><p>{{ $message }}</p></li> 
      @endforeach
    </ul>
  </div>
  @endif

  <v-form class="Form Form--settings" action="{{ url('user/' . Auth::id()) }}" method="post">
   <input type="hidden" name="_method" value="PUT">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!--  
                    TODO: CHECK FOR EACH VALUE IF IT IS NOT EMPTY, IF IT IS EMPTY THE DATA THEN JUST LEAVE VALUE EMPTY AND IT WILL SHOW THE PLACEHOLDER
                  -->
                  <v-form-item class="FormItem EditProfileAvatar u--mt-0">
                    <v-input type="hidden" label="Profielfoto"></v-input>
                    <v-avatar class="Avatar Avatar--default" src="{{ Auth::user()->avatar }}&width=400&height=400"></v-avatar>
                    <input type="file" class="Button Button--default Button--white u--sizeFull u--mt-16 u--textCenter" v-on:change="add">
                  </v-form-item>
                  <div class="Column--left">
                    <v-form-item class="FormItem">
                     <v-input type="text" value="@if(!empty($user_details->name)){{$user_details->name}}@endif" class="Input Input--text-default u--fullWidth" label="Naam" placeholder="Bv. Jan Janssens" name="name"></v-input>
                   </v-form-item>

                   <v-form-item class="FormItem">
                     <v-input type="text" value="@if(!empty($user_details->email)){{$user_details->email}}@endif" class="Input Input--text-default u--fullWidth" label="Email" placeholder="voorbeeld@email.com" name="email"></v-input>
                   </v-form-item>

                   <v-form-item class="FormItem">
                     <v-input type="text" value="@if(!empty($user_details->tel)){{$user_details->tel}}@endif" class="Input Input--text-default" label="Telefoonnummer (Optioneel)" placeholder="Bv. (+32) 123456789" name="tel"></v-input>
                   </v-form-item>


                   <v-form-item class="FormItem">
                     <label class="FormItem__label" for="streetName">Adres</label>
                     <div class="Row">
                       <v-input id="streetName" type="text" value="@if(!empty($user_details->street)){{$user_details->street}}@endif" class="Input Input--text-default u--fullWidth col-3-4 u--mr-16" placeholder="Straat" name="streetName"></v-input>
                       <v-input type="text" value="@if(!empty($user_details->number)){{$user_details->number}}@endif" class="Input Input--text-default u--fullWidth" placeholder="Nr." name="houseNumber"></v-input>
                     </div>
                   </v-form-item> 


                   <v-form-item class="FormItem">
                    <div class="Row">
                      <v-input type="text" value="@if(!empty($user_details->locality)){{ $user_details->locality }}@endif" class="Input Input--text-default u--fullWidth col-2-3 u--mr-16" placeholder="Woonplaats" name="locality"></v-input>
                      <v-input type="text" value="@if(!empty($user_details->zip)){{$user_details->zip}}@endif" class="Input Input--text-default u--fullWidth" placeholder="Postcode" name="zip"></v-input>
                    </div>
                  </v-form-item> 

                  <v-form-item class="FormItem">
                   <v-input type="submit" class="Button Button--default Button--white" value="Opslaan"></v-input>
                 </v-form-item>
               </div>
             </v-form>
             <div class="Subhead Subhead--spacious">
              <h2 class="Subhead__heading">Account instellingen</h2>
              <span></span>
            </div>
            <p>Indien u geen items meer wilt lenen of verlenen kan u uw account hier verwijderen.</p>
            <v-form class="Form Form--settings u--mt-8" action="{{ url('user/' . Auth::id()) }}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <v-button class="Button Button--danger">Account verwijderen</v-button>
            </v-form>

          </div>  
          @endsection