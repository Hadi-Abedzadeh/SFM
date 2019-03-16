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


use Illuminate\Support\Facades\Auth;

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

    $url = Request::url();
    if($select_lang == 'en')
    $url = str_replace("/lang/$select_lang", '/fa/', $url );
else
    $url = str_replace("/lang/$select_lang", '/en/', $url );


//    return  Request::segment(1);

    \Illuminate\Support\Facades\Request::session()->put('lang', $select_lang);

    return $url;
    return redirect($url);
});

Route::get('/{lang?}/', function ($lang = null) {

    if ($lang == null)
        return redirect('/fa');

    $locale = set_lang($lang);
    if ($locale == 'fa')
        return view(env('THEME_NAME') . '.frontend-fa.intro');
    else
        return view(env('THEME_NAME') . '.frontend.intro');
});

Route::get('/{lang?}/brand/{brand?}', function ($lang = null, $brand = null) {

    if ($brand == null) return redirect($lang.'/brand/luxtai');
    if(\Modules\Product\Models\Product::whereBrand($brand)->count() <= 0) return abort(404);

    $locale = set_lang($lang);

    $contact = \App\Contact::first();
    $news = \Modules\News\Models\News::whereLang($locale)->orderBy('id', 'DESC')->limit(3)->get();

    if ($locale == 'fa') {
        $products = \Modules\Product\Models\Product::whereLang('fa')->whereBrand($brand)->limit(env('PAGINATE_COUNT'))->get();
        return view(env('THEME_NAME') . '.frontend-fa.frontend-index', compact('contact', 'news', 'products', 'brand'));
    } else {
        return view(env('THEME_NAME') . '.frontend.frontend-index', compact('contact', 'news', 'brand'));
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
Route::get('/{lang?}/contact-us', 'frontend\FrontendController@show_contact')->name('frontend.contact-us.index');
Route::get('/{lang?}/about-us/{brand?}', 'frontend\FrontendController@about_us')->name('frontend.about.index');
Route::get('/{lang?}/faq', 'frontend\FrontendController@faq')->name('faq');
Route::get('/{lang?}/support', 'frontend\FrontendController@support')->name('support');
Route::post('/support', 'frontend\FrontendController@support_submit');

Route::get('/{lang?}/catalog', function ($lang = null) {
    $locale = set_lang($lang);
    if ($locale == 'fa') {
        return view(env('THEME_NAME') . '.frontend-fa.catalog.index', compact('news'));
    } else {
        return view(env('THEME_NAME') . '.frontend.catalog.index', compact('news'));

    }
})->name('catalog');


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');
