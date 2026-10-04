<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Evento;

class EventoApiController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Eventos listados com sucesso',
            'data' => $eventos,
        ]);
    }
}