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

                    <div class="col-md-3 home_articles ">
                    <div class="article_box">

                        <p class="article_name">{{ $article->naam }}</p>
                        <div>
                            <a href="/article/{{ $article->id }}"><img class="project_upload" src="/uploads/articles/{{ $article->file_name1 }}"></a>

                        </div>
                        <div class="article_info">
                            <p>{{ $article->prijs }} € / dag</p><p>{{ $article->user_name }}</p>
                        </div>
                    </div>
                    </div>

                @endforeach
            </div>
        </div>



    </div>





@endsection
