<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\jobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/about', [App\Http\Controllers\IndexController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact']);


Route::get('/job', [App\Http\Controllers\jobController::class, 'index']);
Route::get('/blog', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/blog/create', [App\Http\Controllers\PostController::class, 'create']);
Route::get('/blog/delete/{id}', [App\Http\Controllers\PostController::class, 'delete']);
Route::get('/blog/{id}', [App\Http\Controllers\PostController::class, 'findPost']);
Route::get('/blog/show', [App\Http\Controllers\PostController::class, 'show']);

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);
