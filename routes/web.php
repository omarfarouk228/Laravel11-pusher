<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('/notify', [App\Http\Controllers\FrontController::class, 'notify'])->name('notify');
