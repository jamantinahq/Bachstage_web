<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
     protected $table = 'eventos';
    protected $fillable = ['nome', 'descricao', 'data', 'local'];
    public $timestamps = false;
}
