<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorito;
class FavoritoController extends Controller
{
    public function index()
    {
$favoritos = Favorito::all();
return view('favoritos.index', compact('favoritos'));


    }
}
