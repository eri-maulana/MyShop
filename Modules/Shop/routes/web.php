<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\App\Http\Controllers\ProductController as ControllersProductController;
use Modules\Shop\App\Http\Controllers\ShopController;

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


Route::get('/products', [ControllersProductController::class, 'index'])->name('products.index');


Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@index');
});