<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
    use SoftDeletes;
    protected $table = 'eventos';
    protected $fillable = ['user_id', 'name', 'descricao', 'data', 'local', 'imagem'];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function favoritos()
    {
        return $this->hasMany(Favorito::class, 'evento_id');
    }
}


