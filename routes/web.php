<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/menu', [ItemController::class, 'create'])->name('menu'); // Halaman menu
Route::post('/items', [ItemController::class, 'store'])->name('items.store'); // Menyimpan data
Route::get('/cart', [ItemController::class, 'cart'])->name('cart'); // Halaman cart