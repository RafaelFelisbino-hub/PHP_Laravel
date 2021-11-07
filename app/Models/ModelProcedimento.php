<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProcedimento extends Model
{
    // use HasFactory;

    protected $table = 'procedimento';
    protected $fillable = [
        'codigo_procedimento',
        'nome_procedimento',
        'valor_procedimento',
        'data_procedimento',
        'excecao_procedimento',
        'id_user'];

    public function relUsers(){

        return $this->hasOne('App\Models\User','id','id_user');
    }
}
