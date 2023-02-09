<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMaterialRequest extends FormRequest
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
            'description' => 'nullable',
            'provider_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre no puede estar vacio',
            'provider_id.required' => 'Es necesario seleccionar un proveedor para el material'
        ];
    }
}
