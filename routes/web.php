<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Halaman Depan (Public)
Route::get('/', [ArticleController::class, 'index'])->name('home');

// Halaman Admin (Login Dulu)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ArticleController::class, 'admin'])->name('dashboard');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
    // Bawaan Breeze (Biarkan saja)
    Route::get('/', [ArticleController::class, 'index'])->name('home');

// TAMBAHKAN INI: Route untuk baca detail artikel
Route::get('/read/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';