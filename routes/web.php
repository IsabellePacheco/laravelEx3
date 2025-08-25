<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rota protegida (apenas logado)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('/', [UserController::class,'index'])->name('user.index');
Route::get('/create-user', [UserController::class,'create'])->name('user.create');
Route::post('/store-user', [UserController::class,'store'])->name('user-store');