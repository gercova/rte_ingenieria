<?php

use App\Http\Controllers\Admin\Home\HomeController;
use App\Http\Controllers\Admin\Maintenance\ProductsController;
use App\Http\Controllers\Admin\Sales\SalesController;
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

Route::get('/', function () {
    return view('livewire.pw.index');
});

Route::get('/product', function () {
    return view('livewire.pw.product');
});

Route::get('/sys/home',                     [HomeController::class, 'index'])->name('home');
Route::get('/sys/maintenance/products',     [ProductsController::class, 'index'])->name('products');
Route::get('/sys/maintenance/list',     [ProductsController::class, 'list']);
Route::post('/sys/maintenance/store',           [ProductsController::class, 'store']);
Route::get('/sys/maintenance/{product}',           [ProductsController::class, 'show']);
Route::delete('/sys/maintenance/products/{id}', [ProductsController::class, 'destroy']);
Route::get('/sys/maintenance/brands',       [ProductsController::class, 'index'])->name('brands');
Route::get('/sys/maintenance/categories',   [ProductsController::class, 'index'])->name('categories');
Route::get('/sys/maintenance/types',        [ProductsController::class, 'index'])->name('types');
Route::get('/sys/operations/sales',         [SalesController::class, 'index'])->name('sales');
