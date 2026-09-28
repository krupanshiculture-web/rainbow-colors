<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistributorInquiryController;
use App\Http\Controllers\Admin\ContactInquiryController;
use App\Http\Controllers\BlogController as FrontBlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/products/pouch', [HomeController::class, 'pouch'])->name('pouch');
Route::get('/products/container', [HomeController::class, 'container'])->name('container');
Route::get('/products/box', [HomeController::class, 'box'])->name('box');
Route::get('/distributorship', [HomeController::class, 'distributorship'])->name('distributorship');
Route::post('/distributorship/enquiry', [
    DistributorController::class,
    'submit',
])->name('distributorship.submit');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/enquiry', [
    ContactController::class,
    'submit',
])->name('contact.submit');
Route::get('/blog', [FrontBlogController::class, 'index'])
    ->name('blog.index');

Route::get('/blog/{slug}', [FrontBlogController::class, 'show'])
    ->name('blog.show');

// Admin

Route::prefix('admin')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('admin.login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('admin.login.submit');

    Route::middleware('admin')->group(function () {

        Route::get('/dashboard', [
            DashboardController::class,
            'index',
        ])->name('admin.dashboard');

        // Distributor
        Route::get('/distributor-inquiries', [
            DistributorInquiryController::class,
            'index',
        ])->name('admin.distributor-inquiries.index');

        Route::get('/distributor-inquiries/{distributorInquiry}', [
            DistributorInquiryController::class,
            'show',
        ])->name('admin.distributor-inquiries.show');

        Route::delete('/distributor-inquiries/{distributorInquiry}', [
            DistributorInquiryController::class,
            'destroy',
        ])->name('admin.distributor-inquiries.destroy');

        // Contact
        Route::get('/contact-inquiries', [
            ContactInquiryController::class,
            'index',
        ])->name('admin.contact-inquiries.index');

        Route::get('/contact-inquiries/{contactInquiry}', [
            ContactInquiryController::class,
            'show',
        ])->name('admin.contact-inquiries.show');

        Route::delete('/contact-inquiries/{contactInquiry}', [
            ContactInquiryController::class,
            'destroy',
        ])->name('admin.contact-inquiries.destroy');
    });

    Route::resource('/blogs', BlogController::class)
        ->names('admin.blogs');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->middleware('auth')
        ->name('admin.logout');
});
