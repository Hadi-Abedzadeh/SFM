<!doctype html>
<html class="areapage">
<head>
    <meta charset="utf-8">
    <title>SFM | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/latest/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/latest/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/{{ env('THEME_NAME') }}/assets/css/animate.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/{{ env('THEME_NAME') }}/assets/css/owl.carousel.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/{{ env('THEME_NAME') }}/assets/css/style.css" type="text/css" media="screen">
</head>
<body>
<nav>
    <a class="logo" href="{{ route('frontend') }}"></a>
    <div class="navside">
        <div class="langchoose">
            <a class="active"><span>EN</span>
                <div class="flagen"></div>
            </a>
            
			<a href="{{ change_lang('en') }}">
			<span>IR</span>
                <div class="flagfa"></div>
            </a>
        </div>
        <div class="menu noselect">
            <div class="menu-text">
                <span>MENU</span>
                <span>CLOSE</span>
            </div>
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="background"></div>
</nav>
<div id="fullmenu">
    <div class="fullmenulink">
        <a href="{{ route('frontend') }}">HOME</a>
        <a href="{{ route('frontend.about.index', ['lang'=>'en']) }}">ABOUT</a>
        <a href="{{ route('catalog', ['lang'=>'en']) }}">CATALOGE</a>
        <a href="{{ route('frontend.product.index', ['lang'=>'en']) }}">PRODUCT</a>
        <a href="{{ route('frontend.blog.index', ['lang'=>'en']) }}">BLOG</a>
        <a href="{{ route('frontend.news.index', ['lang'=>'en']) }}">NEWS</a>
        <a href="{{ route('frontend.contact-us.index', ['lang'=>'en']) }}">CONTACT</a>
    </div>
    <div class="fullmenusquare1"></div>
    <div class="fullmenusquare2"></div>
</div>
@yield('content')
</div>
</div>
<footer>
    <div class="footercontent">
        {!! \App\Contact::first()->etc !!}
    </div>
</footer>
<div class="footerlinks">
    <a href="{{ route('faq', ['lang'=>'en']) }}">FAQ</a> | <a href="{{ route('support',['lang'=>'en']) }}">TICKET</a>
</div>
<script type="text/javascript" src="/{{ env('THEME_NAME') }}/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/{{ env('THEME_NAME') }}/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/{{ env('THEME_NAME') }}/assets/js/plugin.js"></script>
@yield('infiniteScroll')
</body>
</html>
