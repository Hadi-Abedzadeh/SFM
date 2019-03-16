<?php

/*
|--------------------------------------------------------------------------
| Module Web Routes
|--------------------------------------------------------------------------
*/

Route::prefix('backend')->middleware('auth')->group(function () {
    Route::get('/products', 'backend\BackendModuleProductController@index')->name('backend.product.index');
});

Route::get('/{lang?}/{brand?}/products', 'frontend\FrontendModuleProductController@index')->name('frontend.product.index');
Route::get('/{lang?}/product/catalog/{Slugproduct_list}', 'frontend\FrontendModuleProductController@catalog')->name('frontend.product.catalog');
Route::get('/{lang?}/product/show/{product_list}', 'frontend\FrontendModuleProductController@show')->name('frontend.product.show');
