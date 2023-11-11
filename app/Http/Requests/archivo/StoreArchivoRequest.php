<?php

namespace App\Http\Requests\archivo;

use Illuminate\Foundation\Http\FormRequest;

class StoreArchivoRequest extends FormRequest
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
            'titulo'    => 'required|string',
            'archivo'   => 'required|file|max:2000|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx,jpg,jpeg,png,gif,webp',
        ];
    }

    public function messages()
    {
        return [
            'required' => '* Dato Obligatorio',
            'max' => 'Ingrese Máximo :max Bytes',
            'string' => 'Ingrese caracteres alfanuméricos',
            'number' => 'Ingrese solo numeros',
            'unique' => 'El :nombre ya existe',
            'image' => 'Debe ser de tipo Imagen',
            'mimes' => 'Solo se acepta tipo de archivos como pdf,doc,docx,ppt,pptx,xls,xlsx,jpg,jpeg,png,gif,webp',
            'file' => 'Debe ser un archivo'
        ];
    }

}