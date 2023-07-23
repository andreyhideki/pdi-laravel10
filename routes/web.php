<?php

use App\Http\Controllers\api\{ProductController};
use App\Http\Controllers\Pedido\PedidoController;
use Illuminate\Support\Facades\Route;

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

Route::get('ping', function(){
    //echo('pong');
    return view('ping');
});

Route::get('pedido', [PedidoController::class, 'index']);
//Route::get('product', [ProductController::class, 'index'])->name();
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
//Route::get('/api/products/{id}', [ProductController::class, 'atualiza'])->name('products.atualiza');
Route::put('/api/products/{id}', [ProductController::class, 'atualiza'])->name('products.atualiza');