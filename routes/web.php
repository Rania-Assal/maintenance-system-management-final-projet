<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    // management
    Route::get('/management', [AdminController::class, 'index'])->name('management')->middleware('role:admin');
    Route::get('/about', [AdminController::class, 'about'])->name('about');
    Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
    Route::get('/services', [AdminController::class, 'services'])->name('services');
    // stripe
    Route::get('/stripe/payement', [StripeController::class, 'index'])->name('stripe.payement');
    Route::get('pay-for-technicien', [StripeController::class, 'checkout'])->name('checkout');


});





require __DIR__ . '/auth.php';
