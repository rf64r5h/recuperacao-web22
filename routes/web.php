<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsersController::class, 'index']);

Route::get('/adicionar',[UsersController::class, 'create']);

Route::post('/adicionar', [UsersController::class, 'store'])->name('adicionar');

Route::get('/listar/{id}', [UsersController::class, 'show']);

Route::get('/editar/{id}', [UsersController::class, 'edit']);

Route::post('/editar/{id}', [UsersController::class, 'update']) -> name('editar');

Route::get('/excluir/{id}', [UsersController::class, 'delete']);

Route::post('/excluir/{id}', [UsersController::class, 'destroy']) -> name('excluir');