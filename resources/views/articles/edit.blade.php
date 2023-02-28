@extends('layout')

    <head>
        <link rel="stylesheet" href="/css/style-article.css">
        <title>Create Article</title>
    </head>
    @section('article_create')
        <div id="wrapper" class="contentCreateArticle">
            <div id="page" class="container">
                <h1>Update An Article</h1>

                <form method="POST" action="/articles/{{ $article->id }}">
                    @csrf
                    @method('PUT')
                    <div class="Field">
                        <label class="Label"> Title</label>

                        <div class="control">
                            <input class="input" type="text" name="title" value="{{ $article->title }}">
                        </div>
                    </div>

                    <div class="Field">
                        <label class="Label"> Excerpt</label>

                        <div class="control">
                            <textarea class="textarea" name="excerpt">{{ $article->excerpt }}</textarea>
                        </div>
                    </div>

                    <div class="Field">
                        <label class="Label"> Body</label>

                        <div class="control">
                            <textarea class="textarea" name="body">{{ $article->body }}</textarea>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection

