@extends('layout')

<head>
    <title>Spotify API</title>
    <link rel="stylesheet" href="css/style-spotify.css">
    <script src="/js/app.js"></script>
</head>

@section('content')

    <body onload="onPageLoad()">
    <div class="spotifyPage" style="width: 700px">
        <div class="container">

            <div id="tokenSection" class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="clientId" class="form-label"><strong>Client ID</strong></label>
                        <input type="text" class="form-control" id="clientId" placeholder="" style="position: relative; left: 49px; border-radius: 5px; width: 200; height: 25px">
                    </div>

                    <div class="mb-3" style="position: relative; top: 10px">
                        <label for="clientSecret" class="form-label" style=""><strong>Client SECRET</strong></label>
                        <input type="text" class="form-control" id="clientSecret"  placeholder="" style="border-radius: 5px;  width: 200; height: 25px">
                    </div>

                    <br>

                    <input class="btn btn-primary btn-lg" type="button" onclick="requestAuthorization()" value="Authorize" style="width: 100px; height: 20px; position: relative; left: 160px"><br/>
                </div>

                <br>
                <br>

                <div id="deviceSection" class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="devices" class="form-label"><strong>Devices</strong></label>
                            <select id="devices" class="form-control" style="border-radius: 5px;  width: 200; height: 25px; position: relative; left: 5px">
                            </select>
                            <input class="btn btn-primary btn-sm mt-3" type="button" onclick="refreshDevices()" value="Refresh Devices" style="position: relative; left: 10px">
                            <input type="button" class="btn btn-dark btn-sm  mt-3" onclick="transfer()" value="Transfer" style="position: relative; left: 10px">
                        </div>

                        <br>

                        <div class="mb-3">
                            <label for="playlists" class="form-label"><strong>Playlists</strong></label>
                            <select id="playlists" class="form-control" style="border-radius: 5px;  width: 200; height: 25px">
                            </select>
                            <input class="btn btn-primary btn-sm mt-3" type="button" onclick="refreshPlaylists()" value="Refresh Playlists" style="position: relative; left: 6px">

                        </div>

                        <br>

                        <div class="mb-3">
                            <label for="tracks" class="form-label"><strong>Songs</strong></label>
                            <select id="tracks" class="form-control" style="border-radius: 5px;  width: 200; height: 25px; position: relative; left: 16px">
                            </select>
                            <input class="btn btn-primary btn-sm mt-3" type="button" onclick="fetchTracks()" value="Fetch Tracks" style="position: relative; left: 20px">
                        </div>

                        <br>

                        <div class="mb-3">
                            <input id="album" class="form-control" type="hidden">
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="button" class="btn btn-dark" onclick="play()" value="Play ▶️">
                                <input type="button" class="btn btn-dark" onclick="shuffle()" value="Shuffle 🔀">
                                <input type="button" class="btn btn-dark" onclick="pause()" value="Pause ⏸️">
                                <input type="button" class="btn btn-dark" onclick="previous()" value="⏮️ Prev">
                                <input type="button" class="btn btn-dark" onclick="next()" value="Next ⏭️">
                            </div>
                        </div>



                        <div class="row  mt-3">
                            <div class="col">
                                <h1> Currently Playing</h1>
                                <div id="trackTitle" style="position: relative;top: -10px ; font-size: 40"></div>

                                <h1>Artist</h1>
                                <div id="trackArtist" style="font-size: 25; position: relative; top: -10px "></div>

                                <input type="button" class="btn btn-primary btn-sm mt-3" onclick="currentlyPlaying()" value="Refresh Currently Playing" style="position: relative; left: 875px">

                                <br>
                                <div>
                                    <img id="albumImage" src="" style="position: relative; left: 700px; top: -550px; height: 500px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

@endsection
