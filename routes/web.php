<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PublicController;

# ---------------------------------------------

// 1. Página Inicial (Design da imagem com botão de cadastro)
Route::get('/', function () {
    return view('landing');
})->name('home');

// 2. Formulário de Cadastro (Para onde o botão da Home leva)
Route::get('/novo-cliente', [PublicController::class, 'showForm'])->name('public.form');
Route::post('/cadastro-externo', [PublicController::class, 'store'])->name('public.store');

# ---------------------------------------------

Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard'); 
    })->name('dashboard');

    Route::resource('clients', ClientController::class);
    Route::resource('vehicles', VehicleController::class);
});

require __DIR__.'/auth.php';