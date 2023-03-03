@extends('layout')

<head>
    <link rel="stylesheet" href="/css/style-faq.css">
    <title>Create FAQ</title>
</head>
@section('content')
    <div id="wrapper" class="contentCreateFaq">
        <div id="page" class="container">
            <h1>Update An FAQ!</h1>

            <form method="POST" action="/faq/{{ $faq->id }}">
                @csrf
                @method('PUT')
                <div class="Field">
                    <label class="Label"> Question</label>

                    <div class="control">
                        <input class="input @error('question') is-danger @enderror" type="text" name="question" value="{{ $faq->question }} {{old('question')}}">
                        @error('question')
                        <p class="help is-danger">{{ $errors->first('question') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="Field">
                    <label class="Label"> Answer</label>

                    <div class="control">
                        <textarea class="textarea @error('answer') is-danger @enderror" name="answer">{{ $faq->answer }} {{old('answer')}}</textarea>
                        @error('answer')
                        <p class="help is-danger">{{ $errors->first('answer') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="Field">
                    <label class="Label"> Link</label>

                    <div class="control">
                        <textarea class="textarea" name="body">{{ $faq->link }} {{old('link')}}</textarea>
                        <p class="help is-danger">{{ $errors->first('link') }}</p>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <form method="POST" action="/faq/{{$faq->id}}">
                @csrf
                @method('DELETE')
                <button class="button is-link" type="submit">Delete</button>
            </form>
        </div>
@endsection
