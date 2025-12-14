<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;


Route::middleware(['auth','verified'])->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::post('/booking',[BookingController::class,'store']);
});

Route::middleware(['auth','role:admin'])->group(function(){
    Route::post('/admin/confirm/{booking}',[AdminController::class,'confirm']);
});

Route::middleware(['auth','role:operator'])->group(function(){
    Route::post('/operator/process/{booking}',[OperatorController::class,'process']);
});