@extends(env('THEME_NAME').'.layouts.frontend')
@section('content')
<div class="container-fluid">
    <div class="infinite-scroll">

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
                    <a href="{{route('frontend.news.index.show',['lang' => 'en', 'slug'=>$report->slug])}}" class="newsproductmore">VIEW MORE</a>
                </div>
            </div>
        @endforeach
    </div>
        {{ $news->links() }}
    </div>
    </div>
@endsection


@section('infiniteScroll')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/js/jquery.jscroll.min.js"></script>

    <script type="text/javascript">
        //$('ul.pagination').hide();
		function neueFade() {
		jQuery('.jscroll-added').delay(1000).animate({
		 opacity: 1
		}, 1000);
		};
        $(function () {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<div class="loading"><div class="icon"></div><span>SEE MORE ...</span></div>',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function () {
                    //$('ul.pagination').remove();
					neueFade();
                }
            });
        });
    </script>
@endsection

@section('title', 'News')
