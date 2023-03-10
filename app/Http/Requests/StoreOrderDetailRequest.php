<?php

namespace App\Http\Requests;

use App\Models\MaterialProvider;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderDetailRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

        return [
            'provider_id' => ['required','integer', Rule::exists('material_provider', 'provider_id')->where(function ($query){
                return $query->where('material_id', $this->material_id);
            })],
            'material_id' => ['required','integer', Rule::exists('material_provider', 'material_id')->where(function ($query) {
                return $query->where('provider_id', $this->provider_id);
            })],
            'project_id' => ['required','integer','exists:projects,id'],
            'qty' => ['required','integer','gt:0']
        ];
    }

    public function messages()
    {
        return [
            /* 'material_id.required' => 'Es necesario seleccionar un material',
            'material_id.exists' => 'Este proveedor NO vende este material',
            'provider_id.required' => 'Es necesario seleccionar un proveedor para el material',
            'provider_id.exists' => 'Este proveedor NO vende este material',
            'qty.required' => 'Es necesario escribir la cantidad de productos',
            'qty.gt' => 'La cantidad de productos debe ser mayor a 0' */
        ];
    }
}
