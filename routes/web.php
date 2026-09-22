<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/products/pouch', [HomeController::class, 'pouch'])->name('pouch');
Route::get('/products/container', [HomeController::class, 'container'])->name('container');
Route::get('/products/box', [HomeController::class, 'box'])->name('box');