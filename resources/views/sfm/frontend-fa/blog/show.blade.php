@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')
    <main id="single-page">
        <div class="container">
            <section class="single-section">
                <div class="title">
                    <h2><span>بلاگ</span></h2>
                    <div class="button"><a href="{{ route('frontend.blog.index',['lang'=>'fa']) }}"><span>بازگشت به صفحه قبل</span></a>
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
                    {{--<div class="tags">--}}
                    {{--<div class="title">--}}
                    {{--<h4>دسته بندی</h4>--}}
                    {{--</div>--}}
                    {{--<ul>--}}
                    {{--@foreach($post->categories as $category)--}}
                    {{--<li><a href="{{ route('category', ['']) }}">{{ $category->name }}</a></li>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</div>--}}

                    @if($tags->count() > 0)
                        <div class="tags">
                            <div class="title">
                                <h4>برچسب ها</h4>
                            </div>
                            <ul>
                                @foreach($tags as $tag)
                                    <a href="{{ route('tag.show', ['lang'=>'fa', 'slug' => $tag->slug]) }}">{{$tag->name}}</a>
                                    @if(!$loop->last) ,@endif
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            </section>

            <section class="top-views">
                <div class="title">
                    <h2><span>مطالب</span> پر بازدید</h2>
                </div>
                <div class="content">
                    <div class="slider owl-carousel owl-carousel-blog owl-theme">

                        @foreach($array as $p)
                            <div class="news-item">
                                <div class="img-news">
                                    <img src="{{ $p->imageUrl }}" alt="" title=""></div>
                                <div class="content-news">
                                    <h3>{{ $p->title }}</h3>
                                    <p>
                                        {{ substr(strip_tags($p->body), 0, 200) }}
                                        {{ strlen(strip_tags($p->body)) > 50 ? "..." : "" }}
                                    </p>
                                    <a href="{{ route('frontend.blog.index.slug', ['lang'=>'fa', 'slug' => $p->slug]) }}">اطــــــــلاعــات بــیـشــــتر</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

        </div>
    </main>
@endsection



@section('title')
    بلاگ
@endsection
