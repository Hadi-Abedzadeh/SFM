@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
<div class="container-fluid">


    <div class="infinite-scroll">

        <div class="newsproductarea">
            @foreach($blog_posts as $post)
                <div class="newsproduct">
                    <div class="newsproductthumb">
                        <img src="{{$post->imageUrl}}" draggable="false">
                    </div>
                    <div class="newsproductcontent">
                        <h4>{{$post->title}}</h4>
                        <p>
                            {{ substr(strip_tags($post->body), 0, 100) }}
                            {{ strlen(strip_tags($post->body)) > 100 ? "..." : "" }}
                        </p>
                        <a href="{{ route('frontend.blog.index.slug', ['lang'=>'en','slug' => $post->slug]) }}" class="newsproductmore">VIEW MORE</a>
                    </div>

                </div>

            @endforeach

            {{ $blog_posts->links() }}
        </div>
    </div>
    </div>
@endsection

@section('infiniteScroll')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/js/jquery.jscroll.min.js"></script>

    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<div class="loading">\n' +
                    '<div class="icon"></div><span>SEE MORE ...</span>\n' +
                    '</div>',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>

@endsection


@section('title')
	Blog
@endsection
