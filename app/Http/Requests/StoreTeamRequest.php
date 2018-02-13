<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
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
            'coach' => 'required',
            'categories' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'INGRESE EL NOMBRE',
            'coach.required' => 'INGRESE EL NOMBRE DEL ENTRENADOR',
            'categories.required' => 'SELECCIONE LAS CATEGORÍAS',
        ];
    }
}
