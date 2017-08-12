<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if ($this->isMethod('PUT')) {

            return [
                'name'  => 'required|min:6',
                'email' => 'required|email',
                'role'  => 'required',
            ];
        } else {
            return [
                'name'     => 'required|min:6',
                'email'    => 'required|email|unique:users',
                'password' => 'required|min:6',
                'role'     => 'required',
                'photo'    => 'required|image',
            ];
        }

    }

    public function mesages()
    {
        return [
            'name.required'=>  'el nombre completo es requerido',
            'name.min'=>  'el nombre completo es requerido',
            'email.required'   =>  'el campo nombre completo debe tener minimo 6 caracteres',
            'email.unique'   =>  'La direccion de correo electronico ya existe',
            'password.required'=>  'la contraseña es requerida',
            'password.min'=>  'El campo contraseña debe tener minimo 6 caracteres',
            'role.required'    =>  'el campo de rol es requerido',
            'photo.required'   =>  'el foto es requerido'
            //
        ];

    }

}
