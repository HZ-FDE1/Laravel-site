@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-article.css">
    <title>Create Article</title>
</head>
@section('content')
    <div id="wrapper" class="contentCreateArticle">
        <div id="page" class="container">
            <h1>Create A New Article</h1>

            <form method="POST" action="{{route('articles.store')}}">
                @csrf

                 <div class="Field">
                     <label class="Label"> Title</label>

                     <div class="control">
                         <input class="input @error('title') is-danger @enderror" type="text" name="title" value="{{old('title')}}">

                         @error('title')
                         <p class="help is-danger">{{ $errors->first('title') }}</p>
                         @enderror
                     </div>
                 </div>

                <div class="Field">
                    <label class="Label"> Excerpt</label>

                    <div class="control">
                        <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt"}>{{old('excerpt')}}</textarea>
                        @error('excerpt')
                        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="Field">
                    <label class="Label"> Body</label>

                    <div class="control">
                        <textarea class="textarea @error('excerpt') is-danger @enderror" name="body">{{old('excerpt')}}</textarea>
                        @error('excerpt')
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
        </div>
    </div>
@endsection
