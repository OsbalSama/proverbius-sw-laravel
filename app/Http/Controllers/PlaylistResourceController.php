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
    public function store(Playlist $Playlist)
    {
        $rules = [
            'resource_title' => ['required', 'string', 'max:255', 'min:4'],
            'resource_link' => ['required', 'string', 'max:255', 'min:4'],
        ];
        request()->validate($rules);
        PlaylistResource::create([
            'title' => request()->resource_title,
            'resource_type' => request()->resource_type,
            'resource_link' => request()->resource_link,
            'playlist_id' => $Playlist->id,
        ]);
        
        return redirect(route('product.playlist.edit', ['Product'=>$Playlist->product, 'playlist'=>$Playlist]));
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
        $Playlist = $playlistResource->playlist;
        // dd($Playlist);
        $playlistResource->delete();
        return redirect(route('product.playlist.edit', ['Product'=>$Playlist->product, 'playlist'=>$Playlist]));
        // return 'Destroy Resource';
    }
}
