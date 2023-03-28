<?php

namespace App\Http\Controllers\solicitante;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
use App\Models\Chamado;
use Illuminate\Http\Request;


class ChamadoController extends Controller
{
    public function getChamado()
    {
        session_start();
        $idUsuario = 1;
        $user = new User();
        $dados = $user->where('idUsuario', $idUsuario)->get();
        $nome = $dados[0]['nomeCompleto'];
        $email = $dados[0]['email'];
        $usuario = $dados[0]['usuario'];
        $senha = $dados[0]['senha'];
        $setor = $dados[0]['setor'];
        $ramal = $dados[0]['ramal'];
        $codAnydesk = $dados[0]['codAnydesk'];
        return view('solicitante.perfil.editar', ['nome' => $nome, 'email' => $email, 'usuario' => $usuario, 'senha' => $senha, 'setor' => $setor, 'ramal' => $ramal, 'codAnydesk' => $codAnydesk]);
    }

    public function postChamado(Request $request)
    {
        print_r($request);
        return view('solicitante.perfil.editar', compact($request));
    }


    public function create(Request $request)
    {
        Chamado::create($request->all());

        return redirect()->route('solicitante.chamado.index')
            ->with('success', 'Product created successfully.');
    }
}
