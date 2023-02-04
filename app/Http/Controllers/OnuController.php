<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOnuRequest;
use App\Http\Requests\UpdateOnuRequest;
use App\Models\Onu;

class OnuController extends Controller
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
     * @param  \App\Http\Requests\StoreOnuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOnuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Onu  $onu
     * @return \Illuminate\Http\Response
     */
    public function show(Onu $onu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Onu  $onu
     * @return \Illuminate\Http\Response
     */
    public function edit(Onu $onu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOnuRequest  $request
     * @param  \App\Models\Onu  $onu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOnuRequest $request, Onu $onu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Onu  $onu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Onu $onu)
    {
        //
    }
}
