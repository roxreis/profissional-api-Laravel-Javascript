<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;

class ProfissionalController extends Controller
{
    public function listarProfissionais(){
        $listaProfissionais = Profissional::all();
        
        return response()->json($listaProfissionais);


    }

    public function criarProfissional(){

        $newProfissional = new Profissional();
        $newProfissional->nome = $request->nome;
        $newProfissional->gihub = $request->github;
        $result = $newProfissional->save();

        return response()->json($newProfissional);
        
    }
}
