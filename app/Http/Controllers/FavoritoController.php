<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorito;

class FavoritoController extends Controller
{
    public function index()
    {
        $favoritos = Favorito::where('user_id', auth()->id())->get();
        return view('favoritos.index', compact('favoritos'));
    }
    public function salvarfavorito(Request $request)
    {
        Favorito::firstOrCreate([
            'user_id' => auth()->id(),
            'evento_id' => $request->input('evento_id'),
        ]);
        return redirect()->route('favoritos.listar');
    }
    public function removerfavorito($id)
    {
        $favorito = Favorito::find($id);
        if (!$favorito) {
            return redirect()->route('favoritos.listar');
        }
        if ($favorito->user_id != auth()->id()) {
            abort(403);
        }
        $favorito->delete();
        return redirect()->route('favoritos.listar');
    }
}
