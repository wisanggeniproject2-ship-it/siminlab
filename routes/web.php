<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
 return redirect()->route('dashboard');
});
Route::middleware('auth')->group(function () {
 Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
 Route::resource('users', UserController::class);
 // ... route dashboard dan users
 Route::resource('category', CategoryController::class);
});
require __DIR__.'/auth.php';