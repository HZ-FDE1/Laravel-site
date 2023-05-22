@extends('layout')

<head>
    <title>Spotify API</title>
    <link rel="stylesheet" href="css/style-spotify.css">
    <script src="/js/app.js"></script>
</head>

@section('content')

    <body onload="onPageLoad()">
    <div class="spotifyPage" style="width: 1000px">
        <div class="container">

            <div id="tokenSection" class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="clientId" class="form-label">Client ID</label>
                        <input type="text" class="form-control" id="clientId" placeholder="" style="position: relative; left: 30.5px">
                    </div>

                    <div class="mb-3" style="position: relative; top: 10px">
                        <label for="clientSecret" class="form-label">Client Secret</label>
                        <input type="text" class="form-control" id="clientSecret" placeholder="">
                    </div>

                    <br>

                    <input class="btn btn-primary btn-lg" type="button" onclick="requestAuthorization()" value="Authorize"><br/>
                </div>

                <br>

                <div id="deviceSection" class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="devices" class="form-label">Devices</label>
                            <select id="devices" class="form-control">
                            </select>
                            <input class="btn btn-primary btn-sm mt-3" type="button" onclick="refreshDevices()" value="Refresh Devices">
                            <input type="button" class="btn btn-dark btn-sm  mt-3" onclick="transfer()" value="Transfer">
                        </div>

                        <br>

                        <div class="mb-3">
                            <label for="playlists" class="form-label">Playlists</label>
                            <select id="playlists" class="form-control">
                            </select>
                            <input class="btn btn-primary btn-sm mt-3" type="button" onclick="refreshPlaylists()" value="Refresh Playlists">

                        </div>

                        <div class="mb-3">
                            <label for="tracks" class="form-label">Tracks</label>
                            <select id="tracks" class="form-control">
                            </select>
                            <input class="btn btn-primary btn-sm mt-3" type="button" onclick="fetchTracks()" value="Fetch Tracks">
                        </div>

                        <div class="mb-3" style="position: relative; left: 5000px">
                            <label for="tracks" class="form-label">Album</label>
                            <input id="album" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="button" class="btn btn-dark" onclick="previous()" value="Prev">
                                <input type="button" class="btn btn-dark" onclick="play()" value="Play">
                                <input type="button" class="btn btn-dark" onclick="shuffle()" value="Shuffle">
                                <input type="button" class="btn btn-dark" onclick="pause()" value="Pause">
                                <input type="button" class="btn btn-dark" onclick="next()" value="Next">
                            </div>
                        </div>


                        <div class="row  mt-3">
                            <div class="col">
                                <h1> Currently Playing</h1>
                                <div id="trackTitle" style="position: relative;top: -10px ; font-size: 40"></div>
                                <h1>Artist</h1>
                                <div id="trackArtist" style="font-size: 25; position: relative; top: -10px "></div>
                                <br>
                                <div>
                                    <img id="albumImage" src="">
                                </div>
                                <input type="button" class="btn btn-primary btn-sm mt-3" onclick="currentlyPlaying()" value="Refresh Currently Playing">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

@endsection
