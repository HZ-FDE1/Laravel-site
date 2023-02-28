@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-faq.css">
    <title>Create FAQ</title>
</head>
@section('faq_create')
    <div id="wrapper" class="contentCreateFaq">
        <div id="page" class="container">
            <h1>Create A New Article</h1>

            <form method="POST" action="/faq">
                @csrf

                <div class="Field">
                    <label class="Label"> Question</label>

                    <div class="control">
                        <input class="input" type="text" name="question">
                    </div>
                </div>

                <div class="Field">
                    <label class="Label"> Answer</label>

                    <div class="control">
                        <textarea class="textarea" name="answer"></textarea>
                    </div>
                </div>

                <div class="Field">
                    <label class="Label"> Link</label>

                    <div class="control">
                        <textarea class="textarea" name="link"></textarea>
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
