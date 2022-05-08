<?php

namespace App\Http\Controllers;

use App\Models\TermRequirement;
use App\Http\Requests\StoreTermRequirementRequest;
use App\Http\Requests\UpdateTermRequirementRequest;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class TermRequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('only.partners');
    }

    public function index()
    {
        return 'Open View Edit Terms & Requirements';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTermRequirementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(product $Product)
    {
        $rules = [
            'content' => ['string', 'max:1000', 'min:4'],
        ];
        request()->validate($rules);
        TermRequirement::create([
            'content' => request()->content,
            'group' => request()->group,
            'product_id' => $Product->id,
        ]);
        return redirect(action('TermRequirementController@edit', $Product));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TermRequirement  $termRequirement
     * @return \Illuminate\Http\Response
     */
    public function show(TermRequirement $termRequirement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TermRequirement  $termRequirement
     * @return \Illuminate\Http\Response
     */
    public function edit(product $Product)
    {
        return view('account-views.product-views.edit-terms-reqs')->with([
            'User' => Auth::user(),
            'Product' => $Product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTermRequirementRequest  $request
     * @param  \App\Models\TermRequirement  $termRequirement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTermRequirementRequest $request, TermRequirement $termRequirement)
    {
        return 'Update Terms & Requirements';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TermRequirement  $termRequirement
     * @return \Illuminate\Http\Response
     */
    public function destroy(TermRequirement $Registro)
    {
        $Product = $Registro->product;
        $Registro->delete();
        return redirect(action('TermRequirementController@edit', $Product));
    }
}
