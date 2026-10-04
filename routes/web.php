<?php
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\FavoritoController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [EventoController::class, 'index'])->name('dashboard');
    Route::get('/buscar', [EventoController::class, 'buscar'])->name('eventos.buscar');

    Route::get('/eventos/criar', [EventoController::class, 'criar'])->name('eventos.criar');
    Route::post('/eventos/salvar', [EventoController::class, 'salvar'])->name('eventos.salvar');
    Route::get('/eventos/{id}/editar', [EventoController::class, 'editar'])->name('eventos.editar');
    Route::put('/eventos/{id}', [EventoController::class, 'atualizar'])->name('eventos.atualizar');
    Route::delete('/eventos/{id}', [EventoController::class, 'deletar'])->name('eventos.deletar');
    Route::get('/meus-eventos', [EventoController::class, 'meusEventos'])->name('eventos.meus');

    Route::get('/favoritos', [FavoritoController::class, 'index'])->name('favoritos.listar');
    Route::post('/favoritos', [FavoritoController::class, 'salvarfavorito'])->name('favoritos.salvar');
    Route::delete('/favoritos/{id}', [FavoritoController::class, 'removerfavorito'])->name('favoritos.deletar');

    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';

Route::get('/migrar-tudo-agora-xyz123', function () {
    Artisan::call('migrate', ['--force' => true]);
    Artisan::call('db:seed', ['--force' => true]);
    return 'Migrations e seeders executados com sucesso!';
});