@extends(env('THEME_NAME').'.frontend-en.layouts.frontend')
@section('content')
    <div class="container">
        <div class="gallerysliderarea owl-carousel">
            <div class="galleryslider"><img src="/{{env('THEME_NAME')}}/assets-en/images/slider1.jpg"></div>
            <div class="galleryslider"><img src="/{{env('THEME_NAME')}}/assets-en/images/slider2.jpg">
                <h2>Lorem Ipsum is simply dummy</h2></div>
            <div class="galleryslider"><img src="/{{env('THEME_NAME')}}/assets-en/images/slider3.jpg">
                <h2>Lorem Ipsum is simply dummy</h2></div>
        </div>
        <div class="innerarea">
            <div class="category">
                <div class="areaheader">
                    <h2>Categorys</h2>
                </div>
                <div class="categorylist">
                    @foreach($blog_posts as $blog_post)
                        <a href="{{ $blog_post->slug }}">{{ $blog_post->title}}</a>
                    @endforeach
                </div>
            </div>
            <div class="content">
                <div class="areaheader">
                    <h2>News</h2>
                    <div class="sorter">
                        <div class="sorterheader">Newest</div>
                        <span>Newest</span>
                        <span>Oldest</span>
                    </div>
                </div>
                <div class="blogposts">
                    @foreach($news as $report)
                        <div class="blogpost">
                            <div class="blogpostimg">
                                <img src="{{$report->imageUrl}}" draggable="false">
                            </div>
                            <div class="blogpostcontent">
                                <h4>{{ $report->title }}</h4>
                                <p>
                                    {{ substr(strip_tags($report->body), 0, 100) }}
                                    {{ strlen(strip_tags($report->body)) > 50 ? "..." : "" }}
                                </p>
                                <a href="{{ route('frontend.news.index.show', ['slug' => $report->slug ])}}" class="more">See More</a>
                            </div>
                        </div>
                    @endforeach

                </div>

                {{ $news->links() }}
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
    News
@endsection
