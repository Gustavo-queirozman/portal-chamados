<?php

namespace App\Models\solicitante;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['nome','email', 'usuario', 'senha', 'setor','ramal', 'codAnydesk'];
    public $timestamps = false;
}
