<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/sobre-nos', [App\Http\Controllers\SObreNosController::class, 'sobreNos'])->name('site.sobre-nos');

Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'fornecedores']);

Route::get('/servicos', [App\Http\Controllers\ServicosController::class, 'servicos']);
