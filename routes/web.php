<?php

use App\Livewire\Cart;
use App\Livewire\Products\EditProduct;
use App\Livewire\Products\CreateProduct;
use App\Livewire\Products\IndexProduct;
use App\Livewire\Products\ShowProduct;
use App\Livewire\Products\Products;
use Illuminate\Support\Facades\Route;


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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//Admin routes
Route::get('products/create-product', CreateProduct::class);
Route::get('products/index-product', IndexProduct::class)->name('index-product');
Route::get('products/{product}', ShowProduct::class)->name('show-product');
Route::get('products/{product}/edit', EditProduct::class)->name('edit-product');

//Client routes
Route::get('products', Products::class);
Route::get('cart', Cart::class);



require __DIR__.'/auth.php';
