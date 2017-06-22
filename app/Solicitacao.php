<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $fillable = ['nome', 'data', 'componentes', 'metodologia', 'observacoes', 'projeto_id'];

    public function projeto(){
        return $this->belongsTo('App/Projeto');
    }
}
