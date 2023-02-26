@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-article.css">
    <title>Article</title>
</head>
@section('article_content')
    <body>
    <div class="ArticleContent">
        <ul>
                <h1> {{$article->title}}</h1>
                <h3> {{$article->body}}</h3>
        </ul>
    </div>
    <img class="eviedehond" src="/img/evie.jpg" alt="fotoEvie" width="300px" height="300px">
    </body>
@endsection
