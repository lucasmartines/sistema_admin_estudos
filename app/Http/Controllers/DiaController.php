<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dia;
use Illuminate\Support\Facades\Validator;
 


class DiaController extends Controller
{
    //

    /**
     * ROTA: Mostrar Todos os dias
     */
    public function index(){


        $dias = Dia::orderBy('created_at','desc')->paginate(5);
        
        return view('dia.mostrar_todos',compact('dias'));
    }

    /**
     * Rota:get Criar item dia, retorna uma view para a tela de criação do item dia
     */
    public function criarView(){
        return view('dia.criar_dia');
    }
    public function criarPost(Request $request){

        $mensagens = [
            'required'=>'Por favor preencha o campo :attribute',
            'min' => "Por favor coloque mais de 3 caracteres no campo :attribute"
        ];

        $validator = $request->validate(
            ['titulo'=>'required|min:3' ]
            ,
            $mensagens
        );
              

        $dia = new Dia;
        $dia->titulo = $request->input("titulo");
        $dia->save();

        return redirect( url('/dia'));
    
    }
    /**
     * ROTA: Mostrar Um dia, ou mostrar os detalhes do dia
     */
    public function verDia($id){

        $dia = Dia::whereId($id)->first();
        $estudos = $dia->estudos;

        return view('dia.ver_detalhes',compact('dia','estudos'));
    }
 
    /**
     * 
     * get ou post: Criar ou atualizar o post dia
    */
    public function criar_atualizar_DiaPost($id,Request $request){
 
        $dia = Dia::whereId($id)->first();
        return view('dia.inserir_atualizar',compact('dia'));

    }

       /**
     * Rota Post: atualizar um dia passando o id
     */
    public function atualizarDia($id , Request $request){
       
        $mensagens = [
            'required'=>'Por favor preencha o campo :attribute',
            'min' => "Por favor coloque mais de 3 caracteres no campo :attribute"
        ];
      
        $validator = $request->validate(
            ['titulo'=>'required|min:3' ]
        ,$mensagens);
                
        
        $dia = Dia::whereId($id)->first();
        $dia->titulo = $request->input('titulo');
        $dia->save();

        return back()->with('status',"criado com sucesso");
    
    }
        /**
     * Rota Post: inserir um dia
     */
    public function criarDia(Request $request){
        echo "criar dia";
    }
       /**
     * =================================================
     * ROTA post: Deletar um dia passando o id
     */
    public function deletarDia($id){
        // Dia::whereId($id)->first();

        Dia::destroy($id);
        
        return redirect(url("/dia"))->with('status','Item deletado com sucesso');
    }
}
