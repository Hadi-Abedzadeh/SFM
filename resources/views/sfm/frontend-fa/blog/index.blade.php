@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')
    <main id="blog-page">
        <div class="container">

            <section class="news-section">
                <div class="title">
                    <h2><span>بلاگ</span> ما</h2>
                    <span>آخرین مطالب بلاگ</span>
                </div>
                <div class="infinite-scroll">

                    <div class="content row">

                        @foreach($blog_posts as $post)
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-24">
                                <div class="news-item">
                                    <div class="img-news"><img src="{{$post->imageUrl}}" alt="" title=""></div>
                                    <div class="content-news">
                                        <h3>{{$post->title}}</h3>
                                        <p>
                                            {{ substr(strip_tags($post->body), 0, 100) }}
                                            {{ strlen(strip_tags($post->body)) > 100 ? "..." : "" }}
                                        </p>
                                        <a href="{{ route('frontend.blog.index.slug', ['lang'=>'fa','slug' => $post->slug]) }}">اطــــــــلاعــات
                                            بــیـشــــتر</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    {{ $blog_posts->links() }}

                </div>

            </section>


        </div>
    </main>


@endsection


@section('infiniteScroll')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/js/jquery.jscroll.min.js"></script>

    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function () {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<div class="loading"><div class="icon"></div><span>SEE MORE ...</span></div>',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function () {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>
@endsection

@section('title')
    بلاگ
@endsection
