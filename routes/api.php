<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;


Route::apiResource('articles', ArticlesController::class)->only(['index', 'show']);
