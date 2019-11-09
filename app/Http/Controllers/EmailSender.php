<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmailToMe;

class EmailSender extends Controller
{
    //

    public function enviar(Request $request){
        
        $nameOfUser = $request->input('name');
        $contentOfUser = $request->input('content');
        $emailOfUser = $request->input('email');




        $data = ['content'     => $contentOfUser,
                 'nameOfUser'  => $nameOfUser,
                 'emailOfuser' => $emailOfUser  ];
        try{
            \Mail::to('lucas.alcantarilla97@gmail.com')->send(new SendEmailToMe($data));
            return response()->json(["success"=>"Email enviado com sucesso, se não recebeu a mensagem, por favor verifique a sua caixa de span! Em breve retornarei o contato!"]);

        }
        catch(Exception $ex){
            if (App::environment(['local'])) {
                return ["error"=>$ex];
            }
            return response()->json(["error"=>"Não foi possivel enviar sua mensagem, por favor tente mais tarde!"]) ;
        }
    }
}
