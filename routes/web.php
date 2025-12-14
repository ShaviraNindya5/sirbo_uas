<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;

/*
|--------------------------------------------------------------------------
| ROOT
|--------------------------------------------------------------------------
| http://127.0.0.1:8000
*/
Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| AUTH (login, register, verify)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| USER (TANPA CONTROLLER)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // USER DASHBOARD
    Route::view('/dashboard', 'user.dashboard')->name('dashboard');

    // USER BOOKING
    Route::view('/booking', 'user.booking')->name('booking');

    // USER PAYMENT
    Route::view('/payment', 'user.payment')->name('payment');

    // USER KALENDER
    Route::view('/kalender', 'user.kalender')->name('kalender');

});

/*
|--------------------------------------------------------------------------
| ADMIN (PAKAI CONTROLLER)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::get('/report', [AdminController::class, 'report'])
        ->name('admin.report');

});

/*
|--------------------------------------------------------------------------
| OPERATOR (PAKAI CONTROLLER)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('operator')->group(function () {

    Route::get('/dashboard', [OperatorController::class, 'dashboard'])
        ->name('operator.dashboard');

});