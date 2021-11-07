<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMedico extends Model
{
    // use HasFactory;

    protected $table = 'medico';
    protected $fillable = [
        'nome_medico',
        'rua_medico',
        'numero_medico',
        'complemento_medico',
        'bairro_medico',
        'cep_medico',
        'email_medico',
        'telefone_medico',
        'id_user'];

    public function relUsers(){

        return $this->hasOne('App\Models\User','id','id_user');
    }
}
