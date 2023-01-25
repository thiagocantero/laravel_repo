<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('pedidos', [PedidoController::class, 'index']);
Route::get('pedidos/{id}', [PedidoController::class, 'show']);
Route::post('pedidos', [PedidoController::class, 'store']);
Route::put('pedidos/{id}', [PedidoController::class, 'update']);
Route::delete('pedidos/{id}', [PedidoController::class, 'delete']);