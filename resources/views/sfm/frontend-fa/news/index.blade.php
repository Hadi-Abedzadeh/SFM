@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')
    <main id="blog-page">
        <div class="container">

            <section class="news-section">
                <div class="title">
                    <h2><span>اخبار</span> ما</h2>
                    <span>آخرین اخبار درباره شرکت</span>
                </div>
                <div class="infinite-scroll">

                <div class="content row">
                    @foreach($news as $report)
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-24">
                            <div class="news-item">
                                <div class="img-news"><img src="{{$report->imageUrl}}" alt="" title=""></div>
                                <div class="content-news">
                                    <h3>{{$report->title}}</h3>
                                    <p>
                                        {{ substr(strip_tags($report->body), 0, 100) }}
                                        {{ strlen(strip_tags($report->body)) > 100 ? "..." : "" }}
                                    </p>
                                    <a href="{{ route('frontend.news.index.show', ['lang' => 'fa', 'slug' => $report->slug]) }}">اطــــــــلاعــات
                                        بــیـشــــتر</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                    {{ $news->links() }}
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


@section('title', 'اخبار')
