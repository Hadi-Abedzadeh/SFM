<?php

namespace Modules\Blog\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Http\Controllers;
use Modules\Blog\Models\Blog;
use Modules\Blog\Models\Category;
use Modules\Blog\Models\Post;

class BackendModuleBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_posts = Post::orderBy('id', 'DESC')->paginate(5);
        return view('default.blog.backend.posts.index', compact('blog_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('default.blog.backend.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid_data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'imageUrl' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('imageUrl')) {
            $image = $request->file('imageUrl');
            $name = Carbon::now()->timestamp . str_slug($request->title) . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'uploads/blog/post-images';
            $imagePath = $destinationPath . "/" . $name;
            $image->move($destinationPath, $name);
        } else
            $imagePath = '';


        $slug = Post::whereTitle($valid_data['title'])->count();
        $slugPlus = $slug + 1;

        if ($slug == 0)
            $slug = str_slug($valid_data['title']);
        else
            $slug = str_slug($valid_data['title'] . '-' . $slugPlus);

        $array = array_merge($valid_data, ['user_id' => Auth::id(), 'imageUrl' => $imagePath, 'slug' => $slug]);

        $post = auth()
            ->user()
            ->posts()
            ->create(array_merge(request(['title', 'body']), array('slug' => $slug, 'imageUrl' => $imagePath)));

        $post->categories()->attach(request('category'));

        flash('Post Added')->success();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "pshooooooooooppp";

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $blog_post = Post::find($post->id);
        $categories = Category::all();
        return view('default.blog.backend.posts.edit', compact('blog_post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid_data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'imageUrl' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('imageUrl')) {
            $image = $request->file('imageUrl');
            $name = Carbon::now()->timestamp . str_slug($request->title) . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'uploads/blog/post-images';
            $imagePath = $destinationPath . "/" . $name;
            $image->move($destinationPath, $name);
        } else {
            $imagePath = '';
        }

        $slug = Post::whereTitle($valid_data['title'])->count();
        $slugPlus = $slug + 1;

        if ($slug == 0)
            $slug = str_slug($valid_data['title']);
        else
            $slug = str_slug($valid_data['title'] . '-' . $slugPlus);

        $post = auth()->user()->posts()->find($id);

        if ($imagePath) {
            $post->update(array_merge(request(['title', 'body']), array('slug' => $slug, 'imageUrl' => $imagePath)));
        } else {
            $post->update(array_merge(request(['title', 'body']), array('slug' => $slug)));
        }

//        $postf = auth()
//            ->user()
//            ->posts()->find($id);

        $post->categories()->attach(request('category'));


//        if ($request->hasFile('imageUrl'))
//            Post::find($id)->update(array_merge($valid_data, ['imageUrl' => $imagePath]));
//        else
//            Post::find($id)->update($valid_data);
//
        flash('New post added')->success();
        return redirect()->back();
    }

    public function image_upload(Request $request)
    {
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect(route('backend.blog.index'));
    }

    public function change_state(Post $post)
    {
        $model = Post::findOrFail($post->id);
        $model->active = !$model->active;
        $model->save();
        return redirect(route('backend.blog.index'))->with(['message' => 'Toggled']);
    }


}
