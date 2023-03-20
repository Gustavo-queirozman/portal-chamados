<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "usuario";
    public $timestamps = false;
    protected $fillable = ['usuario', 'senha', 'nome', 'email', 'setor', 'nivelPermissao'];
}
