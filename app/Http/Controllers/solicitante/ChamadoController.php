<?php

namespace App\Http\Controllers\solicitante;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    public function ver(Request $request){
        return view('solicitante.chamado.ver');
    }


    public function criar(){

    }

    public function editar(){

    }


}
