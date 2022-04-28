<?php

namespace App\Http\Controllers;

use App\Models\TermRequirement;
use App\Http\Requests\StoreTermRequirementRequest;
use App\Http\Requests\UpdateTermRequirementRequest;

class TermRequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTermRequirementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTermRequirementRequest $request)
    {
        return 'store Terms & Requirements';
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
    public function edit(TermRequirement $termRequirement)
    {
        return 'Open View Edit Terms & Requirements';
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
    public function destroy(TermRequirement $termRequirement)
    {
        return 'destroy Terms & Requirements';
    }
}
