<?php

// use App\Http\Controllers\api\{ProductController};
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

// Route::get('product', [ProductController::class, 'index'])->name();