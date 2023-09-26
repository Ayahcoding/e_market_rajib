<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\ContactController;


// Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('profile', [HomeController::class, 'profile']);
Route::get('contact', [HomeController::class, 'contact']);
Route::resource('produk', ProdukController::class);
Route::resource('pembelian', PembelianController::class);

