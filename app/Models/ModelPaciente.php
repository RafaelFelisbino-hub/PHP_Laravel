<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPaciente extends Model
{
    // use HasFactory;
    protected $table = 'paciente';
    protected $fillable = [
        'nome_paciente',
        'rua_paciente',
        'numero_paciente',
        'complemento_paciente',
        'bairro_paciente',
        'cep_paciente',
        'email_paciente',
        'telefone_paciente',
        'id_user'];

    public function relUsers(){

        return $this->hasOne('App\Models\User','id','id_user');
    }
}
