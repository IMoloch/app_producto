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
        ->only(['index', 'create', 'store', 'report', 'edit', 'update', 'destroy', 'report'])
        ->names([
            'index' => 'products.index',
            'create' => 'products.create',
            'store' => 'products.store',
            'report' => 'products.report',
            'edit' => 'products.edit',
            'update' => 'products.update',
            'destroy' => 'products.destroy',
            'report' => 'products.report',
        ]);

    // Purchase routes
    Route::resource('purchases', PurchaseController::class)
        ->only(['index', 'create', 'store', 'report', 'edit', 'update', 'destroy'])
        ->names([
            'index' => 'purchases.index',
            'create' => 'purchases.create',
            'store' => 'purchases.store',
            'report' => 'purchases.report',
            'edit' => 'purchases.edit',
            'update' => 'purchases.update',
            'destroy' => 'purchases.destroy',
        ]);

    // Sell routes
    Route::resource('sells', SellController::class)
        ->only(['index', 'create', 'store', 'report', 'edit', 'update', 'destroy'])
        ->names([
            'index' => 'sells.index',
            'create' => 'sells.create',
            'store' => 'sells.store',
            'report' => 'sells.report',
            'edit' => 'sells.edit',
            'update' => 'sells.update',
            'destroy' => 'sells.destroy',
        ]);
});
Route::get('grafico', [GraphController::class, 'index'])->name('graph.index');
Route::get('products/report', [ProductController::class, 'report'])->name('products.report');
Route::get('purchases/report', [PurchaseController::class, 'report'])->name('purchases.report');
Route::get('sells/report', [SellController::class, 'report'])->name('sells.report');