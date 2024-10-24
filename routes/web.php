<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
    Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);
    Route::get('/services', [App\Http\Controllers\PagesController::class, 'services']);
    Route::resource('clients', 'App\Http\Controllers\ClientsController');
});

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/clients/{client}/edit', [App\Http\Controllers\ClientsController::class, 'edit'])->name('clients.edit');
    Route::put('/clients/{client}', [App\Http\Controllers\ClientsController::class, 'update'])->name('clients.update');
    Route::delete('/clients/{client}', [App\Http\Controllers\ClientsController::class, 'destroy'])->name('clients.destroy');
});

require __DIR__.'/auth.php';
