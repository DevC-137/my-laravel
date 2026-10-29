<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';


Route::resource('productos', ProductoController::class);