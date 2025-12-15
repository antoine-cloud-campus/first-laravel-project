<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

// Route de la page d'accueil avec le nom "home"
Route::get('/', [IndexController::class, 'index'])->name('home');

// Route des articles avec le nom "article.details"
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.details');