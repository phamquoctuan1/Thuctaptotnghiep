<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/','HomeController@index')->name('index');
Route::resource('category', 'CategoryController');
Route::resource('product', 'ProductController');

// Administrator
Route::group(['prefix' => 'admin'], function () {
        Route::get('/','AdminController@index')->name('admin.index');
        Route::get('/category','AdminController@getCategory')->name('admin.category');
        Route::get('/category/get-list','AdminController@anyData')->name('category.get-list');
        Route::get('/product','AdminController@getProduct')->name('admin.product');
        Route::get('/product/get-list','AdminController@anyDataProduct')->name('product.get-list');
        Route::get('/product/create','ProductController@createProduct')->name('product.create');
        Route::get('/category/create','CategoryController@create')->name('category.create');
        Route::get('/product/edit/{id}','ProductController@edit');
        Route::post('/product/update','ProductController@update')->name('product.update');
        Route::post('/product/','ProductController@store')->name('product.store');
});

// Ajax
Route::resource('ajaxItems','ItemController');


//Cart Controller
Route::get('add-carts/{id}','CartController@AddCart')->name('addtocart');
Route::get('remove-item-carts/{id}','CartController@RemoveItemCart');
