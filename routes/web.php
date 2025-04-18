<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\TabelaController;
Route::get('/tabela', [TabelaController::class, 'exibirTabela'])->name('tabela');



Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');


Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::get('/usuarios/{id}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');












































































































#rotas teste estudando 
Route::any('/any', function(){

return "Perminte todo tipo de acesso http (put, delete, get, post)";

});

Route::match(['get', 'delete'], '/match', function(){

return "Perminte apenas acessos definidos";

});
Route::get('produto/{id}/{cat?}', function($id,$cat =" "){

    return "id do produto e:".$id."<br>"." a categoria e:".$cat;
    
    });

route::redirect("sobre/","/sobre");
Route::view("/sobre","/sobre");
#rota mais eficiente


Route::get('/carros', function(){

    return view("carros");
    
    })->name("noticias");

    #rota nomeada quando chamar novidades redireciona pra news
Route::get('/novidades', function(){

    return redirect()->route("admin.clientes");
    
    });

#rotas agrupadas 
Route::name('admin.')->group(function(){
    Route::get('admin/dashboard', function(){
        return "dashboard";
    })->name('dashboard');

    Route::get('admin/clientes', function(){
        return "clientes";
    })->name('clientes');
});

Route::get("/a",[ProdutoController::class,"index"]);