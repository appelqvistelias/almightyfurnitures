<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::resource('categories', CategoryController::class);

// Route::controller(ProductController::class)
//     ->prefix('products')
//     ->name('products.')
//     ->group(function () {

//         Route::get('/', 'index')->name('index');

//         Route::get('/create', 'create')->name('create');

//         Route::post('/store', 'store')->name('store');

//         Route::get('/{product}', 'show')->name('show');

//         Route::get('/{product}/edit', 'edit')->name('edit');

//         Route::patch('/{product}', 'update')->name('update');


//         Route::delete('/{product}', 'destroy')->name('destroy');
//     });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
//         Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
//     });
// });

// require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('categories', CategoryController::class);

Route::resource('products', ProductController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
        Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
        Route::get('/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
        Route::post('/products', [AdminProductController::class, 'store'])->name('admin.products.store');
        Route::get('/products/{product}', [AdminProductController::class, 'show'])->name('admin.products.show');
        Route::get('/products/{product}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
        Route::patch('/products/{product}', [AdminProductController::class, 'update'])->name('admin.products.update');
        Route::delete('/products/{product}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');
    });
});

require __DIR__ . '/auth.php';
