@extends('layouts.app')

@section('content')
<div class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Reismateriaal was nog nooit eenvoudiger</h1>
        <div class="search-form">
        {!! Form::open(['url' => 'foo/bar', 'class' => 'form-inline']) !!}
        {!! Form::text('search-box', null, array('placeholder'=>'Wat hebt u nodig?')) !!}
        {{Form::button('Zoeken', array('type' => 'submit', 'class' => ''))}}
        {!! Form::close() !!}
        </div> 
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