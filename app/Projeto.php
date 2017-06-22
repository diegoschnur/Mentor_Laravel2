<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['nome', 'descricao'];

    public function solicitacoes(){
        return $this->hasMany('App/Solicitacao');
    }
}

