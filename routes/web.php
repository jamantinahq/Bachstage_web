<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'clientes.login');
Route::view('/login', 'clientes.login');
Route::view('/cadastro', 'clientes.cadastro');

Route::view('/eventos', 'eventos.index');
Route::view('/buscar', 'eventos.busca');
Route::view('/favoritos', 'favoritos.index');

Route::view('/meus-eventos', 'eventos.meus');
Route::view('/eventos/criar', 'eventos.criar');
Route::view('/eventos/editar', 'eventos.editar');
Route::view('/eventos/excluir', 'eventos.excluir');

Route::view('/perfil', 'clientes.perfil');