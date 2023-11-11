<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
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
            'titulo'            => 'required|max:35|string|unique:sliders,titulo',
            'subtitulo'         => 'required|max:120',
            'nombrebutton1'     => 'required|max:25',
            'nombrebutton2'     => 'required|max:25',
            'link1'             => 'required|max:60',
            'link2'             => 'required|max:60',
            'nombreImagen'      => 'required|max:25'
        ];


    }

    public function messages()
    {
        return [
            'required' => '* Dato Obligatorio',
            'max' => 'Ingrese Máximo :max caracteres',
            'string' => 'Ingrese caracteres alfanuméricos',
            'number' => 'Ingrese solo numeros',
            'unique' => 'El :nombre ya existe'
        ];
    }

}