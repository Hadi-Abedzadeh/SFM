@extends(env('THEME_NAME').'.layouts.frontend')
@section('content')
<div class="container-fluid">

    <div class="newsproductarea">
        @foreach($news as $report)
            <div class="newsproduct">
                <div class="newsproductthumb"><img src="{{$report->imageUrl}}" draggable="false"></div>
                <div class="newsproductcontent">
                    <h4>{{$report->title}}</h4>
                    <p>
                        {{ substr(strip_tags($report->body), 0, 300) }}
                        {{ strlen(strip_tags($report->body)) > 50 ? "..." : "" }}
                    </p>
                    <a href="{{route('frontend.news.index.show',['slug'=>$report->slug])}}" class="newsproductmore">VIEW MORE</a>
                </div>
            </div>
        @endforeach


    </div>
    </div>
@endsection


@section('title')
    News
@endsection
