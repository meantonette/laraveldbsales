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

Route::resource('customer','CustomerController');
Route::get('/', [ItemController::class, 'index']);
Route::get('/index', [ItemController::class, 'index']);
// Route::resource('product','productController');

Route::get('/signup', [
    'uses' => 'userController@getSignup',
    'as' => 'user.signup'
]);

Route::post('/signup', [
    'uses' => 'userController@postSignup',
    'as' => 'user.signup'
]);

Route::get('profile', [
    'uses' => 'userController@getProfile',
    'as' => 'user.profile',
]);

// Route::get('/index', [
//     'uses' => 'ProductController@getIndex',
//           'as' => 'product.index'
//   ]);

Route::get('logout', [
    'uses' => 'userController@getLogout',
    'as' => 'user.logout',
]);

Route::post('/signin', [
    'uses' => 'userController@postSignin',
    'as' => 'user.signin',
]);

Route::get('/signin', [
    'uses' => 'userController@getSignin',
    'as' => 'user.signin',
   ]);

   Route::get('shopping-cart', [
    'uses' => 'App\Http\Controllers\ItemController@getCart',
    'as' => 'item.shoppingCart'
    ]);

     Route::get('shopping-cart', [
    'uses' => 'App\Http\Controllers\ItemController@getCart',
    'as' => 'item.shoppingCart'
    ]);

    Route::get('checkout',[
        'uses' => 'App\Http\Controllers\ItemController@postCheckout',
        'as' => 'checkout',
        'middleware' =>'auth'
    ]);

Route::get('remove/{id}',[
    'uses'=>'App\Http\Controllers\ItemController@getRemoveItem',
    'as' => 'item.remove'
]);

Route::get('add-to-cart/{id}',[
    'uses' => 'ItemController@getAddToCart',
    'as' => 'item.addToCart'
]);

Route::get('reduce/{id}',[
    'uses' => 'App\Http\Controllers\ItemController@getReduceByOne',
    'as' => 'item.reduceByOne'
]);

Route::get('index', [
    'uses' => 'App\Http\Controllers\ItemController@index',
    'as' => 'item.index',
]);

