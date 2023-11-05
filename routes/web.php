<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Purchase\PurchaseController;
use App\Http\Controllers\Sell\SellController;
use App\Http\Controllers\GraphController;


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    // Category routes
    Route::resource('categories', CategoryController::class)
        ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])
        ->names([
            'index' => 'categories.index',
            'create' => 'categories.create',
            'store' => 'categories.store',
            'show' => 'categories.show',
            'edit' => 'categories.edit',
            'update' => 'categories.update',
            'destroy' => 'categories.destroy',
        ]);

    // Product routes
    Route::resource('products', ProductController::class)
        ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])
        ->names([
            'index' => 'products.index',
            'create' => 'products.create',
            'store' => 'products.store',
            'show' => 'products.show',
            'edit' => 'products.edit',
            'update' => 'products.update',
            'destroy' => 'products.destroy',
        ]);

    // Purchase routes
    // Route::post('/purchase/store', [PurchaseController::class, 'store'])->name('purchases.store');
    Route::resource('purchases', PurchaseController::class)
        ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])
        ->names([
            'index' => 'purchases.index',
            'create' => 'purchases.create',
            'store' => 'purchases.store',
            'show' => 'purchases.show',
            'edit' => 'purchases.edit',
            'update' => 'purchases.update',
            'destroy' => 'purchases.destroy',
        ]);

    // Sell routes
    Route::get('/sells/create', [CreateSellController::class, 'create'])->name('sells.create');
    Route::post('/sells/store', [CreateSellController::class, 'store'])->name('sells.store');
    Route::resource('sells', SellController::class)
        ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])
        ->names([
            'index' => 'sells.index',
            'create' => 'sells.create',
            'store' => 'sells.store',
            'show' => 'sells.show',
            'edit' => 'sells.edit',
            'update' => 'sells.update',
            'destroy' => 'sells.destroy',
        ]);
});
Route::get('grafico', [GraphController::class, 'index']);
