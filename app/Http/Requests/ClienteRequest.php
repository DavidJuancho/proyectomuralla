<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClienteRequest extends Request
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
            'dni'=>'required|max:8|min:3|unique:clientes',
            'nombre'=>'required|max:255|min:2|unique:clientes'
        ];
    }
    public function messages()
    {
        return[
            'dni.required'=>'El :attribute es obligatorio.',
            'dni.min'=>'El :attribute no puede ser muy corto.',
            'dni.max'=>'El :attribute no puede ser muy extenso.',
            'dni.unique'=>'El :attribute no se puede repetir.',
            'nombre.required'=>'La :attribute es obligatorio.',
            'nombre.min'=>'La :attribute no puede ser muy corto.',
            'nombre.max'=>'La :attribute no puede ser muy extenso.',
            'nombre.unique'=>'La :attribute no se puede repetir.'
        ];
    }

    public function attributes()
    {
        return [
            'dni'=>'dni del cliente',
            'nombre'=>'nombre del cliente',
        ];
    }
}
