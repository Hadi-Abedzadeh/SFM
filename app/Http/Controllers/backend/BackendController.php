<?php

namespace App\Http\Controllers\backend;

use App\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function index()
    {
        return view(env('THEME_NAME').'.backend.backend-index');
    }

    public function contact_index()
    {
        return view('default.contact-us.backend.index');
    }

    public function contact_update(Request $request)
    {
//        $valid_data = $request->validate([
//            'map_location' => 'nullable',
//            'social_media' => 'nullable',
//            'etc' => 'nullable',
//        ]);
//
//        Contact::create($valid_data);
//
//        flash('Update contacts')->success();
//        return redirect()->back();
    }


    public function upload_image($module_name, $folder_name)
    {
        $this->validate(request() , [
            'upload' => 'required|mimes:jpeg,png,bmp',
        ]);

        $imagePath = "/uploads/$module_name/$folder_name/". Carbon::now()->year . '/' . Carbon::now()->month;
        $file = request()->file('upload');
        $filename = $file->getClientOriginalName();
        if(file_exists(public_path($imagePath) . $filename)) {
            $filename = Carbon::now()->timestamp . $filename;
        }
        $file->move(public_path($imagePath) , $filename);
        $url = $imagePath . $filename;
        $response = [
            "uploaded" => 1,
            "filename" => $filename,
            "url" => $url,
            "error" => ''
        ];
        return $response;
    }

    public function about_us()
    {

    }

}
