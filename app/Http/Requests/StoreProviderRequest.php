<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProviderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'name' => 'required',
            'cuit' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El proveedor debe tener un nombre',
            'cuit.required' => 'El cuit no puede estar vacío'
        ];
    }
}
