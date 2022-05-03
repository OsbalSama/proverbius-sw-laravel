<?php

namespace App\Http\Controllers;

use App\Models\OtherFiles;
use App\Http\Requests\StoreOtherFilesRequest;
use App\Http\Requests\UpdateOtherFilesRequest;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class OtherFilesController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOtherFilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(product $Product)
    {
        $rules = [
            'title' => ['string', 'max:255', 'min:4'],
            'otherfile_link' => ['string', 'max:1000', 'min:4'],
        ];
        request()->validate($rules);
        OtherFiles::create([
            'title' => request()->title,
            'doc_type' => request()->doc_type,
            'otherfile_link' => request()->otherfile_link,
            'product_id' => $Product->id,
        ]);
        return redirect(action('OtherFilesController@edit', $Product));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OtherFiles  $otherFiles
     * @return \Illuminate\Http\Response
     */
    public function show(OtherFiles $otherFiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OtherFiles  $otherFiles
     * @return \Illuminate\Http\Response
     */
    public function edit(product $Product)
    {
        return view('account-views.product-views.edit-otherfiles')->with([
            'User' => Auth::user(),
            'Product' => $Product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOtherFilesRequest  $request
     * @param  \App\Models\OtherFiles  $otherFiles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOtherFilesRequest $request, OtherFiles $otherFiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OtherFiles  $otherFiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtherFiles $Registro)
    {
        $Product = $Registro->product;
        $Registro->delete();
        return redirect(action('OtherFilesController@edit', $Product));
    }
}
