<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/form', 'formulier.index');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');


Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('product.show');

// catch all routes (not found) to PageController instead of nova etc.
Route::any('/{any}', [PageController::class, 'route'])->where('any', '^(?!admin|nova).*$')->name('page');
