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
Route::get('/test','TestController@index');

Route::get('/','PagesController@index')->name('index.pages');
//Route::get('/','AdminController@loginAdmin')->name('login');
//Route::post('/','AdminController@postLoginAdmin')->name('post.login');
Route::prefix('admin')->group(function () {
    Route::get('/','AdminController@index')->name('index.admin');
    Route::prefix('categories')->group(function () {
        Route::get('/', 'CategoryController@index')->name('list.category');
        Route::get('/create', 'CategoryController@create')->name('create.category');
        Route::post('/store', 'CategoryController@store')->name('store.category');
        Route::get('/edit/{id}','CategoryController@edit')->name('edit.category');
        Route::post('/update/{id}','CategoryController@update')->name('update.category');
        Route::get('delete/{id}','CategoryController@destroy')->name('delete.category');
    });
    Route::prefix('menus')->group(function(){
        Route::get('/','MenuController@index')->name('list.menus');
        Route::get('/create','MenuController@create')->name('create.menu');
        Route::post('/store','MenuController@store')->name('store.menu');
        Route::get('/edit/{id}','MenuController@edit')->name('edit.menu');
        Route::post('/update/{id}','MenuController@update')->name('update.menu');
        Route::get('/delete/{id}','MenuController@destroy')->name('delete.menu');
    });
    Route::prefix('products')->group(function(){
        Route::get('/','ProductController@index')->name('list.products');
        Route::get('/create','ProductController@create')->name('create.product');
        Route::post('/store','ProductController@store')->name('store.product');
        Route::get('/edit/{id}','ProductController@edit')->name('edit.product');
        Route::post('/update/{id}','ProductController@update')->name('update.product');
        Route::get('/delete/{id}','ProductController@destroy')->name('delete.product');
    });
    Route::prefix('slider')->group(function(){
        Route::get('/','SliderController@index')->name('index.slider');
        Route::get('/create','SliderController@create')->name('create.slider');
        Route::post('/store','SliderController@store')->name('store.slider');    
    });
});

//
//Route::get('/cart',function(){
//   return view('cart.cart');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
