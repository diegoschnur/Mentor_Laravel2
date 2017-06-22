<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitacaoRequest;
use Illuminate\Http\Request;
use App\Projeto;
use App\Solicitacao;
use App\Http\Controllers\Controller;

class SolicitacoesController extends Controller
{
    public function index(){
        $solicitacoes = Solicitacao::all();
        return view('solicitacoes.index', ['solicitacoes'=>$solicitacoes]);
    }

    public function create(){
        return view('solicitacoes.create');
    }

    public function store(SolicitacaoRequest $request){
        $nova_solicitacao = $request->all();
        Solicitacao::create($nova_solicitacao);

        return redirect()->route('solicitacoes');
    }

    public function destroy($id){
        Solicitacao::find($id)->delete();
        return redirect()->route('solicitacoes');
    }

    public function edit($id){
        $solicitacao = Solicitacao::find($id);
        return view('solicitacoes.edit', compact('solicitacao'));
    }

    public function update(SolicitacaoRequest $request, $id){
        $solicitacao = Solicitacao::find($id)->update($request->all());
        return redirect()->route('solicitacoes');
    }
}
