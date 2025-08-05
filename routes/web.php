<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});


Route::get('/new', function () {
    // return view('welcome');
    return "hiiiiiiiiiiiiii new ";
});

Route::get('/job', [App\Http\Controllers\jobController::class, 'index']);