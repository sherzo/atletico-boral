<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAthleteRequest extends FormRequest
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
            'nationality' => 'required',
            'dni' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'birthdate' => 'required',
            'function' => 'required',
            'position_id' => 'required',
            'weight' => 'required',
            'foot' => 'required',
            'soccer' => 'required',
            'from' => 'required',
            'goalkeeper' => 'required',
            'age' => 'required',
            'sports' => 'required',
            'favorites' => 'required',
            'fanA' => 'required',
            'fanI' => 'required',
            'country_team' => 'required',
            'nickname' => 'required',
            'profession' => 'required',
            'occupation' => 'required',
            'description_football' => 'required',
            'description_like' => 'required',
        ];
    }

    public function messages()
    {
        'name.required' => 'INGRESE EL NOMBRE',
        'surname.required' => 'INGESE EL APELLIDO',
        'birthdate.required' => 'INGESE LA FECHA DE NACIMIENTO',
        'nationality.required' => 'INGRESE LA NACIONALIDAD',
        'function.required' => 'INGRESE LA FUNCIÓN',
        'position_id.required' => 'INGRESE LA POSICIÓN',
        'weight.required' => 'INGRESE LA ALTURA',
        'foot.required' => 'INGRESE EL PIE CON MAS CONTROL',
        'soccer.required' => 'INGRESE LA FECHA DE INICIAÖN EN EL FUTBOL',
        'goalkeeper.required' => 'INGRESE EL NOMBRE DEL ARQUERO QUE MAS ADMIRA',
        'age.required' => 'INGRESE LA EDAD EN LA QUE COMENZÓ A PRACTICAR DEPORTE',
        'sports.required' => 'INGRESE LOS DEPORTES QUE HA PRACTICADO',
        'favorites.required' => 'INGRESE LOS DEPORTISTAS QUE MAS ADMIRA',
        'fanA.required' => 'INGRESE DE QUE EQUIPO NACIANAL ES HINCHA',
        'fanI.required' => 'INGRESE DE QUE EQUIPO INTERNACIONAL ES HINCHA',
        'country_team.required' => 'INGRESE EN QUE EQUIPO Y PAIS DESEA JUGAR',
        'nickname.required' => 'INGRESE SU APODO EN EL FUTBOL',
        'profession.required' => 'INGRESE QUE CARRERA DESEA ESTUDIAR',
        'occupation.required' => 'INGRESE SU OCUPACIÓN EN EL FUTURO',
        'description_football.required' => 'INGRESE QUE ES EL FUTBOL PARA EL ATLETA',
        'description_like.required' => 'INGRESE QUE ES LO QUE MAS LE GUSTA DEL CLUB', 
    }
}
