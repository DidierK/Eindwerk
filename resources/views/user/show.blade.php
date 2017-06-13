@extends('layouts.app')

@section('content')
<v-container class="Container u--pt-32" v-cloak>
    <div class="UserProfile Row-sm">
        <div class="Col-sm-1-4">
            <img class="Avatar Avatar--default" src="{{ $user_details->avatar }}&width=400&height=400">
            <div class="UserProfile__details u--mt-16">
                <h2>{{ $user_details->name }}</h2>
                <ul class="u--pn">
                    <li class="u--pt-4"><svg aria-hidden="true" class="octicon octicon-mail" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M0 4v8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H1c-.55 0-1 .45-1 1zm13 0L7 9 1 4h12zM1 5.5l4 3-4 3v-6zM2 12l3.5-3L7 10.5 8.5 9l3.5 3H2zm11-.5l-4-3 4-3v6z"></path></svg><a href="#">{{ $user_details->email }}</a></li>
                    <li class="u--pt-4"><svg x="0px" y="0px" viewBox="0 0 578.106 578.106" width="16" height="16">
                        <path style="fill:#010002;" d="M577.83,456.128c1.225,9.385-1.635,17.545-8.568,24.48l-81.396,80.781
                        c-3.672,4.08-8.465,7.551-14.381,10.404c-5.916,2.857-11.729,4.693-17.439,5.508c-0.408,0-1.635,0.105-3.676,0.309
                        c-2.037,0.203-4.689,0.307-7.953,0.307c-7.754,0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584
                        c-25.096-10.404-53.553-26.012-85.376-46.818c-31.823-20.805-65.688-49.367-101.592-85.68
                        c-28.56-28.152-52.224-55.08-70.992-80.783c-18.768-25.705-33.864-49.471-45.288-71.299
                        c-11.425-21.828-19.993-41.616-25.705-59.364S4.59,177.362,2.55,164.51s-2.856-22.95-2.448-30.294
                        c0.408-7.344,0.612-11.424,0.612-12.24c0.816-5.712,2.652-11.526,5.508-17.442s6.324-10.71,10.404-14.382L98.022,8.756
                        c5.712-5.712,12.24-8.568,19.584-8.568c5.304,0,9.996,1.53,14.076,4.59s7.548,6.834,10.404,11.322l65.484,124.236
                        c3.672,6.528,4.692,13.668,3.06,21.42c-1.632,7.752-5.1,14.28-10.404,19.584l-29.988,29.988c-0.816,0.816-1.53,2.142-2.142,3.978
                        s-0.918,3.366-0.918,4.59c1.632,8.568,5.304,18.36,11.016,29.376c4.896,9.792,12.444,21.726,22.644,35.802
                        s24.684,30.293,43.452,48.653c18.36,18.77,34.68,33.354,48.96,43.76c14.277,10.4,26.215,18.053,35.803,22.949
                        c9.588,4.896,16.932,7.854,22.031,8.871l7.648,1.531c0.816,0,2.145-0.307,3.979-0.918c1.836-0.613,3.162-1.326,3.979-2.143
                        l34.883-35.496c7.348-6.527,15.912-9.791,25.705-9.791c6.938,0,12.443,1.223,16.523,3.672h0.611l118.115,69.768
                        C571.098,441.238,576.197,447.968,577.83,456.128z"/>
                    </svg>
                    <!-- TODO: Make it telephone format automatically -->
                    {{ $user_details->tel }}
                    </li>
                    <li class="u--pt-4"><svg aria-hidden="true" class="octicon octicon-location" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"></path></svg>{{ $user_details->street . " " . $user_details->number . ", " . $user_details->locality . " " . $user_details->zip }}</li>
                </ul>
            </div>
        </div>
        <div class="Col-sm-3-4">
            <div class="Subhead">
                <h2 clas="Subhead__heading">Alle spullen</h2>
            </div>
            <ul class="u--pn">
                <div class="UserProfile Row-sm">
                    @foreach($user_items as $user_item)
                    <li class="Col-sm-1-2 Col-md-1-3">
                        <v-link class="Link u--linkClean" link="{{ url('user-item/' . $user_item->id)}}">
                            <v-card class="Card u--pn">
                                <v-img class="Image Image--my-items" background="{{ $user_item->thumbnail }}"></v-img>
                                <div class="MyItem__info u--flex u--flexJustifyContentSpaceBetween">
                                    <h3 class="MyItem__title">{{ $user_item->name }}</h3>
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