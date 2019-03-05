<?php

/*
|--------------------------------------------------------------------------
| Module Web Routes
|--------------------------------------------------------------------------
*/

Route::prefix('backend')->middleware('auth')->group(function () {
    Route::get('/card', 'backend\BackendModuleCardController@index')->name('backend.card.index');
    Route::get('/card/create', 'backend\BackendModuleCardController@create')->name('backend.card.create');
    Route::post('/card', 'backend\BackendModuleCardController@store')->name('backend.card.store');
    Route::get('/card/{card}/change_state', 'backend\BackendModuleCardController@change_state')->name('backend.card.change_state');
    Route::get('/card/{card}/edit', 'backend\BackendModuleCardController@edit')->name('backend.card.edit');
    Route::delete('/card/{card}/destroy', 'backend\BackendModuleCardController@destroy')->name('backend.card.destroy');

    Route::get('/pages/create', 'backend\BackendModulePageController@create')->name('backend.page.create');
    Route::post('/pages/store', 'backend\BackendModulePageController@store')->name('backend.page.store');
    Route::get('/pages', 'backend\BackendModulePageController@index')->name('backend.page.index');

});
