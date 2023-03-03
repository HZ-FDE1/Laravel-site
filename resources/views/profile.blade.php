@extends('layout')
    <head>
        <link rel="stylesheet" href="css/style-profile.css">
        <title>Profile</title>
    </head>
@section('content')
    <body>
    <main>
        <h1 class="profiletitle">Wie ben ik?</h1>


        <img class="planeimg"  src="/img/plane.jpg" alt="planepic" width="300px" height="300px">
        <img class="zeelandimg" src="/img/zeeland.png" alt="Zeeland" width="150px" height="150px">

        <section>
            <article class="textprofile">
                <h2> Persoonlijke Gegevens:</h2>
                <ul>
                    <li>Uriël Baron</li>
                    <li>18 jaar</li>
                    <li>Ik woon in Tholen, Zeeland</li>
                    <li>Vooropleiding: Havo E+M</li>
                </ul>
                <h2> Mijn hobbies:</h2>
                <ul>
                    <li>Werk graag → Vastgoedbeveiliger</li>
                    <li>Gamen → Rainbow Six Siege</li>
                    <li>Rugbyen</li>
                </ul>
                <h2> Mijn Toekomst</h2>
                <ol>
                    <li> Bachelor → Specialiseren in het vakgebied Cyber Security </li>
                    <li> Defensie/ bedrijf</li>
                    <li> Eigen bedrijf/ uitgekocht worden door een groot bedrijf</li>
                </ol>
            </article>
        </section>
    </main>
    </body>
@endsection
