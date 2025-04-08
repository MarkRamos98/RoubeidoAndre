<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/sobre-nos', [App\Http\Controllers\SObreNosController::class, 'sobreNos'])->name('site.sobre-nos');

Route::prefix("/api")->group(function(){
    Route::get('/login', function(){
        return 'login';
    });
    
    Route::get('/produtos', function(){
        return 'produtos';
    });
    
    Route::get('/provedores', function(){
        return 'provedores';
    });
    
    Route::get('/cliente', function(){
        return 'cliente';
    });
});

Route::fallback(function(){
    echo 'A rota acessada não existe. 
    <a href="'.route('site.principal').'">clique aqui</a>
    para ir ao site principal';
});