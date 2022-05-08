<?php

namespace App\Http\Controllers;

use App\Models\PlaylistResource;
use App\Http\Requests\StorePlaylistResourceRequest;
use App\Http\Requests\UpdatePlaylistResourceRequest;
use App\Models\Playlist;

class PlaylistResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'add Item to Playlist';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlaylistResourceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlaylistResourceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlaylistResource  $playlistResource
     * @return \Illuminate\Http\Response
     */
    public function show(PlaylistResource $playlistResource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlaylistResource  $playlistResource
     * @return \Illuminate\Http\Response
     */
    public function edit(PlaylistResource $playlistResource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlaylistResourceRequest  $request
     * @param  \App\Models\PlaylistResource  $playlistResource
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlaylistResourceRequest $request, PlaylistResource $playlistResource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlaylistResource  $playlistResource
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlaylistResource $playlistResource)
    {
        //
    }
}
