<?php

use App\Http\Controllers\jobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/about', [App\Http\Controllers\IndexController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact']);


Route::get('/job', [App\Http\Controllers\jobController::class, 'index']);