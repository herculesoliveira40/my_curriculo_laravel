<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurriculoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:255|min:3',      
            'telefone' => 'required',
            'email' => 'required',
            'idade' => 'required',
            'cidade' => 'required',
            'area' => 'required', 

            'sobre' => 'required', 
            'formacao' => 'required', 
            'conhecimento_complementar' => 'required', 
            'experiencia' => 'required', 
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatorio',
            'email.required' => 'O campo e-mail é obrigatorio',
            'email.unique' => 'e-mail já utilizado, tente outro',

        ];
    }
}
