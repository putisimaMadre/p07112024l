<?php

use App\Http\Controllers\AntecedentesPyPController;
use App\Http\Controllers\AntecedentesFyHController;
use App\Http\Controllers\AntecedentesPNoPController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DatosGeneralesController;
use App\Http\Controllers\HijoController;
use App\Http\Controllers\PadecimientosActualesController;
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

Route::resource('cliente', ClienteController::class);
Route::resource('datosGenerales', DatosGeneralesController::class);
Route::resource('antecedentesFyH', AntecedentesFyHController::class);
Route::resource('hijo', HijoController::class);
Route::resource('antecedentesPyP', AntecedentesPyPController::class);
Route::resource('antecedentesPnoP', AntecedentesPNoPController::class);
Route::resource('padecimientosActuales', PadecimientosActualesController::class);