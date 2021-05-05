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

Route::get('/', function () {
    return view('welcome');
});


// list goods
Route::get('/admin', function () {
    return view('admin.goods_table');
});
// goods form
Route::get('/goods/form', function () {
    return view('admin.goods_form');
});
// insert / update goods and redirect to list goods with some message
Route::post('/goods/new', function () {
    return redirect('/admin');
    //return view('admin.goods_form');
});
