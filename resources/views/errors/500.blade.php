@extends('layout')
<head>
    <link rel="stylesheet" href="css/style-error.css">
    <title>Server Error</title>
</head>
@section('content')
    <main>
            <div class="errorCode1">
                <h1 class="errorTitle1">500 Internal Server Error</h1>
                <div class="errorCaption1">
                    <h1>Oops!  It looks like the server there is something wrong with the server. Try again later!</h1>
                    <h2>We are sorry. You can always try to refresh the page, or go back to the Home Page! </h2>
                    <a href="{{ url('/') }}">
                        <button cLass="errorButton"><strong>Home Page</strong></button>
                    </a>
                </div>
            </div>
            <img class="serverGIF" src="/img/hardware1.gif">
    </main>
@endsection
