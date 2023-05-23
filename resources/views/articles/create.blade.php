@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-article.css">
    <title>Create Article</title>
</head>
@section('content')
    <div id="wrapper" class="contentCreateArticle">
        <div id="page" class="container">
            <h1 style="width: 400px">Create A New Article</h1>

            <form method="POST" action="{{route('articles.store')}}">
                @csrf

                 <div class="Field">
                     <label class="Label"><strong> Title </strong> </label>
                     <input class="input @error('title') is-danger @enderror" style="width: 320px; height: 50px; font-size: 30px; border-radius: 10px" type="text" name="title" value="{{old('title')}}"></input>
                     <div class="control">
                         @error('title')
                         <p class="help is-danger" style="color: red;"><strong>{{ $errors->first('title') }}</strong> </p>
                         <p style="color: red;"><strong>It seems like you didn't fill in this field.</strong></p>
                         @enderror
                     </div>
                 </div>

                <br>

                <div class="Field">
                    <label class="Label"><strong>Excerpt </strong> </label>

                    <div class="control">
                        <textarea class="textarea @error('excerpt') is-danger @enderror" style="width: 320px; height: 130px; font-size: 30px; border-radius: 10px" type="text" name="excerpt"}>{{old('excerpt')}}</textarea>
                        @error('excerpt')
                        <p style="color: red;" class="help is-danger"><strong>{{ $errors->first('excerpt') }}</strong></p>
                        <p style="color: red;"><strong>It seems like you didn't fill in this field.</strong></p>
                        @enderror
                    </div>
                </div>

                <br>

                <div class="Field">
                    <label class="Label"> <strong>Body</strong></label>

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
                        <button style="position: relative;top: 20px; width: 320px; height: 30px; background-color: gray; font-size: 15px" class="button is-link" type="submit"><strong>Submit</strong></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
