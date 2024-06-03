<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CLientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FinanceController;

Route::get('/clients', [CLientController::class,'index'])->name('clients.index');
Route::get('/clients/create', [CLientController::class, 'create'])->name('clients.create');
Route::post('/clients', [CLientController::class, 'store'])->name('clients.store');
Route::get('clients/{id}/edit', [CLientController::class,'edit'])->name('clients.edit');
Route::put('/clients/{id}', [CLientController::class,'update'])->name('clients.update');
Route::delete('/clients/{id}', [CLientController::class, 'destroy'])->name('clients.destroy');

Route::get('/orders', [OrderController::class,'index'])->name('orders.index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('orders/{id}/edit', [OrderController::class,'edit'])->name('orders.edit');
Route::put('/orders/{id}', [OrderController::class,'update'])->name('orders.update');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::get('/products', [ProductController::class,'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class,'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/finances', [FinanceController::class,'index'])->name('finances.index');
Route::get('/finances/create', [FinanceController::class, 'create'])->name('finances.create');
Route::post('/finances', [FinanceController::class, 'store'])->name('finances.store');
Route::get('finances/{id}/edit', [FinanceController::class,'edit'])->name('finances.edit');