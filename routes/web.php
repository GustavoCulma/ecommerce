<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Livewire\ShoppingCart;
use App\Http\Livewire\CreateOrder;

Route::get('/', WelcomeController::class);
Route::get('search', SearchController::class)->name('search');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');
Route::get('orders/{order}/payment', [OrderController::class, 'payment'])->name('orders.payment');

Route::middleware(['auth'])->group(function () {
    Route::get('orders/create', CreateOrder::class)->name('orders.create');
});
