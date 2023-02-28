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
                            <input class="input @error('title') is-danger @enderror" type="text" name="title" value="{{ $article->title }} {{old('title')}}">
                            @error('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="Field">
                        <label class="Label"> Excerpt</label>

                        <div class="control">
                            <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt">{{ $article->excerpt }} {{old('excerpt')}}</textarea>
                            @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="Field">
                        <label class="Label"> Body</label>

                        <div class="control">
                            <textarea class="textarea @error('excerpt') is-danger @enderror" name="body">{{ $article->body }} {{old('excerpt')}}</textarea>
                            @error('body')
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                        <form method="POST" action="/articles/{{$article->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="button is-link" type="submit">Delete</button>
                        </form>
        </div>
    @endsection

