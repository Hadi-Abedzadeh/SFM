<?php

/*
|--------------------------------------------------------------------------
| Module Web Routes
|--------------------------------------------------------------------------
*/


Route::prefix('backend')->middleware('auth')->group(function () {
    // root blog
    Route::get('/blog', 'backend\BackendModuleBlogController@index')->name('backend.blog.index');

    // main actions
    Route::post('/blog', 'backend\BackendModuleBlogController@store')->name('backend.blog.store');
    Route::get('/blog/create', 'backend\BackendModuleBlogController@create')->name('backend.blog.create');
    Route::get('/blog/{post}/edit', 'backend\BackendModuleBlogController@edit')->name('backend.blog.edit');
    Route::post('/blog/{post}/update', 'backend\BackendModuleBlogController@update')->name('backend.blog.update');
    Route::get('/blog/{post}/change_state', 'backend\BackendModuleBlogController@change_state')->name('backend.blog.change_state');
    Route::delete('/blog/{post}/destroy', 'backend\BackendModuleBlogController@destroy')->name('backend.blog.destroy');

    // comments section
    Route::get('/blog/comments', 'backend\BackendModuleBlogCommentController@index')->name('backend.blog.comment.index');
    Route::get('/blog/comments/{post}/change_state_comment', 'backend\BackendModuleBlogCommentController@change_state_comment')->name('backend.blog.change_state_comment');
    Route::post('/blog/comments', 'backend\BackendModuleBlogCommentController@store')->name('backend.blog.comments.store');
    Route::get('/blog/comments/{comment}/edit', 'backend\BackendModuleBlogCommentController@edit')->name('backend.blog.comments.edit');
    Route::post('/blog/comments/{comment}/update', 'backend\BackendModuleBlogCommentController@update')->name('backend.blog.comment.update');


    // upload post image
    Route::any('/image-upload', 'backend\BackendModuleBlogController@image_upload')->name('backend.blog.img_upload');

    // categories
    Route::get('/blog/category/', 'backend\BackendModuleBlogCategoryController@index')->name('backend.blog.category.index');
    Route::get('/blog/category/create', 'backend\BackendModuleBlogCategoryController@create')->name('backend.blog.category.create');
    Route::post('/blog/category', 'backend\BackendModuleBlogCategoryController@store')->name('backend.blog.category.store');




});

Route::get('/blog', 'frontend\FrontendModuleBlogController@index')->name('frontend.blog.index');
Route::get('/blog/{postSlug}', 'frontend\FrontendModuleBlogController@show')->name('frontend.blog.index.slug');
Route::get('/blog/category/{categorySlug}', 'frontend\FrontendModuleBlogController@category')->name('category');

//Route::namespace('frontend')->prefix('blog')->group(function () {
//    Route::resource('/', 'BlogController');
//});
