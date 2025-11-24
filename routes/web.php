<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('clients', ClientController::class);

Route::resource('vehicles', VehicleController::class);
