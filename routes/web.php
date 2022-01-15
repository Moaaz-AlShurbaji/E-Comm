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

Route::get('/login', function () {
    return view('login');
});
//product controller routes
Route::get('/','ProductController@index');
Route::get('/details/{product_id}','ProductController@details');
Route::get('/search','ProductController@search');
Route::post('/add-to-cart','ProductController@addToCart');
Route::get('/cart-list','ProductController@cartList');
Route::get('/remove-from-cart/{carts_id}','ProductController@removeCart');
Route::get('/ordernow','ProductController@orderNow');
Route::post('/orderplace','ProductController@orderPlace');
Route::get('/myorders','ProductController@orderList');

//user controller routes
Route::post('/login',"UserController@login");
Route::get('/logout',"UserController@logout");
Route::get('/register',"UserController@registerPage");
Route::post('/user-registered',"UserController@registerUser");
