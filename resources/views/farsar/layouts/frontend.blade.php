
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="application-name" content="" />
    <!-- Site Name -->
    <meta name="google" content="notranslate" />

    <meta name="google-site-verification" content="" />
    <!-- Data -->
    <meta name="alexaVerifyID" content="" />
    <!-- Data -->
    <meta name="norton-safeweb-site-verification" content="" />
    <!-- Data -->

    <meta name="designer" content="" />
    <meta name="copyright" content="&copy; 2018 " />
    <link rel="license" href="" />

    <link rel="author" href="" />
    <!-- Author Name -->
    <meta itemprop="name" content=" " />
    <!-- Single title -->
    <meta itemprop="description" content="Web-Developer" />
    <!-- Single summary -->
    <meta itemprop="image" content="" />
    <!-- Single image -->

    <meta name="theme-color" content="#f7b519" />
    <!-- Site Unique Color -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-title" content="Site Name" />
    <!-- Site name -->
    <meta name="msapplication-tooltip" content="" />
    <!-- Site name | Site Description -->
    <meta name="msapplication-starturl" content="" />
    <!-- Site url -->
    <meta name="msapplication-navbutton-color" content="" />
    <!-- Site Unique background Color -->
    <meta name="msapplication-TileColor" content="" />
    <!-- Site Unique background Color -->
    <meta name="screen-orientation" content="portrait" />
    <!-- Site orientation in UC Browser -->
    <meta name="full-screen" content="yes" />
    <meta name="imagemode" content="force" />
    <meta name="layoutmode" content="fitscreen" />
    <meta name="wap-font-scale" content="no" />
    <link rel="index" href="javascript:void(0)" />
    <!-- Site index link -->

    <title>@yield('title') | فرسام </title>
    <link rel="stylesheet" href="/{{env('THEME_NAME')}}/assets/css/stylesheet.css" />
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
    <header class="site-header site-header-main site-header-main-single" id="sectionup">
        <figure class="bg-img-header bg-gr-header">
            <img src="/{{env('THEME_NAME')}}/assets/images/sample/bg-header1.png" alt="" title="">
        </figure>
        <div class="container">
            <section class="set-header-top">
                <article class="art-header-right">
                    <figure>
                        <a href="javascript:void(0)" title="farsar">
                            <img src="/{{env('THEME_NAME')}}/assets/images/sample/logo.png" alt="farsar" title="farsar">
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
        </div>
        <figure class="bg-img-header-bottom bg-img-header-single">
            <img src="/{{env('THEME_NAME')}}/assets/images/sample/header.svg" alt="" title="">
        </figure>
    </header>
    <main>

@yield('content')

    </main>
    <footer class="site-footer footer-index" role="contentinfo">
        <figure class="bg-img-header bg-gr-header">
            <img src="/{{env('THEME_NAME')}}/assets/images/sample/bg-header1.png" alt="" title="">
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
                                        امور مشتریان : <em>۰۲۱۲۲۳۰۴۰۵۰</em>
                                    </span>
                                <span>
                                        روابط عمومی : <em>۰۲۱۵۵۳۳۱۱۲۲</em>
                                    </span>
                                <span>
                                        ارتباط با واحد فروش‌ : <em>۰۲۱۵۶۴۴۹۹۳۳</em>
                                    </span>
                                <span>
                                        ایمیل : <em>info@farsar.com</em>
                                    </span>
                                <span>
                                        آدرس دفتر فروش :‌ <em> ایران، تهران، میدان شیخ بهائی، برج صدف، طبقه ۱۴، پلاک
                                            ۱۴۱
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
            <img src="/{{env('THEME_NAME')}}/assets/images/sample/footer-path.svg" alt="" title="">
        </figure>

    </footer>
</div>

<script src="/{{env('THEME_NAME')}}/assets/js/jquery-3.3.1.min.js"></script>
<script src="/{{env('THEME_NAME')}}/assets/js/swiper.jquery.min.js" defer="defer"></script>
<script src="/{{env('THEME_NAME')}}/assets/js/parallax.min.js" defer="defer"></script>
<script src="/{{env('THEME_NAME')}}/assets/js/script.js" defer="defer"></script>
</body>

</html>
