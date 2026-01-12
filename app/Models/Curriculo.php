<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    protected $fillable = ['vaga_id', 'nome', 'email', 'descricao'];
}
