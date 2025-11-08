<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\DmsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GeneralInfoController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PriceController;
use Illuminate\Support\Facades\Route;


Route::apiResource('articles', ArticlesController::class)->only(['index', 'show']);
Route::apiResource('dms', DmsController::class)->only(['index']);
Route::apiResource('general-info', GeneralInfoController::class)->only(['index']);
Route::apiResource('contact-info', ContactInfoController::class)->only(['index']);
Route::apiResource('gallery', GalleryController::class)->only(['index']);
Route::apiResource('price', PriceController::class)->only(['index']);
Route::apiResource('personal', PersonalController::class)->only(['index']);
