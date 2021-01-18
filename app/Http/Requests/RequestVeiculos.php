<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestVeiculos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;    // Se o sistema tiver autenticação, substituir por 'false'
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3'

        ];
    }

    public function messages () {
        return [
            'nome.required' => 'O campo :attribute é obrigatório',                              // O valor ':attribute' busca o nome do campo atual
            'nome.min'      => 'O campo :attribute precisa ter ao menos 3 caracteres'
        ];
    }
}
