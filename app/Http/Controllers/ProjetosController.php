<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjetoRequest;
use App\Projeto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjetosController extends Controller
{
    public function index(){
        $projetos = Projeto::all();
            return view('projetos.index', ['projetos'=>$projetos]);
    }

    public function create(){
        return view('projetos.create');
    }

    public function store(ProjetoRequest $request){
        $novo_projeto = $request->all();
        Projeto::create($novo_projeto);

        return redirect()->route('projetos');
    }

    public function destroy($id){
        Projeto::find($id)->delete();
        return redirect()->route('projetos');
    }

    public function edit($id){
        $projeto = Projeto::find($id);
        return view('projetos.edit', compact('projeto'));
    }

    public function update(ProjetoRequest $request, $id){
        $projeto = Projeto::find($id)->update($request->all());
        return redirect()->route('projetos');
    }
}
