<?php

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


//return cookie('referrer', 'ss', 45000);
//if(\Illuminate\Support\Facades\Request::session()->get('lang') == 'en'){
//    app()->setLocale('en');
//}else{
//    app()->setLocale('fa');
//}


app()->setLocale('fa');

require_once(base_path('load_modules.php'));


Route::get('/lang/{lang}', function ($lang) {

    switch ($lang) {
        case 'fa':
            $select_lang = 'fa';
            break;
        case 'en':
            $select_lang = 'en';
            break;
        default :
            $select_lang = 'fa';
    }

    \Illuminate\Support\Facades\Request::session()->put('lang', $select_lang);

    return redirect(route('frontend'));
});

Route::get('/', function () {

    $locale = set_lang();
    $contact = \App\Contact::first();
    $news = \Modules\News\Models\News::whereLang($locale)->orderBy('id', 'DESC')->limit(3)->get();

    if ($locale == 'fa') {
        $products = \Modules\Product\Models\Product::whereLang('fa')->limit(env('PAGINATE_COUNT'))->get();
        return view(env('THEME_NAME') . '.frontend-fa.frontend-index', compact('contact', 'news', 'products'));
    } else {
        return view(env('THEME_NAME') . '.frontend.frontend-index', compact('contact', 'news'));
    }

})->name('frontend');

Route::prefix('backend')->middleware('auth')->group(function () {
    Route::resource('/contact-us', 'backend\BackendContactController');
    // Route::post('/contact-us/update', 'backend\BackendController@contact_update')->name('backend.contact.update');

    // upload ckeditor
    Route::post('/upload-image/{module_name}/{folder_name}', 'backend\BackendController@upload_image')->name('backend.ckeditor.upload_image');

    Route::resource('/about-us', 'backend\AboutController');
    Route::resource('/faq', 'backend\FAQController');

});


Route::get('/backend', 'backend\BackendController@index');
Route::get('/contact-us', 'frontend\FrontendController@show_contact')->name('frontend.contact-us.index');
Route::get('/about-us', 'frontend\FrontendController@about_us')->name('frontend.about.index');
Route::get('/faq', 'frontend\FrontendController@faq');

Route::get('/catalog', function () {

    $locale = set_lang();
    if ($locale == 'fa') {
        return view(env('THEME_NAME') . '.frontend-fa.catalog.index', compact('news'));
    } else {
        return view(env('THEME_NAME') . '.frontend.catalog.index', compact('news'));

    }
})->name('catalog');


Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');
