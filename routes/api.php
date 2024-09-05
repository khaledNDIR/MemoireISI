<?php

use App\Http\Controllers\API\HebergementController;
use App\Http\Controllers\API\ReservationController;
use App\Http\Controllers\API\UtilisateurController;
use App\Http\Controllers\API\VolsController;
use App\Http\Controllers\API\VoyageController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('voyages', VoyageController::class);
Route::apiResource('vols', VolsController::class);
Route::apiResource('hebergements', HebergementController::class);
Route::apiResource('utilisateurs', UtilisateurController::class);
Route::apiResource('reservations', ReservationController::class);