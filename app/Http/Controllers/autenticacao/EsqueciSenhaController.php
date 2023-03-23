<?php

namespace App\Http\Controllers\autenticacao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EsqueciSenhaController extends Controller
{

    public function enviarNovaSenhaNoEmail(Request $request)
    {
        $email = $request->get('email');
        echo $email;
        die();
        //gerar senha aleatoria
        //alterar no banco de dados
        //mandar nova senha no email
    }
}
