@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-faq.css">
    <title>FAQ's</title>
</head>
@section('content')
    <body>
    <div class="contentCreateFaq">
        <a href="/faq" >
            <button>All FAQ's</button>
        </a>
        <div>
        <ul>
                <h1> {{$faq->question}}</h1>
                <h3> {{$faq->answer}}</h3>

                <h3 >
                    <a href="{{$faq->link}}">
                        {{$faq->link}}
                    </a>
                </h3>
        </ul>
        </div>
        <a href="/faq/{{ $faq->id }}/edit" >
            <button>EDIT</button>
        </a>
        <img class="eviedehond" src="/img/evie.jpg" alt="fotoEvie" width="300px" height="300px">

    </div>
    </body>
@endsection
