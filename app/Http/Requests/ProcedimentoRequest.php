<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcedimentoRequest extends FormRequest
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
            'codigo_procedimento'=>'numeric',
            'nome_procedimento'=>'string',
            'valor_procedimento'=>'regex:/^[\d,?!]+$/',
            'data_procedimento'=>'nullable',
            'excecao_procedimento'=>'string'
        ];
    }
}
