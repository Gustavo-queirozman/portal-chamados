<?php

namespace App\Http\Controllers\autenticacao;

use App\Http\Controllers\Controller;
use App\Mail\SolicitarCadastroMail;
use App\Models\Cadastro;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CadastroController extends Controller
{

    public function index(){
        return "sdcscdscsdc";
    }
    public function solicitarCadastro(Request $request)
    {
        dd('solicitar cadastro');
        //echo "realizar envio de email";
        $mailData = [
            'title' => 'Cadastro no portal chamados',
            'body' => 'Solicito por meio desse email o cadastro no portal chamados..',
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'setor' => $request->input('setor'),
            'ramal' => $request->input('ramal'),
            'codAnydesk' => $request->input('codAnydesk')
        ];

        //Endereço de email para receber o email
        Mail::to($request->input('email'))->send(new SolicitarCadastroMail($mailData));

        dd('Email enviado com sucesso!');
    }


    public function create(Request $request)
    {
        //recuperar os parametros do formulário
        $email = $request->get('email');
        $usuario = $request->get('usuario');

        //iniciar o Model User
        $user = new ModelsUser();
        $dados = $user
            ->where('email', $email)
            ->orWhere('usuario', $usuario)->get();

        if (str_contains($dados, $usuario)) {
            redirect()->route('cadastro');
            echo "Não é possível efetuar o cadastro pois o nome de usuário já está em uso";
        } elseif (str_contains($dados, $email)) {
            redirect()->route('cadastro');
            echo "Não é possível efetuar o cadastro pois o email já está em uso";
        }

        $contato = new Cadastro();
        $contato->create($request->all());
        return view('cadastro');
    }
}
