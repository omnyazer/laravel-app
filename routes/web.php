<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('articles')->group(function () {
    Route::get('/creer', [ArticleController::class, 'createSeed'])->name('articles.createSeed');
    Route::get('/modifier/{id}', [ArticleController::class, 'updateStatic'])->name('articles.updateStatic');
    Route::get('/supprimer/{id}', [ArticleController::class, 'delete'])->name('articles.delete');

    Route::get('/{id}', [ArticleController::class, 'show'])->name('article.details');
});

Route::fallback(function () {
    return view('errors.not-found');
});
