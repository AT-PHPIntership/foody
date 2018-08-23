<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['as' => 'api.', 'namespace' => 'Api\User'], function () {
    Route::post('register', 'LoginController@register');
<<<<<<< HEAD
    Route::get('categories/show-menu', 'CategoryController@showMenu');
    Route::get('products/show-newest', 'ProductController@newestProductsSlide');
    Route::get('products/show-index-products', 'ProductController@showHomePageProducts');
=======
    Route::post('login', 'LoginController@login');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('logout', 'LoginController@logout');
    });
>>>>>>> a4ddd72509ee301e45059e043f759205d74214ed
}); 
