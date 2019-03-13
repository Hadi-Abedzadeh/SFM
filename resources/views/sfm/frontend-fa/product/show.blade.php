@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')

    <main id="single-product-page">
        <div class="container">
            <section class="single-product-section row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-24">
                    <div class="thumbnail">
                        <div class="image">
                            <img src="{{ json_decode($product_list->imageUrls)->img1 }}" alt="" title="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-24">
                    <div class="info">
                        <div class="title">
                            <h3><span>محصول</span> {{ $product_list->title }}</h3>
                        </div>
                        <div class="color">
                            <span>رنگ :</span>
                            <ul class="name-color">
                                <li><span>سفید</span></li>
                                <li><span>مشکی</span></li>
                                <li><span>نقره ای</span></li>
                                <li><span>استیل</span></li>
                            </ul>
                            <ul class="show-color">
                                <li><span style="background-color: #ffffff;"></span></li>
                                <li><span style="background-color: #1c1c1c;"></span></li>
                                <li><span style="background-color: #e5e5e5;"></span></li>
                                <li><span
                                        style="background-image: linear-gradient(225deg, #f1f1f1, #f7f7f7 50%, #e5e5e5);"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="params-more">
                            <span>تجهیزان جانبی :</span>
                            <ul>
                                <li><span>جوجه گردان</span></li>
                                <li><span>دستگیره جوجه گردان</span></li>
                                <li><span>سینی نان خرد و روغن گیر</span></li>
                                <li><span>کنوکشن</span></li>
                                <li><span>جوجه گردان</span></li>
                                <li><span>دستگیره جوجه گردان</span></li>
                                <li><span>سینی نان خرد و روغن گیر</span></li>
                                <li><span>کنوکشن</span></li>
                            </ul>
                        </div>
                        <div class="downlaod-button"><a href="{{ $product_list->file_url }}">دانلود کاتالوگ محصول</a></div>
                    </div>
                </div>
            </section>
            <section id="products-slider">
                <div class="container">
                    <div class="row">
                        <div class="title">
                            <h2><span>محصولات</span> مرتبط</h2>
                            <span>دیگر محصولات ما</span>
                        </div>
                        <div class="content products">
                            <div class="slider owl-carousel owl-carousel-index owl-theme">
                                @foreach($same_products as $same_product)
                                    <div class="items">
                                        <a href="{{ route('frontend.product.show', ['lang'=> 'fa', 'slug'=>$same_product->slug]) }}">
                                            <img src="{{ json_decode($same_product->imageUrls)->img1 }}" title="" alt="">
                                            <span class="cost">{{ $same_product->title }}</span>
                                            <span class="more-info">اطــــلاعــاتـــــــ بــیــــشــــتـــــــر</span>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>
@endsection


@section('title')
    محصول {{ $product_list->title }}
@endsection
