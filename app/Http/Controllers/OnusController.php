<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOnusRequest;
use App\Http\Requests\UpdateOnusRequest;
use App\Models\Onus;

class OnusController extends Controller
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
     * @param  \App\Http\Requests\StoreOnusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOnusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Onus  $onus
     * @return \Illuminate\Http\Response
     */
    public function show(Onus $onus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Onus  $onus
     * @return \Illuminate\Http\Response
     */
    public function edit(Onus $onus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOnusRequest  $request
     * @param  \App\Models\Onus  $onus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOnusRequest $request, Onus $onus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Onus  $onus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Onus $onus)
    {
        //
    }
}
