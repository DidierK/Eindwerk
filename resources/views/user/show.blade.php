@extends('layouts.app')

@section('content')
<v-container class="Container u--pt-32" v-cloak>
    <div class="UserProfile Row-sm">
        <div class="Col-sm-1-4">
            <img class="Avatar Avatar--default" src="{{ $user_details->avatar }}&width=400&height=400">
            <div class="u--mt-16">
                <h2>{{ $user_details->name }}</h2>
                <ul class="u--pn">
                    <li>{{ $user_details->email }}</li>
                </ul>
            </div>
        </div>
        <div class="Col-sm-3-4">
            <div class="Subhead">
                <h2 clas="Subhead__heading">Spullen van {{ $user_details->name }}</h2>
            </div>
            <ul class="u--pn">
            <div class="UserProfile Row-sm">
                @foreach($user_items as $user_item)
                <li class="Col-sm-1-2 Col-md-1-3">
                    <v-link class="Link u--linkClean" link="{{ url('user-item/' . $user_item->id)}}">
                        <v-card class="Card u--pn">
                            <v-img class="Image Image--my-items" background="{{ $user_item->thumbnail }}"></v-img>
                            <div class="MyItem__info u--flex u--flexJustifyContentSpaceBetween">
                                <h3 class="MyItem__title">LOL</h3>
                            </div>
                        </v-card>
                    </v-link>   
                </li>
                @endforeach 
                </div>
            </ul>
        </div> 
    </div>
</v-container>
@endsection