<?php

namespace Modules\News\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\News\Models\News;


class BackendModuleNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(env('PAGINATE_COUNT_ADMIN'));
        return view('default.news.backend.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('default.news.backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid_data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'imageUrl' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('imageUrl')) {
            $image = $request->file('imageUrl');
            $name = str_slug($request->title) . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'uploads/news/post-images';
            $imagePath = $destinationPath . "/" . $name;
            $image->move($destinationPath, $name);
        } else
            $imagePath = '';

        $slug = News::whereTitle($valid_data['title'])->count();
        $slugPlus = $slug +1 ;

        if ($slug == 0)
            $slug = str_slug($valid_data['title']);
        else
            $slug = str_slug($valid_data['title'] . '-' . $slugPlus);

        $array = array_merge($valid_data, ['imageUrl' => $imagePath, 'slug' => $slug]);

        News::create($array);

        flash('News Added')->success();
        return redirect()->back();

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
    public function edit(News $news)
    {
        return view('default.news.backend.edit', compact('news'));

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
            'title' => 'required',
            'body' => 'required',
        ]);



        if ($request->hasFile('imageUrl')) {
            $image = $request->file('imageUrl');
            $name = str_slug($request->title) . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'uploads/news/post-images';
            $imagePath = $destinationPath . "/" . $name;
            $image->move($destinationPath, $name);
        } else
            $imagePath = '';

        $slug = News::whereTitle($valid_data['title'])->count();
        $slugPlus = $slug +1 ;

        if ($slug == 0)
            $slug = str_slug($valid_data['title']);
        else
            $slug = str_slug($valid_data['title'] . '-' . $slugPlus);

        $array = array_merge($valid_data, ['imageUrl' => $imagePath, 'slug' => $slug]);

        News::find($id)->update($array);

        flash('News Added')->success();
        return redirect()->back();

        return $request->all();

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


    public function change_state(News $news)
    {
        $model = News::findOrFail($news->id);
        $model->active = !$model->active;
        $model->save();
        return redirect()->back()->with(['message' => 'Toggled']);
    }

}

