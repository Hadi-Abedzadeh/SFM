@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')

    <div class="div-list-project">
        <div class="container">
            <section class="sect-slider-content-project sect-slider-content-catalog sect-slider-content-blog">
                <header>
                    <h2 class="c-h2">
                        <em class="f-c-b">اخبار</em>
                    </h2>
                </header>
                <div class="row p20">
                    @foreach($news as $report)
                        <div class="col-md-8">
                            <article class="art-content-blog">
                                <figure>
                                    <img class="img-blog " src="{{$report->imageUrl}}" alt=""
                                         title="">
                                    <img class="img-before " src="/{{env('THEME_NAME')}}/assets/images/sample/blogs.svg" alt="" title="">
                                    <img class="img-before-c " src="/{{env('THEME_NAME')}}/assets/images/sample/blogsc.svg" alt="" title="">
                                </figure>
                                <header>
                                    <h3 class="f-c-b">{{ $report->title }}</h3>
                                </header>
                                <p class="c-p">
                                    {{ substr(strip_tags($report->body), 0, 500) }}
                                    {{ strlen(strip_tags($report->body)) > 50 ? "..." : "" }}
                                </p>
                                <a class="a-btn-bggr a-btn a-btn-blog" href="{{ route('frontend.news.index.show', ['slug' => $report->slug ])}}" title="اطلاعات بیشتر">اطلاعات بیشتر</a>
                            </article>
                        </div>
                    @endforeach
                </div>
            </section>
            {{--<a href="javascript:void(0)" class="a-btn-border-ccc" title="مشاهده مطالب بیشتر ….">--}}
            {{--مشاهده مطالب بیشتر ….--}}
            {{--</a>--}}
        </div>

        <section class="sec-slider-product sec-slider-blog">
            <header>
                <h2 class="c-h2">
                    برخی از <em class="f-c-b">محصولات</em>
                </h2>
            </header>
            <div class="container">
                <div class="swiper-container slider-product">
                    <div class="swiper-wrapper">
                        @foreach($product_list as $same_product)
                            <div class="swiper-slide">
                                <article class="art-content-blog art-content-slider-blog">
                                    <figure>
                                        <img class="img-blog " src="{{ json_decode($same_product->imageUrls)->img1 }}" alt="" title="">
                                        <img class="img-before " src="/{{env('THEME_NAME')}}/assets/images/sample/blogs.svg" alt="" title="">
                                        <img class="img-before-c " src="/{{env('THEME_NAME')}}/assets/images/sample/blogsc.svg" alt="" title="">
                                    </figure>
                                    <header>
                                        <h3 class="f-c-b">{{ $same_product->title }}</h3>
                                    </header>
                                    <p class="c-p">
                                        {{ substr(strip_tags($same_product->body), 0, 200) }}
                                        {{ strlen(strip_tags($same_product->body)) > 200 ? "..." : "" }}
                                    </p>
                                    <a class="a-btn-bggr a-btn a-btn-blog" href="{{ route('frontend.product.show', ['slug' => $same_product->slug]) }}" title="اطلاعات بیشتر">اطلاعات
                                        بیشتر</a>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <i class="icon-next swiper-product swiper-product-next f-c-b"></i>
            <i class="icon-prev swiper-product swiper-product-prev f-c-b"></i>
        </section>
    </div>
@endsection

@section('title')
    اخبار
@endsection
