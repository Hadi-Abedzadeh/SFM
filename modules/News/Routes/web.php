<?php

/*
|--------------------------------------------------------------------------
| Module Web Routes
|--------------------------------------------------------------------------
*/

Route::prefix('backend')->middleware('auth')->group(function () {
    Route::get('/news', 'backend\BackendModuleNewsController@index')->name('backend.news.index');
    Route::get('/news/create', 'backend\BackendModuleNewsController@create')->name('backend.news.create');
    Route::post('/news', 'backend\BackendModuleNewsController@store')->name('backend.news.store');

    Route::get('/news/{news}/change_state', 'backend\BackendModuleNewsController@change_state')->name('backend.news.change_state');

    Route::get('/news/{news}/edit', 'backend\BackendModuleNewsController@edit')->name('backend.news.edit');

    Route::delete('/news/{news}/destroy', 'backend\BackendModuleNewsController@destroy')->name('backend.news.destroy');
    Route::post('/news/{news}/update', 'backend\BackendModuleNewsController@update')->name('backend.news.update');


});

Route::get('/{lang?}/news', 'frontend\FrontendModuleNewsController@index')->name('frontend.news.index');
Route::get('/{lang?}/news/{newsSlug}', 'frontend\FrontendModuleNewsController@show')->name('frontend.news.index.show');
