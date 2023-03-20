<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = "contato";
    public $timestamps = false;
    protected $fillable = ['nome', 'telefone', 'email', 'motivoContato', 'mensagem'];
}
