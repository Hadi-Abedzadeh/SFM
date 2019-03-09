<!DOCTYPE html>
<html dir="rtl" lang="fa-IR" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Single title -->
    <meta itemprop="description" content="" />
    <!-- Single image -->
    <meta name="theme-color" content="#e92222" />
    <!-- Site Unique Color -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-title" content="" />
    <!-- Site name | Site Description -->
    <meta name="description" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="" />
    <!-- Site Unique background Color -->
    <meta name="screen-orientation" content="portrait" />
    <!-- Author Name -->
    <meta name="author" content="-Aghaei">
    <!-- Site orientation in UC Browser -->
    <meta name="full-screen" content="yes" />
    <meta name="imagemode" content="force" />
    <meta name="layoutmode" content="fitscreen" />
    <meta name="wap-font-scale" content="no" />
    <!-- Site index link -->
    <title>لوکستای | @yield('title')</title>
    <!--  slider  -->
    <link rel="stylesheet" href="/{{env('THEME_NAME_FA')}}/assets/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/{{env('THEME_NAME_FA')}}/assets/css/reset.min.css" />
    <link rel="stylesheet" href="/{{env('THEME_NAME_FA')}}/assets/css/stylesheet.css" />
    <link rel="stylesheet" href="/{{env('THEME_NAME_FA')}}/assets/css/responsive.css" />
    <link rel="stylesheet" href="/{{env('THEME_NAME_FA')}}/assets/css/fonts.css" />
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
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
    <header>
        <nav>
            <div class="menu noselect">
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="menu-text"><span>فهرست</span><span>بستن</span></div>
                <div class="menu-language">
                    <div class="selected-lang">
                        <img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/iran.svg" alt="">
                        <span>فارسی</span>
                        <img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/arrow-bottom.svg" alt="">
                    </div>
                    <div class="more-lang">
                        <a href="/lang/en">
                            <img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/english.svg" alt="">
                            <span>انگلیسی</span>
                        </a>
                    </div>
                </div>
            </div>
            <a class="logo" href="#"></a>
        </nav>
        @include('sfm.frontend-fa.nav-fa')
        <div class="header-bg-objs">
            <div class="bg-obj-header"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/bg-footer-obj.jpg" alt=""></div>
            <div class="bg-right-obj-header"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/Top-Right-Object.svg" alt=""></div>
        </div>
    </header>
            @yield('content')
    <footer class="site-footer-2 footer-index" role="contentinfo">
        <div class="content-footer">
            <div class="content">
                <div class="title">
                    <h2><span>تماس</span> با ما</h2>
                    <span>چطور با ما تماس بگیرید؟</span>
                </div>
                <div class="info">
                    <ul class="info-footer">
                        <li>ایران، تهران، میدان شیخ بهائی، <em>برج صدف</em> ، طبقه ۱۴، واحد ۱۴۴</li>
                        <li>۹۸+ <em>۲۱</em> ۱۱۱۰ ۸۸۲۱</li>
                        <li>INFO@<em>LUXTAI</em>.COM</li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li><a href="#"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/facebook.svg" alt="facebook"></a></li>
                        <li><a href="#"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/Twitter.svg" alt="Twitter"></a></li>
                        <li><a href="#"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/pintrest.svg" alt="pintrest"></a></li>
                        <li><a href="#"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/linkedin.svg" alt="linkedin"></a></li>
                    </ul>
                </div>
            </div>
            <a href="#" target="_blank" class="map-footer"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/map.jpg" alt="" title=""></a>
            <div class="copyright">
                <a href="https://cafelead.agency"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/Cafelead-copyright.svg" alt="" title=""></a>
            </div>
        </div>
        <div class="bg-obj-footer2"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/path-footer-2.svg" alt=""></div>
    </footer>
</div>
<script src="/{{env('THEME_NAME_FA')}}/assets/js/jquery-1.12.4.min.js"></script>
<script src="/{{env('THEME_NAME_FA')}}/assets/js/script.js" defer="defer"></script>
<!--  slider  -->
<script src="/{{env('THEME_NAME_FA')}}/assets/owl-carousel/js/owl.carousel.min.js"></script>
</body>

</html>
