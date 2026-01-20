<?php

use App\Http\Controllers\Dashboard\AnalictycController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\ShopController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\GaleryController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/place', [GaleryController::class, 'index'])->name('galery');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/galery', [GaleryController::class, 'index'])->name('galery');


// Dashboard
Route::get('/dashboard', [AnalictycController::class, 'analityc'])->name('analityc');
