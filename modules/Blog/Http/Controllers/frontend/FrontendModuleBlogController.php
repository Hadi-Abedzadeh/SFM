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
    public function index($lang = null)
    {
        $locale = set_lang($lang);
        $blog_posts = Post::whereActive(1)->whereLang($locale)->orderBy('id', 'DESC')->paginate(env('PAGINATE_COUNT'));

        $most_views = Post::whereLang($locale)->orderBy('viewCount', sorting())->limit(6)->get();

        if($locale == 'en'){
            return view(env('THEME_NAME') . '.frontend.blog.index', compact('blog_posts'));
        }else{
            return view(env('THEME_NAME') . '.frontend-fa.blog.index', compact('blog_posts', 'most_views'));
        }
    }


    public function show($lang = null, $post)
    {
        $locale = set_lang($lang);

        $array = array();
        if (isset($post->categories[0]->pivot)) {
            $category = $post->categories;
            $category_id = $category[0]->pivot->category_id;
            $category_id = DB::table('category_post')->whereCategory_id($category_id)->get();
            foreach ($category_id as $c) {
                $similar[] = Post::whereId($c->post_id)->limit(6)->get();
            }
            foreach($similar as $s){
                array_push($array, $s[0]);
            }
        } else {
           $array = Post::limit(6)->whereLang($locale)->get();
        }


        Post::whereId($post->id)->increment('viewCount', 1);

        $array = Post::orderBy('ViewCount', sorting())->whereLang($locale)->limit(6)->get();

        $tags = $post->tags()->get();

        if($locale == 'en'){
            return view(env('THEME_NAME') . '.frontend.blog.show', compact('post', 'array', 'tags'));
        }else{
            return view(env('THEME_NAME') . '.frontend-fa.blog.show', compact('post', 'array', 'tags'));
        }

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
