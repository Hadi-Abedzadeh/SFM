<!DOCTYPE html>
<html dir="rtl" lang="fa-IR" class="no-js">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="application-name" content=""/>
    <!-- Site Name -->
    <meta name="google" content="notranslate"/>

    <meta name="google-site-verification" content=""/>
    <!-- Data -->
    <meta name="alexaVerifyID" content=""/>
    <!-- Data -->
    <meta name="norton-safeweb-site-verification" content=""/>
    <!-- Data -->

    <meta name="designer" content=""/>
    <meta name="copyright" content="&copy; 2018 "/>
    <link rel="license" href=""/>

    <link rel="author" href=""/>
    <!-- Single title -->
    <meta itemprop="description" content="Web-Developer"/>
    <!-- Single summary -->
    <meta itemprop="image" content=""/>
    <!-- Single image -->

    <meta name="theme-color" content="#f7b519"/>
    <!-- Site Unique Color -->
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-title" content="Site Name"/>
    <!-- Site name -->
    <meta name="msapplication-tooltip" content=""/>
    <!-- Site name | Site Description -->
    <meta name="msapplication-starturl" content=""/>
    <!-- Site url -->
    <meta name="msapplication-navbutton-color" content=""/>
    <!-- Site Unique background Color -->
    <meta name="msapplication-TileColor" content=""/>
    <!-- Site Unique background Color -->
    <meta name="screen-orientation" content="portrait"/>
    <!-- Site orientation in UC Browser -->
    <meta name="full-screen" content="yes"/>
    <meta name="imagemode" content="force"/>
    <meta name="layoutmode" content="fitscreen"/>
    <meta name="wap-font-scale" content="no"/>
    <link rel="index" href="javascript:void(0)"/>
    <!-- Site index link -->

    <title>فرسار</title>
    <link rel="stylesheet" href="/{{ env('THEME_NAME') }}/assets/css/stylesheet.css"/>
    <!--[if lt IE 10]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexibility/2.0.1/flexibility.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="wrapper" id="main-page">
    <header class="site-header site-header-main" id="sectionup">
        <figure class="bg-img-header bg-gr-header">
            <img src="/{{ env('THEME_NAME') }}/assets/images/sample/bg-header1.png" alt="" title="">
        </figure>
        <div class="container">
            <section class="set-header-top">
                <article class="art-header-right">
                    <figure>
                        <a href="javascript:void(0)" title="farsar">
                            <img src="/{{ env('THEME_NAME') }}/assets/images/sample/logo.png" alt="farsar"
                                 title="farsar">
                        </a>
                    </figure>
                    <nav class="primary-menu" role="navigation" aria-label="منو اصلی">
                        @include(env('THEME_NAME').'.layouts.nav-menu')
                    </nav>
                </article>
                <article class="art-header-left">
                    <i class="i-s icon-Search"></i>
                    <div class="div-lang">
                        <i class="i-w icon-World"></i>
                        <a href="/lang/en"><span>English</span></a>
                    </div>
                </article>
            </section>
            <section class="sec-header-bottom">
                {{ create_box(1) }}

                {{ create_box_first(2) }}
            </section>
        </div>
        <figure class="bg-img-header-bottom">
            <img src="/{{ env('THEME_NAME') }}/assets/images/sample/bg-header.svg" alt="" title="">
        </figure>
    </header>
    <main>
        <div class="main-content">
            <div class="container">
                <div class="row p15">
                    {{ create_box_second(3) }}
                </div>
            </div>
            <section class="sec-about-main">
                <div class="container">
                    {{ create_box_third(4) }}

                </div>
                <article class="art-svg-about-main">
                    <figure class="bg-gr-svg-about">
                        <img src="/{{ env('THEME_NAME') }}/assets/images/sample/bg-svg-main-about.png" alt="" title="">
                    </figure>
                </article>
            </section>
            <section class="sec-slider-product">
                <header>
                    <h2 class="c-h2">
                        برخی از <em class="f-c-b">محصولات</em>
                    </h2>
                </header>



                <div class="container">
                    <div class="swiper-container slider-product swiper-container-horizontal swiper-container-rtl">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

                            @foreach($product_list as $product)

                                <div class="swiper-slide swiper-slide-active" style="margin-left: 11px;">
                                    <article class="art-content-sider">
                                        <div>
                                            <figure>
                                                <img src="{{ ($product->imageUrl) }}" alt="" title="">
                                            </figure>
                                        </div>
                                        <header>
                                            <h3 class="c-h2">{!! $product->title !!}</h3>
                                        </header>
                                        <a class="a-btn-bggr a-btn" href="{{ route('frontend.product.show', ['slug' => $product->slug ])}}" title="مشاهده محصول">مشاهده محصول</a>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>

                <i class="icon-next swiper-product swiper-product-next f-c-b"></i>
                <i class="icon-prev swiper-product swiper-product-prev f-c-b"></i>
            </section>

            <div class="container">
                <section class="sec-best-prodouct">
                    <article class="art-svg-product">
                        <figure>
                            <img class="img-bg-svg-pro" src="/{{ env('THEME_NAME') }}/assets/images/sample/svg-best-product.svg" alt="" title="">
                            <img class="img-art-pro" src="/{{ env('THEME_NAME') }}/assets/images/sample/product/pro1.png" alt="" title="">
                        </figure>
                    </article>
                    {{ create_box_forth(5) }}
                </section>
            </div>
        </div>
    </main>
    <footer class="site-footer footer-index" role="contentinfo">
        <figure class="bg-img-header bg-gr-header">
            <img src="/{{ env('THEME_NAME') }}/assets/images/sample/bg-header1.png" alt="" title="">
        </figure>

        <section class="sec-main-footer">
            <div class="container">
                <div class="row p30">
                    <div class="col-md-8">
                        <article class="art-main-footer">
                            <header>
                                <h3>
                                    تماس با ما
                                </h3>
                            </header>
                            <address>


                                <span>
                                        امور مشتریان : <em>
                                            {!! explode(',' ,\App\Contact::first()->tel)[2] !!}

                                    </em>
                                    </span>
                                <span>
                                        روابط عمومی : <em>
                                        {!! explode(',' ,\App\Contact::first()->tel)[1] !!}
                                    </em>

                                    </em>
                                    </span>
                                <span>
                                        ارتباط با واحد فروش‌ : <em>
                                        {!! explode(',' ,\App\Contact::first()->tel)[0] !!}</em>
                                    </span>
                                <span>
                                        ایمیل : <em> {!! \App\Contact::first()->email !!}</em>
                                    </span>
                                <span>
                                        آدرس دفتر فروش :‌ <em>
                                        {!! \App\Contact::first()->etc !!}

                                        </em>
                                    </span>
                            </address>
                        </article>
                    </div>
                    <div class="col-md-8">
                        <article class="art-main-footer art-main-footer-factories">
                            <header>
                                <h3>
                                    کارخانجات
                                </h3>
                            </header>
                            <address>
                                    <span>
                                        کارخانه شماره ۱ : <em>
                                            شهرک صنعتی اشتهارد ، خیابان ابوریحان بیرونی ، خیابان
                                            ملاصدرای غربی ، خیابان صبای
                                            سوم،خیابان نسیم سوم، قطعه ۳۷۲۶</em>
                                    </span>
                                <span>
                                        کارخانه شماره ۲ : <em>شهرک صنعتی اشتهارد ، خیابان ابوریحان بیرونی ، خیابان
                                            ملاصدرای غربی ، خیابان صبای سوم
                                            ،خیابان نسیم چهارم ، قطعه ۳۷۴۵</em>
                                    </span>
                            </address>
                        </article>
                    </div>
                    <div class="col-md-8">
                        <article class="art-main-footer">
                            <header>
                                <h3>
                                    شبکه های اجتماعی
                                </h3>
                            </header>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" title="">
                                        <i class="icon-Twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="">
                                        <i class="icon-Rectangle-2"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="">
                                        <i class="icon-Path"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="">
                                        <i class="icon-Path-2"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="">
                                        <i class="icon-Instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="">
                                        <i class="icon-Telegram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="">
                                        <i class="icon-XMLID_799"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="">
                                        <i class="icon-Shape"></i>
                                    </a>
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <figure class="bg-img-footer-top">
            <img src="/{{ env('THEME_NAME') }}/assets/images/sample/footer-path.svg" alt="" title="">
        </figure>

    </footer>
</div>

<script src="/{{ env('THEME_NAME') }}/assets/js/jquery-3.3.1.min.js"></script>
<script src="/{{ env('THEME_NAME') }}/assets/js/swiper.jquery.min.js" defer="defer"></script>
<script src="/{{ env('THEME_NAME') }}/assets/js/parallax.min.js" defer="defer"></script>
<script src="/{{ env('THEME_NAME') }}/assets/js/script.js" defer="defer"></script>
</body>

</html>
