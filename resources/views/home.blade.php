@extends('layouts.app')

@section('content')
<div class="intro">

    <div class="container">

        <div class="introtext">
            <h1>Welkom bij TravelShare</h1>
            <h2>Zoek reismateriaal in uw buurt</h2>
        </div>


        <div class="row">
        @foreach ($articles as $article)

                <div class="col-md-4 ">
                    <h4>{{ $article->naam }}</h4>
                    <h5>Prijs per dag : {{ $article->prijs }} €</h5>
                    <h5>{{ $article->user_name }}</h5>


                    <div>
                        <img class="project_upload" src="/uploads/articles/{{ $article->file_name1 }}">
                    </div>

                    <a href="/article/{{ $article->id }}"><button class="btn btn-primary details">Details</button></a>
                </div>

        @endforeach
        </div>
    </div>


</div>


@endsection
