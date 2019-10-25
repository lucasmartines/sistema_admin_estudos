<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudo;

class EstudoController extends Controller
{
    /**
     * Recebe um post para salvar o estudo
     */
    public function salvar(Request $req){

        $novoEstudo = new \App\Estudo();
        $novoEstudo->dias_id = $req->input('dia_id');
        $novoEstudo->titulo = $req->input('titulo');
        $novoEstudo->conteudo = $req->input('conteudo');

        $novoEstudo->save();

        return back()->with("status","Novo Estudo criado com sucesso");
    }
    
    public function deletar($id){
        \App\Estudo::destroy($id);
        return back()->with("status","Estudo deletado com sucesso");
    }
    /**
     * view de atualização na rota: /estudo/{id}/atualizar
     */
    public function atualizar($id){
        $estudo = \App\Estudo::where('id',$id)->first();

        
        
        return view('estudo.atualizar',compact('estudo'));
    }
    public function atualizarPost($id,Request $request){


        $estudo = \App\Estudo::where('id',$id)->first();

        $estudo->titulo = $request->input('titulo');
        $estudo->conteudo = $request->input("conteudo");

        //
        $estudo->save();

        return back()->with("status","atualizado com sucesso");
    }
}
