<?php

namespace Modules\Blog\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Modules\Blog\Models\Category;
use Modules\Blog\Models\Post;
use Modules\Blog\Models\Tag;
use Modules\Product\Models\Product_list;

class TagController extends Controller
{
    public function index()
    {
        return Tag::all();
    }

    public function show($tag)
    {
        $locale = set_lang();

        $blog_posts = $tag->posts()->orderBy('id', sorting())->paginate(env('PAGINATE_COUNT'));

        $product_list = Product_list::whereLang($locale)->orderBy('id', 'DESC')->limit(8)->get();
        $categories = Category::orderBy('name', 'DESC')->get();

        if ($locale == 'fa') {
            return view(env('THEME_NAME') . '.frontend.blog.index', compact('blog_posts', 'product_list'));
        } else {
            return view(env('THEME_NAME') . '.frontend-en.blog.index', compact('blog_posts', 'product_list', 'categories'));
        }
    }
}
