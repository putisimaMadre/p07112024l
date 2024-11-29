<?php

use App\Http\Controllers\AnalisisFacialController;
use App\Http\Controllers\AnalisisFuncionalController;
use App\Http\Controllers\AntecedentesPyPController;
use App\Http\Controllers\AntecedentesFyHController;
use App\Http\Controllers\AntecedentesPNoPController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ConsentimientoInformadoController;
use App\Http\Controllers\DatosGeneralesController;
use App\Http\Controllers\EvaluacionClinicaController;
use App\Http\Controllers\EvaluacionClinicaInfantilController;
use App\Http\Controllers\HijoController;
use App\Http\Controllers\PadecimientosActualesController;
use App\Http\Controllers\PagoController;
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
Route::resource('analisisFacial', AnalisisFacialController::class);
Route::resource('analisisFuncional', AnalisisFuncionalController::class);
Route::resource('evaluacionClinica', EvaluacionClinicaController::class);
Route::resource('evaluacionClinicaInfantil', EvaluacionClinicaInfantilController::class);
Route::resource('consentimientoInformado', ConsentimientoInformadoController::class);
Route::resource('pagos', PagoController::class);
