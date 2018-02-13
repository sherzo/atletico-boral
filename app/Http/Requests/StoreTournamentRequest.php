<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTournamentRequest extends FormRequest
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
            'type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'categories' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'INGRESE EL NOMBRE',
            'type.required' => 'INGRESE LA CLASIFICACIÓN',
            'start_date.required'  => 'INGRESE LA FECHA DE INICIO',
            'end_date.required'  => 'INGRESE LA FECHA DE CULMINACICIÓN',
            'categories.required' => 'SELECCIONE LAS CATEGORÍAS',
        ];
    }
}
