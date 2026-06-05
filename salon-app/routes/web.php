<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Wajib ditambahkan agar Route kenal Controllernya

Route::get('/', function () {
    return view('index'); // Halaman depan The Girls Club
});

// Menggunakan Controller untuk urusan Login & Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);