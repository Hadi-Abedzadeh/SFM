@extends('default.layouts.frontend')

@section('content')
    <div class="container">
        <h2>Blog</h2>
    @foreach($blog_posts as $post)
            <div class="well ">
                @if(file_exists(($post->imageUrl)))
                    <img src="/{{ $post->imageUrl }}"
                         style="width: 100%; height: 300px; border-radius: 2px">
                @else
                    <img src="/uploads/no-image.png" style="width: 100%; height: 300px; border-radius: 2px">
                @endif
                <br>

                <h2><a href="{{ route('frontend.blog.index') .'/'.$post->slug }}">{{ $post->title }}</a></h2>
                <br>
                {!! str_limit(strip_tags($post->body), 300)  !!}
                {!! (strlen(strip_tags($post->body)) > 300) ? ' ...... ' : '' !!}
                <br>
                <hr>

                    @if(count($post->categories()->get()))
                    <ul>Category:
                        @foreach($post->categories()->pluck('name', 'slug') as $slug => $category)
                            <li>
                                <a href="{{ route('category', ['categorySlug' => $slug]) }}"> {{ $category }} </a>
                            </li>
                        @endforeach
                    </ul>
                        @else
                        {{ "Has no category" }}
                    @endif
                <hr>
            </div>
        @endforeach
    </div>
    {{ $blog_posts->links() }}

@endsection
