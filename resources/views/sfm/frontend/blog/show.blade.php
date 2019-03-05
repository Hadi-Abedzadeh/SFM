@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')

    <div class="singleheader">
        <div class="singlecover"><img src="/{{env('THEME_NAME')}}/assets/images/background.jpg"></div>
        <a href="{{ route('frontend.blog.index') }}" class="singleback">BACK TO BLOG</a>
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
                @for($i =0; $i <=2;$i++)
                    <div class="newsproduct">
                        <div class="newsproductthumb">
                            <img src="/{{env('THEME_NAME')}}/assets/images/newsthumb.jpg" draggable="false">
                        </div>
                        <div class="newsproductcontent">
                            <h4>NEW POST</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua …</p>
                            <a href="#" class="newsproductmore">VIEW MORE</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

    </div>
@endsection
