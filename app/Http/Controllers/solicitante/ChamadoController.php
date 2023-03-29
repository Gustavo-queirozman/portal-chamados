<?php

namespace App\Http\Controllers\solicitante;

use App\Http\Controllers\Controller;

use App\Models\solicitante\Chamado;
use Illuminate\Http\Request;


class ChamadoController extends Controller
{

    public function create()
    {
        return view('solicitante.chamado.criar');
    }

    public function store(Request $request)
    {
        return Chamado::create([
            'tipo' => 'tipo'
        ]);
    }

    public function show()
    {
        /*
        $idUsuario = 1;
        $usuario = new User();
        $dados = $usuario->where('idUsuario', $idUsuario)->get();
        $dados->fill($dados);
        var_dump($dados);
        die();
        return view('solicitante.perfil.editar', ['nome' => $nome, 'email' => $email, 'usuario' => $usuario, 'senha' => $senha, 'setor' => $setor, 'ramal' => $ramal, 'codAnydesk' => $codAnydesk]);
        */
    }

    public function edit(Request $request)
    {
        $idUsuario = 1;
        return view('solicitante.chamado.editar', [
            'chamado' => Chamado::findOrFail($idUsuario)
        ]);
    }


    public function update(Request $request)
    {
        $idChamado = 1;
        $chamado = Chamado::findOrFail($idChamado);
        $chamado->tipo = $request->input('tipo');
        $chamado->update();
        return view('solicitante.chamado.editar',  [
            'chamado' => Chamado::findOrFail($idChamado)
        ] );
    }

    /*
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
    }*/
}
