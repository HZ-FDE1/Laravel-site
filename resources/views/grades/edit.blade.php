@extends('layout')

<head>
    <link rel="stylesheet" href="/css/style-article.css">
    <title>Change Grade</title>
</head>
@section('content')
    <div id="wrapper" class="contentCreateArticle">
        <div id="page" class="container">
            <h1>Update Your Grade</h1>

            <form method="POST" action="{{route('grades.update' , $grade)}}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="course_name">Course Name</label>

                    <div class="control">
                        <textarea class="textarea" name="course_name" id="course_name">{{$grade->course_name}}</textarea>

                        @if ($errors->has('course_name'))
                            <p class="error">{{ $errors->first('course_name') }}</p>
                        @endif
                    </div>
                </div>

                <div class="Field">
                    <label class="Label"> Test Name</label>

                    <div class="control">
                        <textarea class="textarea @error('test_name') is-danger @enderror" name="test_name">{{ $grade->test_name }} </textarea>
                        @error('test_name')
                        <p class="help is-danger">{{ $errors->first('test_name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="Field">
                    <label class="Label"> Your Grade</label>

                    <div class="control">
                        <textarea class="textarea @error('best_grade') is-danger @enderror" name="best_grade">{{ $grade->best_grade }} </textarea>
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
            <form method="POST" action="{{route('grades.destroy' , $grade)}}">
                @csrf
                @method('DELETE')
                <button class="button is-link" type="submit">Delete</button>
            </form>
        </div>
@endsection


