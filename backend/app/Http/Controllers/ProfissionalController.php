<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;
use App\Tecnologia;

class ProfissionalController extends Controller
{
    public function listarProfissionais(Request $request){
        $listaProfissionais = Profissional::all();

        // temos que listar a tecnologia com o profissional
        
        return response()->json($listaProfissionais);


    }

    public function criarProfissional(Request $request){

        $tecnologiaId = $request->tecnologia;
        // dd($tecnologiaId);
       
        $newProfissional = new Profissional();
        $newProfissional->nome = $request->nome;
        $newProfissional->github = $request->github;
        $result = $newProfissional->save();
        $tecnologia = Tecnologia::find($tecnologiaId);

        if($tecnologia){
            $tecnologia->profissionais()->attach($newProfissional->id);

        }else{
            return response()->json(["error"=>"o id da tecnologia nao existe"]);                
            
            }
       

        return response()->json($newProfissional);
        
    }
}
