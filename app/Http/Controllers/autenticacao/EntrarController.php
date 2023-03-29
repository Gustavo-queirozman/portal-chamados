<?php

namespace App\Http\Controllers\autenticacao;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EntrarController extends Controller
{
    public function get(){
        var_dump('rge');
        die();
    }

    public function show(){
        $idUsuario = 1;
        $usuario = new User();
        $usuario = $usuario->where('idUsuario', $idUsuario)->get();
        $usuario->fill($usuario);
        return view('solicitante.perfil.editar', ['usuario'=>$usuario]);
    }

    public function index(Request $request)
    {
        return view('entrar');
    }

    public function entrar(Request $request)
    {
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

        $user = new User();
        $dados = $user->where('usuario', $usuario)->where('senha', $senha)->get()->first();

        if (isset($dados)) {
            session_start();
            $_SESSION['id'] = $dados->nome;
            $_SESSION['usuario'] = $dados->usuario;
            $_SESSION['senha'] = $dados->senha;
            $_SESSION['nome'] = $dados->nome;
            $_SESSION['email'] = $dados->email;
            //die("logado com sucesso!");
            #return redirect()->route('autenticacao.index');
            return view('autenticacao.index');
        } else {
            //die("erro ao fazer login");
            return redirect()->route('entrar', ['erro' => 1]);
        }
    }
}
