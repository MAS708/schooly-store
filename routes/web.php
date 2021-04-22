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

Route::redirect('/', '/index');
Route::get('/index', 'IndexController@index')->name('index');
Route::get('/searcher', 'IndexController@searcher')->name('searcher');
// Route::view('/search', 'search');
Route::view('/search2', 'search2');
Route::view('/detail', 'detail');
Route::view('/product', 'product');
Route::view('/addcart', 'cart.addcart');
Route::view('/addcart2', 'cart.addcart');

// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

Route::resource('orders', 'OrderController')->middleware('auth');

Route::resource('shops','ShopController')->middleware('auth');

// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

Route::group(['prefix' => 'seller'], function () {
    Voyager::routes();

    Route::get('/order/delivered/{suborder}', 'SubOrderController@markDelivered')->name('order.delivered');
    Route::get('/order/canceled/{suborder}', 'SubOrderController@markCanceled')->name('order.canceled');
});
