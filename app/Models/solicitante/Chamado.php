<?php

namespace App\Models\solicitante;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $table = 'chamado';
    protected $fillable = ['nome','idade'];
    public $timestamps = false;
}
