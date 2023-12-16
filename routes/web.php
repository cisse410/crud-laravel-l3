<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[CategoryController::class, 'home'])->name('home');

Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class)
        ->except(['show'])
        ->names('categories');
    Route::resource('products', ProductController::class)->names('products');
});

