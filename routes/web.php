<?php

use App\Http\Controllers\AfterController;
use App\Http\Controllers\BeforeController;
use App\Http\Controllers\FinalsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::resource('finals', FinalsController::class);
Route::resource('befores', BeforeController::class);
Route::resource('afters', AfterController::class);
