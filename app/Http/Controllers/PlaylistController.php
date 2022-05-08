<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Http\Requests\StorePlaylistRequest;
use App\Http\Requests\UpdatePlaylistRequest;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(product $Product)
    {
        $newPlaylist = Playlist::make([
            'product_id' => $Product->id,
        ]);

        return view('account-views.playlist-views.playlist-create')->with([
            'User' => Auth::user(),
            'Product' => $Product,
            'newPlaylist' => $newPlaylist,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlaylistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(product $Product)
    {
        $rules = [
            'title' => ['required', 'string', 'max:255', 'unique:products', 'min:4'],
        ];
        request()->validate($rules);
        // dd($Product);
        Playlist::create([
            'title' => request()->title,
            'product_id' => $Product->id,
        ]);

        return redirect(route('account.product.edit', ['product' => $Product]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlaylistRequest  $request
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlaylistRequest $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        $Product = $playlist->product;
        $playlist->delete();
        return redirect(route('account.product.edit', ['product' => $Product]));
    }
}
