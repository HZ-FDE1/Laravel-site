@extends('layout')

    <head>
        <link rel="stylesheet" href="/css/style-dashboard.css">
        <title>Dashboard</title>
    </head>

@section('dashboard_content')
    <body>
    <Main>
        <h1 class="dashtitle">Dashboard</h1>
        <div>
            <table class="tabel">
                <tr>
                    <th>Blok </th>
                    <th>Cursus</th>
                    <th>EC</th>
                    <th>Toets</th>
                    <th>Cijfer</th>
                </tr>
                <tr>
                    <td rowspan="3">1</td>
                    <td>1e cursus</td>
                    </td>
                    <td>5</td>
                    <td>Geschreven Tentamen</td>
                    <td class="voldoende">8.5</td>
                </tr>
                <tr>
                    <td rowspan="2"> 2e curses</th>
                    <td>5</th>
                    <td>Geschreven Tentamen</th>
                    <td class="voldoende">6.2</td>
                </tr>
                <tr>
                    <td>2,5</td>
                    <td>assesment</td>
                    <td class="voldoende">7.5</td>
                </tr>
                <tr>
                    <td rowspan="2">2</td>
                    <td rowspan="2">Object Oriented Programming</td>
                    <td rowspan="2">10</td>
                    <td>Case Study (50%)</td>
                    <td class="voldoende">5.5</td>
                </tr>
                <tr>
                    <td>Project (50%)</td>
                    <td class="voldoende">8.5</td>
                </tr>
                <tr>
                    <td rowspan="4">3</td>
                    <td>Framework Development 1</td>
                    <td> 5</td>
                    <td>Case study</td>
                    <td class="TBA">TBA</td>
                </tr>
                <tr>
                    <td rowspan="3">Framework Project 1</td>
                    <td rowspan="3">7,5</td>
                    <td>Project (33%)</td>
                    <td class="TBA">TBA</td>
                </tr>
                <tr>
                    <td>Study (33%)</td>
                    <td class="TBA">TBA</td>>
                </tr>
                <tr>
                    <td>Report (33%)</td>
                    <td class="TBA">TBA</td>
                </tr>
                <tr>
                    <td rowspan="4">4</td>
                    <td rowspan="4">Framework Prokect 2</td>
                    <td rowspan="4">10</td>
                    <td>portofolio (50%)</td>
                    <td class="TBA">TBA</td>
                </tr>
                <tr>
                    <td>Project (25%)</td>
                    <td class="TBA">TBA</td>
                </tr>
                <tr>
                    <td>Assesment (25%)</td>
                    <td class="TBA">TBA</td>
                </tr>
            </table>

            <table class="cijfers">
                <tr>
                    <th class="onvoldoende">Onvoldoende</th>
                    <th class="nietgdn">Nog niet gedaan</th>
                    <th class="voldoende">Voldoende</th>
                </tr>
            </table>
        </div>


        <div>
            <h2 class="ptitle">Mijn EC progressie:</h2>
            <label class="plabel" for="progressbar">12.5/60 EC</label>
            <progress class="pbar" id="progressbar" value="12.5" max="60"> 0%</progress>
        </div>

        <div>
            <h2 class="nbsatitle"> NBSA Boundary</h2>
            <h4 class="nbsatext"> Je moet minimaal 45 studiepunten behalen om verder te mogen gaan met de studie.</h4>
        </div>

        <div>
            <h2 class="extraec"> Extra studiepunten! </h2>
            <h3 class="ectext">In totaal kun je nog 15 "extra" studiepunten behalen, 2,5 EC en 12,5.
                De 2,5 (1,25 EC Q1 en 1,25 EC Q2) kun je behalen door goed mee te doen,
                de 12,5 kun je behalen om een goede portfolio in te leveren van het gehele jaar!
            </h3>
        </div>
        @endsection
    </Main>
    </body>
