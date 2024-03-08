<?php

use App\Http\Controllers\BejegyzesController;
use App\Http\Controllers\TevekenysegController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/bejegyzesek', [BejegyzesController::class, 'index']);
Route::get('/bejegyzesek/{osztaly_id}', [BejegyzesController::class, 'showOsztalyId']);
Route::post('/bejegyzes', [BejegyzesController::class, 'store']);

Route::get('/tevekenysegek', [TevekenysegController::class, 'index']);
