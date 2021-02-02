<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\TrianguloController;
use App\Http\Controllers\api\RetanguloController;
use App\Http\Controllers\api\AreaController;



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

Route::post('/triangulos', [TrianguloController::class, 'store']);
Route::get('/triangulos', [TrianguloController::class, 'index']);

Route::post('/retangulos', [RetanguloController::class, 'store']);
Route::get('/retangulos', [RetanguloController::class, 'index']);

Route::get('/areas', [AreaController::class, 'show']);


