@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="div-list-project">
<div class="container">
    <section class="sect-slider-content-project sect-slider-content-catalog">
        <div class="row p30">
            <div class="col-md-11">

                <article class="art-fig-any-products">
                    <figure class="fig-content-any-products">
                        <img src="{{ json_decode($product_list->imageUrls)->img1 }}" alt="" title="">
                    </figure>
                    <ul class="ul-lists-fig-any-products">
                        <li>
                            <figure>
                                <img src="{{ json_decode($product_list->imageUrls)->img2 }}" alt="" title="">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ json_decode($product_list->imageUrls)->img3 }}" alt="" title="">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="{{ json_decode($product_list->imageUrls)->img4 }}" alt="" title="">
                            </figure>
                        </li>
                    </ul>
                </article>
            </div>
            <div class="col-md-13">
                <article class="art-content-any-products">
                    <header>
                        <h1 class="f-c-b">
                            {{ $product_list->title }}
                        </h1>
                        <strong class="bg-fa">
                                            <span class="c-h2">
                                                CODE
                                                <em class="f-c-b">{{ $product_list->code }}</em>
                                            </span>
                        </strong>
                    </header>
                    <p class="c-p">
                        {!! $product_list->body !!}

                    </p>
                    <a class="a-btn-bggr a-btn a-btn-bigger" href="javascript:void(0)" title="دانلود کاتالوگ محصول">دانلود
                        کاتالوگ محصول</a>
                </article>
            </div>
        </div>
    </section>

</div>
<section class="sec-slider-product sec-slider-product-any">
    <header>
        <h2 class="c-h2">
            محصولات <em class="f-c-b">مشابه</em>
        </h2>
    </header>
    <div class="container">
        <div class="swiper-container slider-product">
            <div class="swiper-wrapper">

                @foreach($same_products as $same_product)

                <div class="swiper-slide">
                    <article class="art-content-sider art-content-sider-any">
                        <div>
                            <figure>
                                <img src="{{ json_decode($same_product->imageUrls)->img1 }}" alt="{{ $same_product->title }}" title="{{ $same_product->title }}">
                            </figure>
                        </div>
                        <header>
                            <h3 class="c-h2">{{ $same_product->title }}</h3>
                        </header>
                        <a class="a-btn-bggr a-btn" href="{{ route('frontend.product.show', ['slug' => $same_product->slug]) }}" title="مشاهده محصول">مشاهده
                            محصول</a>
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
    محصولات
@endsection

