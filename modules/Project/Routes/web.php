<?php

/*
|--------------------------------------------------------------------------
| Module Web Routes
|--------------------------------------------------------------------------
*/

Route::prefix('backend')->middleware('auth')->group(function () {
    Route::get('/projects', 'backend\BackendModuleProjectController@index')->name('backend.project.index');
    Route::get('/projects/create', 'backend\BackendModuleProjectController@create')->name('backend.project.create');
    Route::post('/projects/store', 'backend\BackendModuleProjectController@store')->name('backend.project.store');
});

Route::get('/projects', 'frontend\FrontendModuleProjectController@index')->name('frontend.project.index');
Route::get('/project/{slug}', 'frontend\FrontendModuleProjectController@show')->name('frontend.project.show');
