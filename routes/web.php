<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Tela inicial
Route::get('/', [AuthController::class, 'index'])->name('users.index');

// Cadastro
Route::get('/cadastro', [UserController::class, 'create'])->name('user.create');
Route::post('/cadastro', [UserController::class, 'store'])->name('users-store');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (protegida)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

// Edição de perfil (protegida)
Route::get('/usuario/{id}/editar', [UserController::class, 'edit'])->middleware('auth')->name('users.edit.id');
Route::put('/usuario/{id}', [UserController::class, 'update'])->middleware('auth')->name('user.update');

// Recuperação de senha
Route::get('/esqueci-senha', [AuthController::class, 'showForgotForm'])->name('password.request');
Route::post('/esqueci-senha', [AuthController::class, 'sendResetLink'])->name('password.email');

// Redefinir senha
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
