@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')
    <main id="single-page">
        <div class="container">
            <section class="single-section">
                <div class="title">
                    <h2><span>اخبار</span></h2>
                    <div class="button">
                        <a href="{{ route('frontend.news.index', ['lang'=>'fa']) }}">
                            <span>بازگشت به صفحه قبل</span>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="thumbnail">
                        <img src="{{ $news->imageUrl }}" alt="" title="">
                    </div>
                    <div class="texts">
                        <h3>{{ $news->title }}</h3>
                        <p>{{ $news->body }}</p>
                    </div>
                    <br><br>
                    <hr>

                </div>
            </section>

            <section class="top-views">
                <div class="title">
                    <h2><span>اخبار</span> پر بازدید</h2>
                </div>
                <div class="content">
                    <div class="slider owl-carousel owl-carousel-blog owl-theme">

                        @foreach($most_views as $most_view)
                            <div class="news-item">
                                <div class="img-news">
                                    <img src="{{ $most_view->imageUrl }}" alt="" title="">
                                </div>
                                <div class="content-news">
                                    <h3>{{ $most_view->title }}</h3>
                                    <p>
                                        {{ substr(strip_tags($most_view->body), 0, 200) }}
                                        {{ strlen(strip_tags($most_view->body)) > 50 ? "..." : "" }}
                                    </p>
                                    <a href="{{ route('frontend.news.index.show', ['lang' => 'fa', 'slug' => $most_view->slug]) }}">اطــــــــلاعــات بــیـشــــتر</a>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </section>

        </div>
    </main>
@endsection


@section('title', $news->title)
