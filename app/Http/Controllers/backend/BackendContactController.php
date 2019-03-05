<?php

namespace App\Http\Controllers\backend;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::find(1);
        $social = json_decode($contact->social);

        return view('default.contact-us.backend.index', compact('contact', 'social'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $valid_data = $request->validate([
            'id'           => 'required',
            'map_location' => 'nullable',
            'social_media' => 'nullable',
            'etc' => 'nullable',

        ]);



        $request->input('facebook')  ? $social['facebook']  = $request->input('facebook') : '';
        $request->input('instagram') ? $social['instagram'] = $request->input('instagram') : '';
        $request->input('twitter')   ? $social['twitter']   = $request->input('twitter') : '';

        if(!isset($social)){
            $social = '';
        }


        Contact::find($valid_data['id'])->update(array_merge($valid_data, array('social' => json_encode($social))));

        flash('Update contacts')->success();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
