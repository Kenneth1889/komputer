<?php

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

// Route::get('/', function () {
//     return view('starter');
// });
// admin category controller
Route::get('/admin-category', [\App\Http\Controllers\AdminCategoryController::class, 'index'])->name('hlm');
Route::get('/admin-category/create', [\App\Http\Controllers\AdminCategoryController::class, 'create'])->name('buat');
Route::post('/admin-category/create', [\App\Http\Controllers\AdminCategoryController::class, 'store'])->name('toko');
Route::get('/admin-category/edit/{category}', [\App\Http\Controllers\AdminCategoryController::class, 'edit'])->name('cat-edit');
Route::post('/admin-category/edit/{category}', [\App\Http\Controllers\AdminCategoryController::class, 'update'])->name('cat-update');



//admin item controller
Route::get('/admin-item', [\App\Http\Controllers\ItemController::class, 'index'])->name('item');
Route::get('/admin-item/create', [\App\Http\Controllers\ItemController::class, 'create'])->name('create');
Route::post('/admin-item/create', [\App\Http\Controllers\ItemController::class, 'store'])->name('item-store');

Route::get('/', [\App\Http\Controllers\BuyerItemController::class, 'index'])->name('buyeritem');
Route::get('/item', [\App\Http\Controllers\BuyerItemController::class, 'show'])->name('showitem');


