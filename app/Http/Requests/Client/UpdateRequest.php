<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name'=>'string|required|max:255',
            'dni'=>'string|required|unique:clients,dni,'.$this->route('client')->id.'|max:8|min:8',
            'ruc'=>'string|nullable|unique:clients,ruc,'.$this->route('client')->id.'|max:11|min:11',
            'address'=>'string|nullable|max:255',
            'phone'=>'string|required|unique:clients,phone,'.$this->route('client')->id.'|max:9|min:9',
            'email'=>'string|required|unique:clients,email,'.$this->route('client')->id.'|max:255|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'El campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permiten 255 caracteres.',

            'dni.required'=>'El campo es requerido.',
            'dni.string'=>'El valor no es correcto.',
            'dni.unique'=>'Este DNI ya se encuentra registrado.',
            'dni.min'=>'Se requiere de 8 caracteres.',
            'dni.max'=>'Solo se permiten 8 caracteres.',

            'ruc.string'=>'El valor no es correcto.',
            'ruc.unique'=>'El numero de RUC ya se encuentra registrado.',
            'ruc.min'=>'Se requiere de 11 caracteres.',
            'ruc.max'=>'Solo se permiten 11 caracteres.',

            'address.string'=>'El valor no es correcto.',
            'address.max'=>'Solo se permiten 255 caracteres.',

            'phone.string'=>'El valor no es correcto.',
            'phone.unique'=>'El numero de celular ya se encuentra registrado.',
            'phone.min'=>'Se requiere de 9 caracteres.',
            'phone.max'=>'Solo se permiten 9 caracteres.',

            'email.string'=>'El valor no es correcto.',
            'email.unique'=>'El correo electronico ya se encuentra registrado.',
            'email.max'=>'Se requiere de 255 caracteres.',
            'email.email'=>'No es un correo electronico.',
        ];
    }


}
