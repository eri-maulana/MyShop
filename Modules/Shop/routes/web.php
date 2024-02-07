<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\App\Http\Controllers\CartController as ControllersCartController;
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
Route::get('/category/{categorySlug}', [ControllersProductController::class, 'category'])->name('products.category');
Route::get('/tag/{tagSlug}', [ControllersProductController::class, 'tag'])->name('products.tag');
Route::get('/{categorySlug}/{productSlug}', [ControllersProductController::class, 'show'])->name('products.show');
Route::middleware(['auth'])->group(function () {
    Route::get('/carts', [ControllersCartController::class, 'index'])->name('carts.index');
});
Route::get('/carts/{id}/remove', [ControllersCartController::class, 'destroy'])->name('carts.destroy');
Route::post('/carts', [ControllersCartController::class, 'store'])->name('carts.store');
Route::put('/carts', [ControllersCartController::class, 'update'])->name('carts.update');


Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@index');
});