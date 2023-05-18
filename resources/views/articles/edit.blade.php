@extends('layout')

    <head>
        <link rel="stylesheet" href="/css/style-article.css">
        <title>Create Article</title>
    </head>
    @section('content')
        <div id="wrapper" class="contentCreateArticle">
            <div id="page" class="container">
                <h1>Update An Article</h1>

                <form method="POST" action="{{route('articles.update' , $article)}}">
                    @csrf
                    @method('PUT')
                    <div class="Field">
                        <label class="Label"> Title</label>

                            <div class="control">
                                <input class="input @error('title') is-danger @enderror" style="width: 320px; height: 50px; font-size: 30px; border-radius: 10px" type="text" name="title" value="{{old('title')}}"></input>

                                @error('title')
                                <p class="help is-danger" style="color: red;"><strong>{{ $errors->first('title') }}</strong> </p>
                                <p style="color: red;"><strong>It seems like you didn't fill in this field.</strong></p>
                                @enderror
                            </div>
                        </div>

                        <div class="Field">
                            <label class="Label"> Excerpt</label>

                            <div class="control">
                                <textarea class="textarea @error('excerpt') is-danger @enderror" style="width: 320px; height: 130px; font-size: 30px; border-radius: 10px" type="text" name="excerpt"}>{{old('excerpt')}}</textarea>
                                @error('excerpt')
                                <p style="color: red;" class="help is-danger"><strong>{{ $errors->first('excerpt') }}</strong></p>
                                <p style="color: red;"><strong>It seems like you didn't fill in this field.</strong></p>
                                @enderror
                            </div>
                        </div>

                        <div class="Field">
                            <label class="Label"> Body</label>

                            <div class="control">
                                <textarea class="textarea @error('body') is-danger @enderror"  style="width: 320px; height: 200px; font-size: 30px; border-radius: 10px" type="text" name="body">{{old('body')}}</textarea>
                                @error('body')
                                <p style="color: red;" class="help is-danger"><strong>{{ $errors->first('body') }} </strong></p>
                                <p style="color: red;"><strong>It seems like you didn't fill in this field.</strong></p>
                                @enderror
                            </div>
                        </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                            <form method="POST" action="{{route('articles.destroy', $article)}}">
                            @csrf
                            @method('DELETE')
                            <button class="button is-link" type="submit">Delete</button>
                        </form>
        </div>
    @endsection

