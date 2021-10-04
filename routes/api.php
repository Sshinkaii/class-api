<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//lista todas as vendas 
Route::get('sales', 'App\Http\Controllers\API\SaleController@index');

//lista apenas uma venda
Route::get('sales/{sale}', 'App\Http\Controllers\API\SaleController@show');

//cria uma nova venda
Route::post('sales', 'App\Http\Controllers\API\SaleController@store');

//deletar uma venda
Route::delete('sales/{sale}', 'App\Http\Controllers\API\SaleController@destroy');

//dar update na venda
Route::put('sales/{sale}', 'App\Http\Controllers\API\SaleController@update');

/* get pegar algo
post criar algo
nao tem problema ter nomes iguais de rota se a assinatura for diferente
php artisan route:list
*/