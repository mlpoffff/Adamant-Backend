<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\DmsController;
use Illuminate\Support\Facades\Route;


Route::apiResource('articles', ArticlesController::class)->only(['index', 'show']);
Route::apiResource('dms', DmsController::class)->only(['index']);
