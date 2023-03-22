<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EsqueciSenhaController extends Controller
{
    public function index(){
        return view('esqueciSenha');
    }    

    public function enviarNovaSenhaNoEmail(Request $request){
        $email = $request->get('email');
        echo $email;
        die();
        //gerar senha aleatoria
        //alterar no banco de dados
        //mandar nova senha no email
    }
}
