<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaTecnica extends Model
{
    protected $fillable = ['nome', 'cliente', 'data', 'tempo', 'componentes', 'metodologia', 'descricao', 'solicitacao_id'];

    public function solicitacao(){
        return $this->belongsTo('App/Solicitacao');
    }
}
