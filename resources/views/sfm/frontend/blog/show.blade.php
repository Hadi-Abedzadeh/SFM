@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')

    <div class="singleheader">
        <div class="singlecover"><img src="{{ $post->imageUrl }}"></div>
        <a href="{{ route('frontend.blog.index') }}" class="singleback"><span class="icon-back"></span>BACK TO BLOG</a>
    </div>
    <div class="singleheaderclear"></div>
    <div class="container-fluid">
        <div class="singlecontent">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
        </div>

        <div class="swipeslider">
            <h2>SIMILAR <span>POSTS</span></h2>
            <div class="owl-carousel">

                @foreach($array as $arra)
                    <div class="newsproduct">
                        <div class="newsproductthumb">
                            <img src="{{ $arra->imageUrl }}" draggable="false">
                        </div>
                        <div class="newsproductcontent">
                            <h4>{{ $arra->title }}</h4>
                            <p>
                                {{ substr(strip_tags($arra->body), 0, 200) }}
                                {{ strlen(strip_tags($arra->body)) > 50 ? "..." : "" }}
                            </p>
                            <a href="{{ route('frontend.blog.index.slug', ['lang'=>'en','slug' => $arra->slug]) }}" class="newsproductmore">VIEW MORE</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection

@section('title', 'Blog' .$post->title)

