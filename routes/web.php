<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});


// list goods
Route::get('/goods', [GoodsController::class, 'index'])->name('goods.index');
// detail goods
Route::get('/goods/detail/{id}', [GoodsController::class, 'detail'])->name('goods.detail');
// goods form
Route::get('/goods/edit/{id?}', [GoodsController::class, 'edit'])->name('goods.edit');
// insert / update goods and redirect to list goods with some message
Route::post('/goods/insert/{id?}', [GoodsController::class, 'insert'])->name('goods.insert');
// delete goods
Route::get('/goods/delete/{id}', [GoodsController::class, 'delete'])->name('goods.delete');

// dashboard 
Route::get('/dashboard',function(){
    return view('dashboard.main');
})->name('dashboard');


// list colors
Route::get('/colors', [ColorController::class, 'index'])->name('color.index');
// goods form
Route::get('/colors/edit/{id?}', [ColorController::class, 'edit'])->name('color.edit');
// insert / update colors and redirect to list colors with some message
Route::post('/colors/insert/{id?}', [ColorController::class, 'insert'])->name('color.insert');
// delete colors
Route::get('/colors/delete/{id}', [ColorController::class, 'delete'])->name('color.delete');


// list sizes
Route::get('/sizes', [SizeController::class, 'index'])->name('size.index');
// goods form
Route::get('/sizes/edit/{id?}', [SizeController::class, 'edit'])->name('size.edit');
// insert / update sizes and redirect to list sizes with some message
Route::post('/sizes/insert/{id?}', [SizeController::class, 'insert'])->name('size.insert');
// delete sizes
Route::get('/sizes/delete/{id}', [SizeController::class, 'delete'])->name('size.delete');


// list categories
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
// category form
Route::get('/categories/edit/{id?}', [CategoryController::class, 'edit'])->name('category.edit');
// insert / update category and redirect to list categories with some message
Route::post('/categories/insert/{id?}', [CategoryController::class, 'insert'])->name('category.insert');
// delete categpru
Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');




