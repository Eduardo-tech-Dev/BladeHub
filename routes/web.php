<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarbeariaController;



Route::get('/', [App\Http\Controllers\BarbeariaController::class, 'index'])->name('pages.index');



Route::get('/login', function () {
    return view('pages.login');
});

