<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            'nome_paciente'=>'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'rua_paciente'=>'regex:/^[a-zA-Z0-9_ ]*$/',
            'numero_paciente'=>'numeric',
            'complemento_paciente'=>'nullable',
            'bairro_paciente'=>'string',
            'cep_paciente'=>'numeric',
            'email_paciente'=>'email:rfc,dns',
            'telefone_paciente'=>'numeric'
        ];
    }
}
