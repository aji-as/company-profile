<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ShopController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\GaleryController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Auth\AuthGoogleController;
use App\Http\Controllers\dashboard\BlogsController;
use App\Http\Controllers\dashboard\OrdersController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\Dashboard\AnalitycController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/detail/{product}', [ShopController::class, 'show'])->name('shop.detail');
Route::get('/place', [GaleryController::class, 'index'])->name('galery');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/galery', [GaleryController::class, 'index'])->name('galery');


// // Dashboard
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [AnalitycController::class, 'index'])->name('analytics');
//     Route::get('/dashboard/orders',[OrdersController::class , 'index'])->name('orders');
//     Route::get('/dashboard/products',[ProductController::class, 'index'])->name('products');
//     Route::get('/dashboard/blogs', [BlogsController::class, 'index'])->name('blogs');
// });


Route::get('/dashboard', [AnalitycController::class, 'index'])->name('analytics');
    Route::get('/dashboard/orders',[OrdersController::class , 'index'])->name('orders');
    Route::get('/dashboard/products',[ProductController::class, 'index'])->name('products');
    Route::get('/dashboard/blogs', [BlogsController::class, 'index'])->name('blogs');
    Route::get('/dashboard/products/add', [ProductController::class, 'addProduct'])->name('products.add');
    Route::post('/dashboard/products/store', [ProductController::class, 'storeProduct'])->name('products.store');
    Route::get('/dashboard/products/edit/{product}', [ProductController::class, 'editProduct'])->name('products.edit');
    Route::post('/dashboard/products/update/{product}', [ProductController::class, 'updateProduct'])->name('products.update');
    Route::post('/dashboard/products/delete/{product}', [ProductController::class, 'deleteProduct'])->name('products.delete');



// Auth
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/register', [AuthController::class, 'showregister'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Auth Google 
Route::get('/auth/google', [AuthGoogleController::class, 'ridirect'])->name('google.redirect');
Route::get('/auth/google/callback', [AuthGoogleController::class, 'callback'])->name('google.callback');