<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==================== AUTH ROUTES ====================
// Login, Register, Verify Email
Route::middleware('guest')->group(function () {
    Route::view('login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
    Route::view('verify-email', 'auth.verify-email')->name('verification.notice');
});

// ==================== USER ROUTES ====================
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard user
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Booking
    Route::get('/booking', function () {
        return view('user.booking');
    })->name('booking.index');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

    // Payment
    Route::get('/payment', function () {
        return view('user.payment');
    })->name('payment.index');

    // Kalender
    Route::get('/kalender', function () {
        return view('user.kalender');
    })->name('kalender.index');
});

// ==================== ADMIN ROUTES ====================
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/report', function () {
        return view('admin.report');
    })->name('report');

    Route::post('/confirm/{booking}', [AdminController::class, 'confirm'])->name('confirm');
});

// ==================== OPERATOR ROUTES ====================
Route::middleware(['auth', 'role:operator'])->prefix('operator')->name('operator.')->group(function () {
    Route::get('/dashboard', function () {
        return view('operator.dashboard');
    })->name('dashboard');

    Route::post('/process/{booking}', [OperatorController::class, 'process'])->name('process');
});