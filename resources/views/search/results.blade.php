@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="page-header page-header-middle">
            <h1> <small> Zoekresultaten voor : / {{ $keyword }}</small></h1>
        </div>

        <div class="row">
        @foreach ($results as $result)

            <div class="col-md-3 home_articles ">
                <div class="article_box">

                    <p class="article_name">{{ $result->naam }}</p>
                    <div>
                        <a href="/article/{{ $result->id }}"><img class="project_upload" src="/uploads/articles/{{ $result->file_name1 }}"></a>

                    </div>
                    <div class="article_info">
                        <p>{{ $result->prijs }} € / dag</p><p>{{ $result->user_name }}</p>
                    </div>
                </div>
            </div>

        @endforeach
        </div>

    </div>

@endsection