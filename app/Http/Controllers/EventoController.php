<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', compact('eventos'));
    }
    public function criar()
    {
        return view('eventos.criar');
    }
    public function salvar(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'local' => 'required|string|max:255',
            'data' => 'required|date|after:today',
            'descricao' => 'required|string',
            'imagem' => 'required|string',
        ]);

        Evento::create([
            'user_id' => auth()->id(),
            'name' => $request->input('name'),
            'descricao' => $request->input('descricao'),
            'data' => $request->input('data'),
            'local' => $request->input('local'),
            'imagem' => $request->input('imagem')
        ]);
        return redirect()->route('dashboard');
    }
    public function editar($id)
    {
        $evento = Evento::findOrFail($id);
        if ($evento->user_id != auth()->id()) {
            abort(403);
        }
        return view('eventos.editar', compact('evento'));
    }
    public function atualizar(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);
        if ($evento->user_id != auth()->id()) {
            abort(403);
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'local' => 'required|string|max:255',
            'data' => 'required|date|after:today',
            'descricao' => 'required|string',
            'imagem' => 'required|string',
        ]);
        $evento->update([
            'name' => $request->input('name'),
            'descricao' => $request->input('descricao'),
            'data' => $request->input('data'),
            'local' => $request->input('local'),
            'imagem' => $request->input('imagem')
        ]);
        return redirect()->route('eventos.meus');
    }
    public function deletar($id)
    {
        $evento = Evento::findOrFail($id);
        if ($evento->user_id != auth()->id()) {
            abort(403);
        }
        $evento->delete();
        return redirect()->route('eventos.meus');
    }
    public function buscar(Request $request)
    {
        $eventos = Evento::where('name', 'like', '%' . $request->input('termo') . '%')->get();
        return view('eventos.index', compact('eventos'));
    }
    public function meusEventos()
    {
        $eventos = Evento::where('user_id', auth()->id())->get();
        return view('eventos.meus', compact('eventos'));
    }
}