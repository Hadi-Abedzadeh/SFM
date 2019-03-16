@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="singleheader">
        <div class="singlecover"><img src="{{ $news->imageUrl }}"></div>
        <a href="{{ route('frontend.news.index', ['lang'=>'en']) }}" class="singleback"><span class="icon-back"></span>BACK
            TO NEWS</a>
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


                @foreach($most_views as $most_view)
                    <div class="newsproduct">
                        <div class="newsproductthumb">
                            <img src="{{ $most_view->imageUrl }}" draggable="false">
                        </div>
                        <div class="newsproductcontent">
                            <h4>{{ $most_view->title }}</h4>
                            <p>
                                {{ substr(strip_tags($most_view->body), 0, 200) }}
                                {{ strlen(strip_tags($most_view->body)) > 50 ? "..." : "" }}
                            </p>
                            <a href="{{ route('frontend.news.index.show', ['lang' => 'en', 'slug' => $most_view->slug]) }}"
                               class="newsproductmore">VIEW MORE</a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection


@section('title')
    {{$news->title}}
@endsection
