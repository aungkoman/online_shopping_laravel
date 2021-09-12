<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MmUserController;
use App\Http\Controllers\GoodsOrderController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\SubCategoryController;

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


// index page
Route::get('/home', [ShoppingController::class, 'index'])->name('home');

Route::get('/products', [ShoppingController::class, 'products'])->name('products');

Route::get('/newarrival', [ShoppingController::class, 'newarrival'])->name('newarrival');

Route::get('/specialoffer', [ShoppingController::class, 'specialoffer'])->name('specialoffer');

Route::get('/mostpopular', [ShoppingController::class, 'mostpopular'])->name('mostpopular');

Route::get('/cart', [ShoppingController::class, 'cart'])->name('cart');

Route::post('/order', [ShoppingController::class, 'order'])->name('order');

Route::get('/category/{category}', [ShoppingController::class, 'category'])->name('category');

Route::get('products/{goods}/detail', [ShoppingController::class, 'detail'])->name('product.detail');


Route::get('/search', [ShoppingController::class, 'search'])->name('search');


Route::get('/search/brand/{category?}', [ShoppingController::class, 'searchbybrand'])->name('search.brand');


Route::get('/search/price/{category?}', [ShoppingController::class, 'searchbyprice'])->name('search.price');



Route::post('/logincheck', [ShoppingController::class, 'login'])->name('shop.logincheck');

Route::post('/register', [ShoppingController::class, 'register'])->name('shop.register');

Route::get('/logoutcheck', [ShoppingController::class, 'logout'])->name('shop.logoutcheck');













Route::get('/', [GoodsController::class, 'shop'])->name('shop');
/*
Route::get('/', function () {
    return view('shop.index');
    //return view('welcome');
})->name('shop');
*/
Route::get('/login', function () {
    return view('shop.login');
    //return view('welcome');
})->name('shop.login_form');

Route::post('/login', [MmUserController::class, 'login'])->name('shop.login');

Route::get('/logout', [MmUserController::class, 'logout'])->name('logout');

// list goods
Route::get('/goods', [GoodsController::class, 'index'])->name('goods.index')->middleware(['logged_in']);
// detail goods
Route::get('/goods/detail/{id}', [GoodsController::class, 'detail'])->name('goods.detail');
// goods form
Route::get('/goods/edit/{id?}', [GoodsController::class, 'edit'])->name('goods.edit')->middleware(['logged_in']);
// insert / update goods and redirect to list goods with some message
Route::post('/goods/insert/{id?}', [GoodsController::class, 'insert'])->name('goods.insert')->middleware(['logged_in']);
// delete goods
Route::get('/goods/delete/{id}', [GoodsController::class, 'delete'])->name('goods.delete')->middleware(['logged_in']);

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard.main');
})->name('dashboard')->middleware(['logged_in']);


// list colors
Route::get('/colors', [ColorController::class, 'index'])->name('color.index')->middleware(['logged_in']);
// goods form
Route::get('/colors/edit/{id?}', [ColorController::class, 'edit'])->name('color.edit')->middleware(['logged_in']);
// insert / update colors and redirect to list colors with some message
Route::post('/colors/insert/{id?}', [ColorController::class, 'insert'])->name('color.insert')->middleware(['logged_in']);
// delete colors
Route::get('/colors/delete/{id}', [ColorController::class, 'delete'])->name('color.delete')->middleware(['logged_in']);


// list sizes
Route::get('/sizes', [SizeController::class, 'index'])->name('size.index')->middleware(['logged_in']);
// goods form
Route::get('/sizes/edit/{id?}', [SizeController::class, 'edit'])->name('size.edit')->middleware(['logged_in']);
// insert / update sizes and redirect to list sizes with some message
Route::post('/sizes/insert/{id?}', [SizeController::class, 'insert'])->name('size.insert')->middleware(['logged_in']);
// delete sizes
Route::get('/sizes/delete/{id}', [SizeController::class, 'delete'])->name('size.delete')->middleware(['logged_in']);


// list categories
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index')->middleware(['logged_in']);
// category form
Route::get('/categories/edit/{id?}', [CategoryController::class, 'edit'])->name('category.edit')->middleware(['logged_in']);
// insert / update category and redirect to list categories with some message
Route::post('/categories/insert/{id?}', [CategoryController::class, 'insert'])->name('category.insert')->middleware(['logged_in']);
// delete categpru
Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete')->middleware(['logged_in']);


// list sub_categories
Route::get('/sub_categories', [SubCategoryController::class, 'index'])->name('sub_categories.index')->middleware(['logged_in']);
// sub_categories form
Route::get('/sub_categories/edit/{id?}', [SubCategoryController::class, 'edit'])->name('sub_categories.edit')->middleware(['logged_in']);
// insert / update sub_categories and redirect to list sub_categories with some message
Route::post('/sub_categories/insert/{id?}', [SubCategoryController::class, 'insert'])->name('sub_categories.insert')->middleware(['logged_in']);
// delete sub_categories
Route::get('/sub_categories/delete/{id}', [SubCategoryController::class, 'delete'])->name('sub_categories.delete')->middleware(['logged_in']);

// list mmUsers
Route::get('/mmusers', [MmUserController::class, 'index'])->name('mmuser.index')->middleware(['logged_in']);
// detail mmUsers
Route::get('/mmusers/detail/{id}', [MmUserController::class, 'detail'])->name('mmuser.detail')->middleware(['logged_in']);
// mmUsers form
Route::get('/mmusers/edit/{id?}', [MmUserController::class, 'edit'])->name('mmuser.edit')->middleware(['logged_in']);
// insert / update mmUsers and redirect to list mmUsers with some message
Route::post('/mmusers/insert/{id?}', [MmUserController::class, 'insert'])->name('mmuser.insert')->middleware(['logged_in']);
// delete mmUsers
Route::get('/mmusers/delete/{id}', [MmUserController::class, 'delete'])->name('mmuser.delete')->middleware(['logged_in']);


// list goods_order
Route::get('/goodsorders', [GoodsOrderController::class, 'index'])->name('goods_order.index')->middleware([]);
// detail goodsorders
Route::get('/goodsorders/detail/{id}', [GoodsOrderController::class, 'detail'])->name('goods_order.detail');
// goods goodsorders
Route::get('/goodsorders/edit/{id?}', [GoodsOrderController::class, 'edit'])->name('goods_order.edit')->middleware([]);
// insert / update goodsorders and redirect to list goods with some message
Route::post('/goodsorders/insert/{id?}', [GoodsOrderController::class, 'insert'])->name('goods_order.insert')->middleware([]);
// delete goodsorders
Route::get('/goodsorders/delete/{id}', [GoodsOrderController::class, 'delete'])->name('goods_order.delete')->middleware([]);
