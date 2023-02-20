<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReferentielController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/accueil',[HomeController::class,'index'])->name('accueil'); 
Route::get('/',[TypeController::class,'index'])->name('type.index'); 
Route::post('/type',[TypeController::class,'store'])->name('type.store'); 
Route::resource('candidat',CandidatController::class);
Route::resource('formation',FormationController::class);
Route::resource('referentiel',ReferentielController::class);