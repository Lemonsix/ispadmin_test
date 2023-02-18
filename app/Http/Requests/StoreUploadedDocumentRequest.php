<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUploadedDocumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // crear validaciones custom
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
{
    return [
        'uploadedDocument' => 'required|mimes:pdf,jpeg,png,jpg,img|max:20000'
    ];
}

public function messages()
{
    return [
        'uploadedDocument.required' => 'No se ha seleccionado un archivo.',
        'uploadedDocument.mimes' => 'El archivo debe ser de tipo PDF, JPEG, PNG, JPG O IMG.',
        'uploadedDocument.max' => 'El tamaño del archivo debe ser menor a 20MB.',
        'uploadedDocument.description.required' => 'El archivo debe contener una descripción'
    ];
}
}
