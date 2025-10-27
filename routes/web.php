<?php

use App\Http\Controllers\Admin\Home\HomeController;
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

Route::get('/sys/home', [HomeController::class, 'index']);
