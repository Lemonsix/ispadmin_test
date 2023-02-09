<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequirementOrderRequest extends FormRequest
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
        return ['user_id' => 'required','deadline'=>['required','nullable','after:yesterday']];
    }
    public function messages()
    {
        return [
            'user_id.required' => 'Hay que seleccionar un usuario solicitante',
            'deadline.required' => 'La solicitud debe contener una fecha',
            'deadline.after' => 'La fecha de solicitud debe ser posterior al dia de hoy',
        ];
    }
}
