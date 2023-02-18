<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUploadedDocumentRequest;
use App\Http\Requests\UpdateUploadedDocumentRequest;
use App\Models\UploadedDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    $file = $request->file('uploadedDocument');
    $path = $file->store('uploaded_documents','public');
    $size = $file->getSize();
    $uploadedDocument = new UploadedDocument([
        'path' => $path,
        'size' => $size,
        'description' => $request->description,
        'requirement_order_id' => $request->input('requirement_order_id')
    ]);
    $uploadedDocument->save();

    return redirect()->back()->with('success', 'Documento subido exitosamente.');
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
    public function destroy(Request $request)
{
    $fileId = $request->input('fileId');
    $file = UploadedDocument::findOrFail($fileId);
    Storage::delete($file->path);
    $file->delete();

    return redirect()->back()->with('success', 'File deleted successfully.');
}
}
