<?php

namespace Proflot\Http\Requests;

use Proflot\Http\Requests\Request;

class AdminPeriodoRequest extends Request
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
            'description'=>'required|min:3'
        ];
    }

    public function messages()
    {
        return [
           'description.required'=> 'O Campo parece ser obrigatorio!',
           'description.min' => 'O Campo deve ter no mínimo três caracteres!',
        ];
    }
}
