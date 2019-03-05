<?php

namespace Modules\Blog\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Comment;
use Modules\Blog\Models\Post;

class BackendModuleBlogCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::with('post')->orderBy('id', 'DESC')->get();
        return view('default.blog.backend.comments.index', compact('comments'));
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
        $valid_data = $request->validate([
            'client_name' => 'required',
            'post_id' => 'required|integer',
            'client_email' => 'required',
            'body' => 'required',
        ]);


        Comment::create($valid_data);

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
    public function edit(Comment $comment)
    {
        return view('default.blog.backend.comments.edit', compact('comment'));
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
            'client_name' => 'required',
            'client_email' => 'required',
            'body' => 'required',
        ]);


        Comment::find($id)->update($valid_data);
        return redirect(route('backend.blog.comment.index'));
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


    public function change_state_comment($id)
    {
        $model = Comment::findOrFail($id);
        $model->active = !$model->active;
        $model->save();
        return redirect(route('backend.blog.comment.index'))->with(['message' => 'Toggled']);
    }
}
