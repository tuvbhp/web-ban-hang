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
// Route::get('/', 'TestController@index');

//Route::get('/','AdminController@loginAdmin')->name('login');
//Route::post('/','AdminController@postLoginAdmin')->name('post.login');
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('index.admin');
    Route::prefix('categories')->group(function () {
        Route::get('/', 'CategoryController@index')->name('list.category');
        Route::get('/create', 'CategoryController@create')->name('create.category');
        Route::post('/store', 'CategoryController@store')->name('store.category');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('edit.category');
        Route::post('/update/{id}', 'CategoryController@update')->name('update.category');
        Route::get('delete/{id}', 'CategoryController@destroy')->name('delete.category');
    });
    Route::prefix('menus')->group(function () {
        Route::get('/', 'MenuController@index')->name('list.menus');
        Route::get('/create', 'MenuController@create')->name('create.menu');
        Route::post('/store', 'MenuController@store')->name('store.menu');
        Route::get('/edit/{id}', 'MenuController@edit')->name('edit.menu');
        Route::post('/update/{id}', 'MenuController@update')->name('update.menu');
        Route::get('/delete/{id}', 'MenuController@destroy')->name('delete.menu');
    });
    Route::prefix('products')->group(function () {
        Route::get('/', 'ProductController@index')->name('list.products');
        Route::get('/create', 'ProductController@create')->name('create.product');
        Route::post('/store', 'ProductController@store')->name('store.product');
        Route::get('/edit/{id}', 'ProductController@edit')->name('edit.product');
        Route::post('/update/{id}', 'ProductController@update')->name('update.product');
        Route::get('/delete/{id}', 'ProductController@destroy')->name('delete.product');
    });
    Route::prefix('slider')->group(function () {
        Route::get('/', 'SliderController@index')->name('index.slider');
        Route::get('/create', 'SliderController@create')->name('create.slider');
        Route::post('/store', 'SliderController@store')->name('store.slider');
        Route::get('/edit/{id}', 'SliderController@edit')->name('edit.slider');
        Route::post('update/{id}', 'SliderController@update')->name('update.slider');
        Route::get('destroy/{id}', 'SliderController@destroy')->name('delete.slider');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Trang chu
Route::get('/', 'PagesController@index')->name('index.pages');
// Add to carts
Route::prefix('product')->group(function () {
    Route::get('/add-to-cart/{id}', 'CartController@addToCart')->name('addToCart');
// Show Cart
    Route::get('/show-cart', 'CartController@showCart')->name('showCart');
// Update Cart
    Route::get('/update-cart', 'CartController@updateCart')->name('updateCart');
// Delete
    Route::get('/delete-cart', 'CartController@destroyCart')->name('deleteCart');
// trang san pham chi tiet
    Route::get('/show/{id}', 'PagesController@show')->name('showProduct');
//add to carts trong san pham chi tiet
    Route::get('/add-cart/{id}', 'PagesController@addToCart')->name('addCart');
});
// checkout cart
Route::prefix('bill')->group(function () {
    Route::get('/checkoutcart', 'BillDetailController@index')->name('checkoutCart');
    Route::post('/store', 'BillDetailController@store')->name('store.bill');
    Route::get('/payment', 'BillDetailController@payment')->name('paymentCart');
});