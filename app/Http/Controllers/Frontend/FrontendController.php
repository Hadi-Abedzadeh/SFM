<?php

namespace App\Http\Controllers\frontend;

use App\About;
use App\Contact;
use App\Http\Controllers\Controller;
use Modules\Faq\Models\Faq;

class FrontendController extends Controller
{
    public function show_contact()
    {
		$locale = set_lang();
		
		if($locale == 'fa'){
			$contact = Contact::find(2);
					
			return view(env('THEME_NAME') . '.frontend-fa.contact.index', compact('contact'));
		}else{		
			$contact = Contact::find(1);
			return view(env('THEME_NAME') . '.frontend.contact.index', compact('contact'));
		
		
		}
    }

    public function about_us()
    {
        $locale = set_lang();

        if ($locale == 'en') {
            $about = About::find(1);
            return view(env('THEME_NAME') . '.frontend.about.index', compact('about'));
        } else {
            $about = About::find(2);
            return view(env('THEME_NAME') . '.frontend-fa.about.index', compact('about'));

        }

    }


    public function faq()
    {
        $locale = set_lang();

        if ($locale == 'en') {
            $faq = Faq::whereLang('en')->get();
            return view(env('THEME_NAME') . '.frontend.faq.index', compact('faq'));
        }else{
            $faq = Faq::whereLang('fa')->get();
            return view(env('THEME_NAME') . '.frontend-fa.faq.index', compact('faq'));

        }


    }
}
