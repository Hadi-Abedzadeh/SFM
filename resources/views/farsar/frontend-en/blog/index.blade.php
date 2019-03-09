@extends(env('THEME_NAME').'.frontend-en.layouts.frontend')
@section('content')
    <div class="container">

        <div class="innerarea">
            <div class="category">
                <div class="areaheader">
                    <h2>Categories</h2>
                </div>
                <div class="categorylist">
                    @foreach($categories as $category)
                        <a href="{{ route('category', ['slug'=> $category->slug ])}}">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="content">
                <div class="areaheader">
                    <h2>Blog</h2>
                    <div class="sorter">
                        <div class="sorterheader">Newest</div>
                        <span>Newest</span>
                        <span>Oldest</span>
                    </div>
                </div>
                <div class="blogposts">
                    @foreach($blog_posts as $post)
                        <div class="blogpost">
                            <div class="blogpostimg">
                                <img src="{{$post->imageUrl}}" draggable="false">
                            </div>
                            <div class="blogpostcontent">
                                <h4>{{ $post->title }}</h4>
                                <p>
                                    {{ substr(strip_tags($post->body), 0, 100) }}
                                    {{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}
                                </p>
                                <a href="{{ route('frontend.blog.index.slug', ['slug' => $post->slug ])}}" class="more">See More</a>
                            </div>
                        </div>
                    @endforeach

                </div>

                {{ $blog_posts->links() }}
                {{--<div class="pagination">--}}
                    {{--<a href="#">Back</a>--}}
                    {{--<a href="#">1</a>--}}
                    {{--<a href="#" class="active">2</a>--}}
                    {{--<a href="#">3</a>--}}
                    {{--<a href="#">Next</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection


@section('title')
    Blog
@endsection
