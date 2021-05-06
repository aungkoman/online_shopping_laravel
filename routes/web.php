<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;

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
Route::post('/goods/insert{id?}', [GoodsController::class, 'insert'])->name('goods.insert');
