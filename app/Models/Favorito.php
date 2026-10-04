<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Favorito extends Model
{
    protected $table = 'favoritos';
    protected $fillable = ['user_id', 'evento_id'];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }
}
