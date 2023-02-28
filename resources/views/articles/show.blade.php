@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-article.css">
    <title>Articles</title>
</head>
@section('article_content')
    <body>
    <div class="ArticleContent">
        <div>
            <button href="articles/create">Create An Article Here!</button>
        </div>

        <div>
        <ul>
                <h1> {{$article->title}}</h1>
                <h3> {{$article->body}}</h3>
        </ul>
        </div>
    </div>
    <img class="eviedehond" src="/img/evie.jpg" alt="fotoEvie" width="300px" height="300px">
    </body>
@endsection
