<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {

        $contato = new Contato();
        $contato->create($request->all());

        return view('contato');
    }
}
