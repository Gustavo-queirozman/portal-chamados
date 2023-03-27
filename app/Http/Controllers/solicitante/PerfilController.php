<?php

namespace App\Http\Controllers\solicitante;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    //
    public function update(Request $request){
        $usuario = new User();
        $usuario->nome = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->usuario = $request->input('usuario');
        $usuario->senha = $request->input('senha');
        $usuario->setor = $request->input('setor');
        $usuario->ramal = $request->input('ramal');
        $usuario->codAnydesk = $request->input('codAnydesk');
        $usuario = DB::table('usuario')->where('idUsuario',1)->update(['nome'=>'dfçsdmfç']);

        //return view('solicitante.perfil.editar')
        return redirect()->back()->with('status','Student Updated Successfully');
    }

    public function getEditar()
    {
        session_start();
        $idUsuario = 1;
        $user = new User();
        $dados = $user->where('idUsuario', $idUsuario)->get();
        $nome = $dados[0]['nome'];
        $email = $dados[0]['email'];
        $usuario = $dados[0]['usuario'];
        $senha = $dados[0]['senha'];
        $setor = $dados[0]['setor'];
        $ramal = $dados[0]['ramal'];
        $codAnydesk = $dados[0]['codAnydesk'];
        return view('solicitante.perfil.editar', ['nome' => $nome, 'email'=>$email, 'usuario'=>$usuario, 'senha'=>$senha, 'setor'=>$setor, 'ramal'=>$ramal, 'codAnydesk'=>$codAnydesk]);
    }

    public function postEditar(Request $request){
        print_r($request);
        return view('solicitante.perfil.editar',compact($request));
    }

    public function getVer()
    {
        session_start();
        $idUsuario = 1;
        $user = new User();
        $dados = $user->where('idUsuario', $idUsuario)->get();
        $nome = $dados[0]['nome'];
        $email = $dados[0]['email'];
        $usuario = $dados[0]['usuario'];
        $senha = $dados[0]['senha'];
        $setor = $dados[0]['setor'];
        $ramal = $dados[0]['ramal'];
        $codAnydesk = $dados[0]['codAnydesk'];
        return view('solicitante.perfil.ver', ['nome' => $nome, 'email'=>$email, 'usuario'=>$usuario, 'senha'=>$senha, 'setor'=>$setor, 'ramal'=>$ramal, 'codAnydesk'=>$codAnydesk]);
    }



}
