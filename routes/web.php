<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Dashboard route (GET isteği)
Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

// Welcome route (varsayılan sayfa)
Route::get('/', function() {
    return view('welcome');
})->name('welcome');
// Welcome route (varsayılan sayfa)
Route::get('/customers', function() {
    return view('customers');
})->name('customers');

// Auth route (POST isteği)
Route::post('/authenticate', [AuthController::class, 'authenticate']);

