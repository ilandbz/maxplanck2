<?php

namespace App\Http\Requests\noticia;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoticiaRequest extends FormRequest
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
            'imagen' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2000', 
            'titulo'     => 'required|string',
            'subtitulo'  => 'required|string',
            'slug'       => 'required|string|unique:noticias,slug',
            'contenido'  => 'required|string',
            'fecha_publicacion' => 'date'
        ];
    }

    public function messages()
    {
        return [
            'required' => '* Dato Obligatorio',
            'max' => 'Ingrese Máximo :max caracteres',
            'string' => 'Ingrese caracteres alfanuméricos',
            'number' => 'Ingrese solo numeros',
            'unique' => 'El :nombre ya existe',
            'image'  => 'No tiene el formato de imagen',
            'mimes' => 'La imagen debe ser solo de tipo: jpg, jpeg, png, gif, webp.',
        ];
    }

}