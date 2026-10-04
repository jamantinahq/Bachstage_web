<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Favorito;
use Illuminate\Http\Request;

class FavoritoApiController extends Controller
{
    public function index(Request $request)
    {
        $favoritos = Favorito::where('user_id', $request->user()->id)->with('evento')->get();
        return response()->json($favoritos);
    }
    public function favoritar(Request $request)
    {
        $request->validare(['evento_id' => 'required|exists:eventos,id']);
        $favorito = Favorito::create([
            'user_id' => $request->user()->id,
            'evento_id' => $request->evento_id
        ]);
        return response()->json($favorito);
    }
    public function desfavoritar(Request $request, $id)
    {
        $favorito = Favorito::where('user_id', $request->user()->id)->where('evento_id', $id)->first();
        if (!$favorito) {
            return response()->json(['message' => 'Favorito não encontrado'], 404);
        }
        $favorito->delete();
        return response()->json(['message' => 'Evento removido dos favoritos']);
    }

}