<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValRegComputadora extends FormRequest
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
            'nombre_computadora' => 'required|max:100|unique:computadora,nombre_computadora,except,id_computadora',
            'precio_compu' => 'required|max:100',
            'img_compu' => 'required|max:100',
            'descrip_compu' => 'required|max:500',
        ];
    }
}
