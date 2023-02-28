@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-article.css">
    <title>Article</title>
</head>
@section('article_content')
    <body>
    <div class="ArticleContent">
        <a href="/articles/create" >
            <button> Create an article here!</button>
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

