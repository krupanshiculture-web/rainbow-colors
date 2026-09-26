<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\BlogController as FrontBlogController;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/products/pouch', [HomeController::class, 'pouch'])->name('pouch');
Route::get('/products/container', [HomeController::class, 'container'])->name('container');
Route::get('/products/box', [HomeController::class, 'box'])->name('box');
Route::get('/distributorship', [HomeController::class, 'distributorship'])->name('distributorship');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [FrontBlogController::class, 'index'])
    ->name('blog.index');

Route::get('/blog/{slug}', [FrontBlogController::class, 'show'])
    ->name('blog.show');

//Admin

Route::prefix('admin')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('admin.login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('admin.login.submit');

    Route::middleware('admin')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('admin.dashboard');
    });

    Route::resource('/blogs', BlogController::class)
        ->names('admin.blogs');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->middleware('auth')
        ->name('admin.logout');
});