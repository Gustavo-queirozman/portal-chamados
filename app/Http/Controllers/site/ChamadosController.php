<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChamadosController extends Controller
{
    public function index(){
        return view('chamados');
    }
}
