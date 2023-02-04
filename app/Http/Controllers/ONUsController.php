<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreONUsRequest;
use App\Http\Requests\UpdateONUsRequest;
use App\Models\ONUs;

class ONUsController extends Controller
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
     * @param  \App\Http\Requests\StoreONUsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreONUsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ONUs  $oNUs
     * @return \Illuminate\Http\Response
     */
    public function show(ONUs $oNUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ONUs  $oNUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ONUs $oNUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateONUsRequest  $request
     * @param  \App\Models\ONUs  $oNUs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateONUsRequest $request, ONUs $oNUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ONUs  $oNUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ONUs $oNUs)
    {
        //
    }
}
