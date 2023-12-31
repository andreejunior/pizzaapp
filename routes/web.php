<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProfileController,CargoController,ClienteController,EnderecoController,PedidoController,ProdutoController,ProdutoTamanhoController,};
use App\Models\Endereco;
use App\Models\Pedido;
use App\Models\Produto;
use App\Models\Tamanho;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * ----------------------------
 * Cargos
 * ----------------------------
 */
Route::prefix('cargos')
     ->controller(CargoController::class)
     ->group(function () {
        Route::get('/','index')->name('cargo.index');
        Route::get('/novo', 'create')->name('cargo.create');
        Route::get('/{id}', 'show')->name('cargo.show');
        Route::get('/editar/{id}', 'edit')->name('cargo.editar');
        Route::post('/store', 'store')->name('cargo.store');
        Route::post('/update', 'update')->name('cargo.update');
        Route::post('/destroy', 'destroy')->name('cargo.destroy');

     });

     Route::prefix('clientes')
     ->controller(ClienteController::class)
     ->group(function () {
        Route::get('/','index')->name('cliente.index');
        Route::get('/novo', 'create')->name('cliente.create');
        Route::get('/{id}', 'show')->name('cliente.show');
        Route::get('/editar/{id}', 'edit')->name('cliente.editar');
        Route::post('/store', 'store')->name('cliente.store');
        Route::post('/update', 'update')->name('cliente.update');
        Route::post('/destroy', 'destroy')->name('cliente.destroy');
     });

     Route::prefix('enderecos')
     ->controller(EnderecoController::class)
     ->group(function () {
        Route::get('/','index')->name('enderecos.index');
        Route::get('/novo', 'create')->name('enderecos.create');
        Route::get('/{id}', 'show')->name('enderecos.show');
        Route::get('/editar/{id}', 'edit')->name('enderecos.editar');
        Route::post('/store', 'store')->name('enderecos.store');
        Route::post('/update', 'update')->name('enderecos.update');
        Route::post('/destroy', 'destroy')->name('enderecos.destroy');
     });

     Route::prefix('pedidos')
     ->controller(PedidoController::class)
     ->group(function () {
        Route::get('/','index')->name('pedido.index');
        Route::get('/novo', 'create')->name('pedido.create');
        Route::get('/{id}', 'show')->name('pedido.show');
        Route::get('/editar/{id}', 'edit')->name('pedido.editar');
        Route::post('/store', 'store')->name('pedido.store');
        Route::post('/update', 'update')->name('pedido.update');
        Route::post('/destroy', 'destroy')->name('pedido.destroy');
     });

     Route::prefix('produtos')
     ->controller(ProdutoController::class)
     ->group(function () {
        Route::get('/','index')->name('produto.index');
        Route::get('/novo', 'create')->name('produto.create');
        Route::get('/{id}', 'show')->name('produto.show');
        Route::get('/editar/{id}', 'edit')->name('produto.editar');
        Route::post('/store', 'store')->name('produto.store');
        Route::post('/update', 'update')->name('produto.update');
        Route::post('/destroy', 'destroy')->name('produto.destroy');
     });

     Route::prefix('tamanhos')
     ->controller(ProdutoTamanhoController::class)
     ->group(function () {
        Route::get('/','index')->name('tamanho.index');
        Route::get('/novo', 'create')->name('tamanho.create');
        Route::get('/{id}', 'show')->name('tamanho.show');
        Route::get('/editar/{id}', 'edit')->name('tamanho.editar');
        Route::post('/store', 'store')->name('tamanho.store');
        Route::post('/update', 'update')->name('tamanho.update');
        Route::post('/destroy', 'destroy')->name('tamanho.destroy');
     });


require __DIR__.'/auth.php';
