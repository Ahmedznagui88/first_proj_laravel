<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\PublicController;
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
Route::get('/',[PublicController::class, 'home'])->name("home");
Route::get('/location',[PublicController::class, 'location'])->name("location");

Route::get('/music', [MusicController::class, 'index'])->name("music");
Route::get('/sounds/dettaglio/{id}',[MusicController::class, 'show'])->name("sound-dettaglio");


Route::get('/contatti', [PublicController::class, 'contact'])->name("contatti");
Route::post('/contatti/invia', [PublicController::class, 'contactSubmit'])->name('invia.contatto');
