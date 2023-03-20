<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class MudarSenhaController extends Controller
{
    public function index(){
        return view('mudarSenha');
    }    

    public function mudarSenha(Request $request){
        $novaSenha = $request->get('novaSenha');
        $confirmarSenha = $request->get('confirmarSenha');

        if ($novaSenha == $confirmarSenha) {
            session_start();
            $user = new User();
            $usuario = $_SESSION['usuario'];
            $user->where('usuario', $usuario)->update(['senha' => $novaSenha]);
        } else {
            echo "senhas distintas";
        }
    }
}
