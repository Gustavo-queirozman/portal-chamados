<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('login');
    }    
    
    public function teste()
    {
        echo'login';
        die();
    }

    public function show(){
        return 'dfnsd';
    }

    public function reset()
    {

        die('resetar senha');
        //gerar senha aleatória
        //alterar senha no banco de dados
        //chamar função para enviar email com a senha
    }


    public function modify(Request $request)
    {
        die("aqui");
        //verificar se nova senha é igual a confirmar senha
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

    public function esqueciSenha()
    {
        return view('esqueciSenha');
    }
}
