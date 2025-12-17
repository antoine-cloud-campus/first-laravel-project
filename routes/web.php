<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

// Route de la page d'accueil avec le nom "home"
Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('articles')->name('article.')->group(function () {
    Route::get('/creer', [ArticleController::class, 'create']);
    Route::get('/modifier/{id}', [ArticleController::class, 'update']);
    Route::get('/supprimer/{id}', [ArticleController::class, 'delete']);
    Route::get('/{id}', [ArticleController::class, 'show'])->name('details');
});
// Route error
Route::fallback(function () {
    return view('errors.not-found');
});
