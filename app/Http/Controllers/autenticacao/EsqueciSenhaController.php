<?php

namespace App\Http\Controllers\autenticacao;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EsqueciSenhaController extends Controller
{

    public function enviarNovaSenhaNoEmail(Request $request)
    {
        $email = $request->input('email');
        //gerar senha aleatoria
        $novaSenha = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
        //alterar no banco de dados
        $usuario = new User();
        
        $usuario->update(['senha' => $novaSenha]);
        //mandar nova senha no email

        $usuario = User::findOrFail($request->input('email'));
        $usuario->senha = $request->input('senha');
        $usuario->save();
        
    }
}
