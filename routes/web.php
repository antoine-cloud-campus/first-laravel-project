<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);

use App\Http\Controllers\ArticleController;

Route::get('/articles/{id}', [ArticleController::class, 'show']);