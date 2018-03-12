<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClient extends FormRequest
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
            'ruc' => 'required|numeric',
            'name' => 'required',
            'lastName' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'ruc.required' => 'El ruc o cédula es requerido',
            'ruc.numeric' => 'El campo debe ser numérico ',
            'name.required' => 'El nombre es requerido',
            'lastName.required' => 'El apellido es requerido',
            'city.required' => 'La ciudad es requerida',
            'address.required' => 'La dirección es requerida',
            'phone.required' => 'El teléfono es requerido',
            'phone.numeric' => 'El teléfono debe ser numérico',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email ingresado no es válido',
            'message.required' => 'El mensaje es requerido',
        ];
    }
}
