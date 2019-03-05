<?php

namespace App\Http\Controllers\frontend;

use App\About;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Faq\Models\Faq;

class FrontendController extends Controller
{
    public function show_contact()
    {
        $contact = Contact::first();
        return view(env('THEME_NAME').'.frontend-fa.contact.index', compact('contact'));

    }

    public function about_us()
    {
        $locale = set_lang();

        if($locale == 'en'){
            $about = About::find(1);
        }else{
            $about = About::find(2);
        }

        return $about;

        return view(env('THEME_NAME').'.frontend.about.index', compact('about'));
    }


    public function faq()
    {
        $faq = Faq::all();
        return view(env('THEME_NAME').'.frontend.faq.index', compact('faq'));
    }
}
