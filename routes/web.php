<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function () {
    Route::get('/products', function () {
        return view('dashboard.products.index');
    })->name('products');

    Route::resource('product-category', ProductCategoryController::class);
    Route::resource('product', ProductController::class);
});


// Products Features
Route::get('/products/add', function () {
    return view('dashboard.products.add');
})->name('add-products');

Route::get('/products/edit', function () {
    return view('dashboard.products.edit');
})->name('edit-products');


// Products Category Features
Route::get('/category-products/add', function () {
    return view('dashboard.category_products.add');
})->name('add-categories');

Route::get('/category-products/edit', function () {
    return view('dashboard.category_products.edit');
})->name('edit-categories');

require __DIR__ . '/auth.php';
