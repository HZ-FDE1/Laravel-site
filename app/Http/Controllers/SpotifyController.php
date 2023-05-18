<?php

namespace App\Http\Controllers;

use App\Models\Spotify;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spotify.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spotify  $spotify
     * @return \Illuminate\Http\Response
     */
    public function show(Spotify $spotify)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spotify  $spotify
     * @return \Illuminate\Http\Response
     */
    public function edit(Spotify $spotify)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spotify  $spotify
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spotify $spotify)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spotify  $spotify
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spotify $spotify)
    {
        //
    }
}
