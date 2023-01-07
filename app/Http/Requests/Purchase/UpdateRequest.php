<?php

namespace App\Http\Requests\Purchase;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /* 'code_fact'=>'required|unique:purchases,code_fact,'.$this->route('purchase')->id.'', */
        ];
    }

    public function messages()
    {
        return[

            /* 'code_fact.required'=>'Este campo es requerido.',
            'code_fact.unique'=>'Ya se encuentra registrado.', */
        ];
    }

}
