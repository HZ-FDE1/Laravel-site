@extends('layout')

    <head>
        <link rel="stylesheet" href="css/style-blog.css">
        <title>Blog</title>
    </head>

@section('content')
    <body>
    <Main>
        <h2 class="BlogTitle">Blog</h2>

        <div>
            <label for="check1" class="togButton1">
                <h3 class="choicehead">Waarom heb ik voor ICT gekozen?</h3>
            </label>
            <input type="checkbox" class="togCheck1" id="check1" />
            <div class="togContent1">
                <p class="choicetext">Momenteel is er veel vraag naar ICT'ers, zo weet ik dat ik
                    na het behalen van mijn diploma snel aan de slag kan! Ook is het inkomen van een ICT'er
                    best hoog, en dat maakt het nog beter! Maar het belangrijkste voor mij is, is dat ik
                    het met plezier ga doen. En op het moment heb ik het echt naar mijn zin! Na het behalen
                    van mijn diploma, wil ik mij gaan specialiseren als Ethisch Hacker. Daarvoor moet je een
                    diploma ICT voor hebben.
                </p>
            </div>
        </div>

        <div>
            <label for="check2" class="togButton2">
                <h3 class="swothead">Mijn persoonlijke SWOT analyse.</h3>
            </label>
            <input type="checkbox" class="togCheck2" id="check2" />
            <div class="togContent2">
                <p>
                <ol class="swottext">
                    <li>Strengths:
                        <ul>
                            <li>Doorzettingsvermogen (haal altijd wel het beste uit mezelf</li>
                            <li>Concentratie: Kan in 1 stuk door voor een lange tijd werken, zonder afgeleid te worden. </li>
                            <li>Georganiseerd: Ik probeer altijd zo georganiseerd mogelijk te werken, om stress en fouten te
                                vermijden.</li>
                        </ul>
                    </li>
                    <li>Weaknesses: Meer zelfverzekerd zijn over wat ik doe, soms vraag ik om bevestiging. Maar achteraf blijkt
                        het dat het niet nodig was.</li>
                    <li>Opportunities: Door een stage/project een goede werkgever kan gaan vinden.</li>
                    <li>Threats: Deadlines niet halen omdat je in een groep moet werken. Wanneer andere hun zaken niet op orde
                        hebben, gaat dat invloed hebben op het resultaat.</li>
                </ol>
                </p>
            </div>
        </div>

        <div>
            <label for="check3" class="togButton3">
                <h3 class="prohead">Heb ik ervaring met programmeren?</h3>
            </label>
            <input type="checkbox" class="togCheck3" id="check3" />
            <div class="togContent3">
                <p class="protext">Dit is de eerste keer dat ik iets met HTML en CSS doe.
                    2 weken geleden is het de eerste keer dat ik het ooit had gezien/gebruikt.
                    Maar ik vind het oprecht super leuk en interessant om te doen.
                    Het meest interessantste vind ik dat je letterlijk alles kan maken wat je wilt!</p>
            </div>
        </div>

        <div>
            <label for="check4" class="togButton4">
                <h3 class="feedhead">Mijn feedback op mijn SKC.</h3>
            </label>
            <input type="checkbox" class="togCheck4" id="check4" />
            <div class="togContent4">
                <p class="feedtext"> Mevrouw Weertjes had een positieve feedback op mijn SWOT,
                    zo vond ze het goed dat ik de risico's herkende van het werken in een groep. Ook vond
                    ze het interessant dat ik wilde gaan doen met Cyber Security, ze legde toen ook uit
                    dat we "Cyber Security" pas in het tweede jaar kregen. Ook gaf ze de tip me om veel
                    feedback te vragen! Zo leer ik het meeste en een ontwikkelingspunt van deze opleiding!
                    Zelf ben ik blij met de feedback die mevrouw Weertjes heeft gegeven!
                </p>
            </div>
        </div>

        <div>
            <label for="check5" class="togButton5">
                <h3 class="arthead">Hier een Artikel over Cyber Security!</h3>
            </label>
            <input type="checkbox" class="togCheck5" id="check5" />
            <div class="togContent5">
                <p class="arttext">Klik <a class="artlink"
                                           href="https://www.compact.nl/articles/cyber-security-een-onderwerp-voor-aan-de-bestuurstafel/">hier</a>
                    voor een artikel over Cyber Security!</p>
            </div>
        </div>

    </Main>
    </body>
@endsection
