<?php

namespace Modules\Blog\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Blog\Http\Controllers;
use Modules\Blog\Models\Blog;
use Modules\Blog\Models\Category;
use Modules\Blog\Models\Post;

class FrontendModuleBlogController extends Controller
{
    public function index()
    {
        $locale = set_lang();
        $blog_posts = Post::whereActive(1)->whereLang($locale)->orderBy('id', 'DESC')->paginate(env('PAGINATE_COUNT'));

        if($locale == 'en'){
            return view(env('THEME_NAME') . '.frontend.blog.index', compact('blog_posts'));
        }else{
            return view(env('THEME_NAME') . '.frontend-fa.blog.index', compact('blog_posts'));
        }
    }


    public function show($post)
    {
        if (isset($post->categories[0]->pivot)) {
        $category = $post->categories;
            $category_id = $category[0]->pivot->category_id;
            $category_id = DB::table('category_post')->whereCategory_id($category_id)->get();
            foreach ($category_id as $c) {
                $similar[] = Post::whereId($c->post_id)->limit(7)->get();
            }
        }

        return view(env('THEME_NAME') . '.frontend.blog.show', compact('post', 'similar'));
    }

    public function category($category)
    {

        $blog_posts = $category->posts()->paginate(env(env('PAGINATE_COUNT')));

        return view('default.blog.frontend.index', compact('blog_posts'));

//        foreach ($category as $v)
//        {
//            $blog_posts[] = $v->posts()->get();
//        }
//            return view('default.blog.frontend.category', compact('blog_posts'));

    }

}
