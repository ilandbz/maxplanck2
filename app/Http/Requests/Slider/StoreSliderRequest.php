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
            'imagen'            => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:4000', 
        ];


    }

    public function messages()
    {
        return [
            'required' => '* Dato Obligatorio',
            'string' => 'Ingrese caracteres alfanuméricos',
            'number' => 'Ingrese solo numeros',
            'unique' => 'El :nombre ya existe',
            'image'  => 'No se selecciono una imagen',
            'mimes'  => 'Solo se aceptan jpg,jpeg,png,gif,webp'
        ];
    }

}