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
    Route::get('categories/show-menu', 'CategoryController@showMenu');
    Route::get('products/show-newest', 'ProductController@newestProductsSlide');
    Route::get('products/newest-products-{number_products}', 'ProductController@newestProductsSlide')->name('products.newestSlide');
}); 
