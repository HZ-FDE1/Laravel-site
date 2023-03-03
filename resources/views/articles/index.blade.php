@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-article.css">
    <title>Article</title>
</head>
@section('content')
    <body>
    <div class="ArticleContent">
        <a href="/articles/create" >
            <button> Make an Article here!</button>
        </a>
        <ul>
            @foreach($articles as $article)
                <h1>
                    <a href="/articles/{{ $article->id }}"> {{$article->title}} </a>
                </h1>
                <h2> {{$article->excerpt}}</h2>


            @endforeach
        </ul>
    </div>
    <img class="eviemain" src="/img/evie.jpg" alt="fotoEvie" width="450px" height="900px">
    </body>
@endsection

