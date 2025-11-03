<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\DmsController;
use App\Http\Controllers\GeneralInfoController;
use Illuminate\Support\Facades\Route;


Route::apiResource('articles', ArticlesController::class)->only(['index', 'show']);
Route::apiResource('dms', DmsController::class)->only(['index']);
Route::apiResource('general-info', GeneralInfoController::class)->only(['index']);
Route::apiResource('contact-info', ContactInfoController::class)->only(['index']);
