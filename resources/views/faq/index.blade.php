@extends('layout')

    <head>
        <link rel="stylesheet" href="css/style-faq.css">
        <title>FAQ</title>
    </head>
@section('faq_content')
    <body>
    <div class="faq-list">
        <a href="/faq/create" >
            <button> Create a FAQ here!</button>
        </a>
        <a>
            @foreach($faq as $faq)
                <h2>  {{ $faq->question }} </h2>
            @endforeach
        </a>
    </div>


    <Main>
        <h2 class="faqtitle">frequently asked questions</h2>

        <div class="flip-box1">
            <div class="flip-box-inner1">
                <div class="flip-box-front1">
                    <h2 class="printtitle">Hoe print je iets uit op HZ?</h2>
                </div>
                <div class="flip-box-back1">
                    <ol>
                        <li>Kies je document die je wilt uitprinten.</li>
                        <li>Stuur een request naar de printer.</li>
                        <li>Ga met je studentenpas naar de printer.</li>
                        <li>Scan je studentenpas en selecteer je bestand.</li>
                        <li>Print daarna je bestand uit!</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flip-box2">
            <div class="flip-box-inner2">
                <div class="flip-box-front2">
                    <h2 class="scantitle">Hoe scan je een Document naar je laptop?</h2>
                </div>
                <div class="flip-box-back2">
                    <h2>Hier een video!</h2>
                    <a class="ScanLink" href="https://www.youtube.com/watch?v=fBV5OeNGiCU&t=115s"> Youtube</a>
                </div>
            </div>
        </div>

        <div class="flip-box3">
            <div class="flip-box-inner3">
                <div class="flip-box-front3">
                    <h2 class="scantitle">Hoe koop je iets in de HZ web shop?</h2>
                </div>
                <div class="flip-box-back3">
                    <ol class="shoptext">
                        <li>Ga naar <a class="shoplink"
                                       href="https://webshop.hz.nl/webshopapp/defaulten.aspx?menu=082076044027019251066025111065201099237062130097">HZ
                                Web Shop.</a> </li>
                        <li>Klik op het producht dat je wilt kopen/heen wilt gaan. </li>
                        <li>Doe het product in je winkelwagen.</li>
                        <li>Klik daarna op Checkout, en betaal je!</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flip-box4">
            <div class="flip-box-inner4">
                <div class="flip-box-front4">
                    <h2 class="covidtitle">Heb je Covid-19 opgelopen? Hier wat instructies!</h2>
                </div>
                <div class="flip-box-back4">
                    <h2>Covid-19? Geen stress! Hier wat instructies en een stappenplan!</h2>
                    <a class="CovidLink" href="https://hz.nl/actualiteiten/coronavirus/positief-getest"> Instructies HZ</a>
                </div>
            </div>
        </div>

        <div class="flip-box5">
            <div class="flip-box-inner5">
                <div class="flip-box-front5">
                    <h2 class="restitle">Hoe reserveer je een ruimte?</h2>
                </div>
                <div class="flip-box-back5">
                    <ol class="restext">
                        <li>Klik →<a class="reslink"
                                     href="https://hzuniversity.topdesk.net/tas/public/ssp/52a63378-addd-4b21-b808-571200fd8d0c">hier</a>←
                            om een reservering te maken! </li>
                        <li>Kies dan of je een werkplek, werkruimte, of een AV middel wilt reserveren. </li>
                        <li> Selecteer de dag en tijdstip.</li>
                        <li> Reserveren!</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flip-box6">
            <div class="flip-box-inner6">
                <div class="flip-box-front6">
                    <h2 class="cartitle">Waar mag je parkeren? En hoe?</h2>
                </div>
                <div class="flip-box-back2">
                    <h2>Hier een link met alle instructies!</h2>
                    <a class="CarLink" href="https://hz.nl/over-de-hz/contact/middelburg#panel1185176"> HZ Parkeren</a>
                </div>
            </div>
        </div>
    </Main>
    </body>
@endsection
