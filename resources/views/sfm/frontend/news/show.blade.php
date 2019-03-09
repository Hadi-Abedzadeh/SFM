@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="singleheader">
    <div class="singlecover"><img src="/{{env('THEME_NAME')}}/assets/images/background.jpg"></div>
    <a href="{{ route('frontend.news.index') }}" class="singleback">BACK TO NEWS</a>
</div>
<div class="singleheaderclear"></div>
<div class="container-fluid">
    <div class="singlecontent">
        <h1>{{$news->title}}</h1>
        <p>{{$news->body}}</p>
    </div>

    <div class="swipeslider">
        <h2>SIMILAR <span>NEWS</span></h2>
        <div class="owl-carousel">
            <div class="newsproduct">
                <div class="newsproductthumb"><img src="/{{env('THEME_NAME')}}/assets/images/newsthumb.jpg" draggable="false"></div>
                <div class="newsproductcontent">
                    <h4>NEW PRODUCTS</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua …</p>
                    <a href="#" class="newsproductmore">VIEW MORE</a>
                </div>
            </div>
            <div class="newsproduct">
                <div class="newsproductthumb"><img src="/{{env('THEME_NAME')}}/assets/images/newsthumb.jpg" draggable="false"></div>
                <div class="newsproductcontent">
                    <h4>NEW PRODUCTS</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua …</p>
                    <a href="#" class="newsproductmore">VIEW MORE</a>
                </div>
            </div>
            <div class="newsproduct">
                <div class="newsproductthumb"><img src="/{{env('THEME_NAME')}}/assets/images/newsthumb.jpg" draggable="false"></div>
                <div class="newsproductcontent">
                    <h4>NEW PRODUCTS</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua …</p>
                    <a href="#" class="newsproductmore">VIEW MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('title')
    {{$news->title}}
@endsection
