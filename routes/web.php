<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarbeariaController;



Route::get('/', [App\Http\Controllers\BarbeariaController::class, 'index'])->name('barbearias.index');



