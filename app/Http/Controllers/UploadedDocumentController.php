<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUploadedDocumentRequest;
use App\Http\Requests\UpdateUploadedDocumentRequest;
use App\Models\UploadedDocument;

class UploadedDocumentController extends Controller
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
     * @param  \App\Http\Requests\StoreUploadedDocumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUploadedDocumentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UploadedDocument  $uploadedDocument
     * @return \Illuminate\Http\Response
     */
    public function show(UploadedDocument $uploadedDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadedDocument  $uploadedDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadedDocument $uploadedDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUploadedDocumentRequest  $request
     * @param  \App\Models\UploadedDocument  $uploadedDocument
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUploadedDocumentRequest $request, UploadedDocument $uploadedDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadedDocument  $uploadedDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadedDocument $uploadedDocument)
    {
        //
    }
}
