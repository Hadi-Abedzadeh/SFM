@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')
    <main id="single-page">
        <div class="container">
            <section class="single-section">
                <div class="title">
                    <h2><span>جذب</span> نیرو</h2>
                    <div class="button"><a href="{{ route('frontend.blog.index') }}"><span>بازگشت به صفحه قبل</span></a>
                    </div>
                </div>
                <div class="content">
                    <div class="thumbnail">
                        <img src="{{ $post->imageUrl }}" alt="{{ $post->title }}" title="{{ $post->title }}">
                    </div>
                    <div class="texts">
                        <h3>{{$post->title}}</h3>
                        <p>
                            {{$post->body}}
                        </p>
                    </div>
                    <br><br>
                    <hr>
                    <br><br>
                    <div class="tags">
                        <div class="title">
                            <h4>برچسب ها</h4>
                        </div>
                        <ul>
                            @foreach($post->categories as $category)
                                <li><a href="{{ route('category', ['']) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>

            <section class="top-views">
                <div class="title">
                    <h2><span>مطالب</span> پر بازدید</h2>
                </div>
                <div class="content">
                    <div class="slider owl-carousel owl-carousel-blog owl-theme">

                        <div class="news-item">
                            <div class="img-news"><img
                                    src="/{{env('THEME_NAME_FA')}}/assets/images/sample/test-img-news.png" alt=""
                                    title=""></div>
                            <div class="content-news">
                                <h3>نمایشگاه تهران</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است …</p>
                                <a href="#">اطــــــــلاعــات بــیـشــــتر</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </main>
@endsection



@section('title')
بلاگ
@endsection
