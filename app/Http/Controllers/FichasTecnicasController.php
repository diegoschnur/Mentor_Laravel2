<?php

namespace App\Http\Controllers;

use App\FichaTecnica;
use App\Http\Requests\FichaTecnicaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FichasTecnicasController extends Controller
{
    public function index(){
        $fichastecnicas = FichaTecnica::all();
        return view('fichastecnicas.index', ['fichastecnicas'=>$fichastecnicas]);
    }

    public function create(){
        return view('fichastecnicas.create');
    }

    public function store(FichaTecnicaRequest $request){
        $nova_ft = $request->all();
        FichaTecnica::create($nova_ft);

        return redirect()->route('fichastecnicas');
    }

    public function destroy($id){
        FichaTecnica::find($id)->delete();
        return redirect()->route('fichastecnicas');
    }

    public function edit($id){
        $fichatecnica = FichaTecnica::find($id);
        return view('fichastecnicas.edit', compact('fichatecnica'));
    }

    public function update(FichaTecnicaRequest $request, $id){
        $fichatecnica = FichaTecnica::find($id)->update($request->all());
        return redirect()->route('fichastecnicas');
    }
}
