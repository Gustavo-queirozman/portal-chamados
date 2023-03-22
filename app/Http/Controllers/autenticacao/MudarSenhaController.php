<?php

namespace App\Http\Controllers\autenticacao;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class MudarSenhaController extends Controller
{


    public function mudarSenha(Request $request)
    {
        $novaSenha = $request->get('novaSenha');
        $confirmarSenha = $request->get('confirmarSenha');

        if ($novaSenha == $confirmarSenha) {
            session_start();
            $user = new ModelsUser();
            $usuario = $_SESSION['usuario'];
            $user->where('usuario', $usuario)->update(['senha' => $novaSenha]);
            dd("senha alterada");
        } else {
            echo "senhas distintas";
        }
    }
}
