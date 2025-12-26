<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// =================== AUTH ===================
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// =================== PROTECTED ===================
Route::middleware(['auth'])->group(function () {

    // NOTAS
    Route::get('/notas/export', [NotaController::class, 'exportExcel'])->name('notas.export');

    // Full resource (index, create, store, show, edit, update, destroy)
    Route::resource('notas', NotaController::class);
    Route::post('/notas/export', [NotaController::class, 'exportExcel'])->name('notas.export');
    Route::post('/notas/export-selected', [NotaController::class, 'exportSelected'])->name('notas.exportSelected');
 
    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
