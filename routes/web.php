<?php
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

// // Route::get('/', function () {
// //     return view('welcome');
// // });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

use Illuminate\Support\Facades\Route;
use App_producto\Http\Controllers\CategoryController; // Correct namespace
use App_producto\Http\Controllers\ProductController; // Correct namespace
use App_producto\Http\Controllers\PurchaseController; // Correct namespace
use App_producto\Http\Controllers\SellController; // Correct namespace

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    // Categories
    Route::resource('categories', CategoryController::class);

    // Products
    Route::resource('products', ProductController::class);

    // Purchases
    Route::resource('purchases', PurchaseController::class);

    // Sells
    Route::resource('sells', SellController::class);
});






