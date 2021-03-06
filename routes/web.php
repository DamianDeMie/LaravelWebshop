<?php

use Illuminate\Support\Facades\Route;

use App\Categories;

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
    $categories = Categories::all();
    return view('welcome')->with([
        'categories' => $categories,
    ]);
});

Route::get('/category/{id}', 'CategoriesController@GetProducts');
Route::get('/product/{id}', 'ProductsController@showProduct');

Auth::routes();

Route::get('/home', 'OrdersController@showOrders')->name('home');

Auth::routes();

Route::get('/home', 'OrdersController@showOrders')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/add-to-cart/{id}', 'ProductsController@AddProductToCart');
    Route::post('/changeItemAmount/{id}', 'ProductsController@changeItemAmount');
    Route::get('/cart', 'ProductsController@getShoppingCart');
    Route::get('/deleteItem/{id}', 'ProductsController@deleteItem');
    Route::post('/processOrder', 'OrdersController@processOrder');
    Route::get('/destroyCart', 'CartController@destroyCart');
});
