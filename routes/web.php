<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [WebController::class, 'index'])->name('accueil');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::get('/chambre', [WebController::class, 'room'])->name('room');
Route::get('/Réservation', [WebController::class, 'booking'])->name('booking');
Route::get('/Qui_somme_nous', [WebController::class, 'about'])->name('about');
Route::get('/inscription', [WebController::class, 'signup'])->name('signup');
Route::get('/chambre/details', [WebController::class, 'details'])->name('room_details');

Route::resource('rooms', \App\Http\Controllers\RoomsController::class);

Route::get('/payment/notify', [\App\Http\Controllers\PaymentController::class, 'notify'])->name('payment.notify');
Route::get('/payment/retour', [\App\Http\Controllers\PaymentController::class, 'retour'])->name('payment.retour');

Route::get('/payment', [\App\Http\Controllers\PaymentController::class, 'showPayment']);
Route::post('/payment', [\App\Http\Controllers\PaymentController::class, 'testGenerator'])->name('payment.checkout');


require __DIR__ . '/auth.php';
