<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
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
            'nome_medico'=>'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'rua_medico'=>'string',
            'numero_medico'=>'numeric',
            'complemento_medico'=>'nullable',
            'bairro_medico'=>'string',
            'cep_medico'=>'regex:/^\d{5}-\d{3}$/',
            'email_medico'=>'email:rfc,dns',
            'telefone_medico'=>'numeric'
        ];
    }
}
