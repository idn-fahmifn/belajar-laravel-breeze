<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PinjamController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

// Main Routing.

Route::resource('buku', BukuController::class)->middleware(['auth']);
Route::resource('pinjam', PinjamController::class)->middleware(['auth']);


