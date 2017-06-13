<?php

namespace Proflot\Http\Requests;

use Proflot\Http\Requests\Request;

class LoginRequest extends Request
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
           'email' => 'required|email|max:255',
           'password' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
           'email.required'=> 'O Campo parece ser obrigatorio e unico!',
           'password.min' => 'O Campo deve ter no mínimo seis caracteres e parece ser obrigatorio!',
           'password.required' => 'O Campo parece ser obrigatorio!',
        ];
    }
}
