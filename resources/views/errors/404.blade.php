@extends('layout')
<head>
    <link rel="stylesheet" href="css/style-error.css">
    <title>Page Not Found!</title>
</head>
@section('content')
    <main>
    <div class="errorCode1">
            <h1 class="errorTitle">404 PAGE NOT FOUND</h1>
        <div class="errorCaption">
            <h1>Oh No! It looks like this page does not exist or got deleted. Don't worry!</h1>
            <h2>Check if the URL has been filled in correctly, or return to the Home Page. </h2>
            <a href="{{ url('/') }}">
            <button cLass="errorButton"><strong>Home Page</strong></button>
            </a>

        </div>
    </div>
        <img class="panicGIF" src="/img/spongebob-panic.gif">
    </main>
@endsection
