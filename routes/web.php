<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/',[WebController::class, 'index'])->name('accueil');
Route::get('/contact',[WebController::class, 'contact'])->name('contact');
Route::get('/chambre',[WebController::class, 'room'])->name('room');
Route::get('/Réservation',[WebController::class, 'booking'])->name('booking');
Route::get('/Qui_somme_nous',[WebController::class, 'about'])->name('about');
Route::get('/inscription',[WebController::class, 'signup'])->name('signup');
Route::get('/chambre/details',[WebController::class, 'details'])->name('room_details');
