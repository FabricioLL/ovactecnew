<?php

namespace App\Http\Requests\Sale;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            /* 'code_sale'=>'required|unique:code_sale', */
        ];
    }

    public function messages()
    {
        return[

            /* 'code_sale.required'=>'Este campo es requerido.',
            'code_sale.unique'=>'Ya se encuentra registrado.', */
        ];
    }
}
