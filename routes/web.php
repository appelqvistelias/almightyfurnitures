<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::view('/', 'home');

Route::resource('categories', CategoryController::class);

Route::controller(ProductController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function () {

        Route::get('/', 'index')->name('index');

        Route::get('/create', 'create')->name('create');

        Route::post('/store', 'store')->name('store');

        Route::get('/{product}', 'show')->name('show');

        Route::get('/{product}/edit', 'edit')->name('edit');

        Route::patch('/{product}', 'update')->name('update');


        Route::delete('/{product}', 'destroy')->name('destroy');
    });

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
        Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
    });
});

require __DIR__ . '/auth.php';
