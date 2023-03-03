@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-article.css">
    <title>Add Grade</title>
</head>
@section('content')
    <div id="wrapper" class="contentCreateArticle">
        <div id="page" class="container">
            <h1>Add a new Grade!</h1>

            <form method="POST" action="/grades">
                @csrf

                <div class="Field">
                    <label class="Label"> Course Name</label>

                    <div class="control">
                        <input class="input @error('course_name') is-danger @enderror" type="text" name="course_name" value="{{old('course_name')}}">

                        @error('course_name')
                        <p class="help is-danger">{{ $errors->first('course_name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="Field">
                    <label class="Label"> Test Name</label>

                    <div class="control">
                        <textarea class="textarea @error('test_name') is-danger @enderror" name="test_name"}>{{old('test_name')}}</textarea>
                        @error('test_name')
                        <p class="help is-danger">{{ $errors->first('test_name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="Field">
                    <label class="Label"> Best Grade</label>

                    <div class="control">
                        <textarea class="textarea @error('best_grade') is-danger @enderror" name="best_grade">{{old('best_grade')}}</textarea>
                        @error('best_grade')
                        <p class="help is-danger">{{ $errors->first('best_grade') }}</p>
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
