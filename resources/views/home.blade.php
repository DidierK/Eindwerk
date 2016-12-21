@extends('layouts.app')

@section('content')
<div class="intro">



        <div class="introtext">

            <h1>Travel<span>Share</span></h1>
            <h5>The cheapest way to discover the world</h5>


        </div>

        <div class="searcharea">

            <h3>Wat zoekt u ?</h3>
            <form class="form-inline" action="">
            <div class="form-group">
                <input class="search_input" type="text">
                <button type="submit" class="btn btn-default search_button" >Zoeken</button>
            </div>
            </form>
        </div>

</div>

    <div class="container">

        <div class="content">
            <h1>Materiaal te huur</h1>

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
