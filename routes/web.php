<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReserverController;
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

Route::get('/',[Controller::class,'ListeVols']);

Route::get('/apropos',function(){
    return view('frontEnd.about');
});

Route::get('/hotel',function(){
    return view('frontEnd.hotels');
});

Route::get('/contact',function(){
    return view('frontEnd.contacts');
});

Route::post('/rechercher',[Controller::class,'rechercheVols'])->name('vols.recherche');

Route::get('/reserver/{id}',[Controller::class,'reserver'])->name('vols.reserver');

Route::post('/valider',[ReserverController::class,'valider'])->name('vols.valider');
Route::post('/paiement/confirmation', [ReserverController::class, 'confirmPayment'])->name('paiement.confirmation');
