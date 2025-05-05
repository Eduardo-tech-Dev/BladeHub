<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarbeariaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/barbearias', [App\Http\Controllers\BarbeariaController::class, 'index'])->name('barbearias.index');



