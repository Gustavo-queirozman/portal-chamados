<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request){
        $erro = $request->get('erro');
        return view('login');
        //return view('login', ['erro' => $erro]);
    }

    public function autenticar(Request $request){
        $regras = [
            'usuario' => 'required',
            'senha' => 'required'
        ];

        //as mensagens de feedback de validação
        $feedback = [
            'usuario.required' => 'o campo é obrigatório',
            'senha.required' => 'o campo senha é obrigatório'
        ];


        $request->validate($regras, $feedback);
        $usuario = $request->get('usuario');
        $senha = $request->get('senha');

        $user = new User;
        $dados = $user->where('usuario', $usuario)->where('senha', $senha)->get()->first();

        if(isset($dados)){
            session_start();
            $_SESSION['id'] = $dados->nome;
            $_SESSION['usuario'] = $dados->usuario;
            $_SESSION['senha'] = $dados->senha;
            $_SESSION['nome'] = $dados->nome;
            $_SESSION['email'] = $dados->email;
            //die("logado com sucesso!");
            return redirect()->route('chamados');
        }else{
            return redirect()->route('login', ['erro'=>1]);
        }
    }
}
