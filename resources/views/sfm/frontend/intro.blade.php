<!doctype html>
<html class="intropage">
<head>
    <meta charset="utf-8">
    <title>SFM Intro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/latest/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/latest/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/{{env('THEME_NAME')}}/assets/css/animate.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/{{env('THEME_NAME')}}/assets/css/fullpage.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/{{env('THEME_NAME')}}/assets/css/style.css" type="text/css" media="screen">
</head>
<body>
<div class="fixedsection">
    <div class="introbase"></div>
    <div class="fixedheader"></div>
</div>
<nav>
    <a class="logo" href="{{ route('frontend') }}"></a>
    <div class="navside">
        <div class="langchoose">
            <a class="active"><span>EN</span><div class="flagen"></div></a>
            <a href="/lang/fa"><span>IR</span><div class="flagfa"></div></a>
        </div>
        <div class="menu noselect">
            <div class="menu-text"><span>MENU</span><span>CLOSE</span></div>
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</nav>
<div class="oem">

</div>

<div id="fullmenu">
    <div class="fullmenulink">
        <a href="{{ route('frontend') }}">HOME</a>
        <a href="{{ route('frontend.about.index') }}">ABOUT</a>
        <a href="{{ route('catalog') }}">CATALOGE</a>
        <a href="{{ route('frontend.product.index') }}">PRODUCT</a>
        <a href="{{ route('frontend.blog.index') }}">BLOG</a>
        <a href="{{ route('frontend.news.index') }}">NEWS</a>
        <a href="{{ route('frontend.contact-us.index') }}">CONTACT</a>
    </div>
    <div class="fullmenusquare1"></div>
    <div class="fullmenusquare2"></div>
</div>

<div class="intro noselect">
    <div class="container">
        <a href="/brand/luxtai" class="introbox"><img src="/{{env('THEME_NAME')}}/assets/images/luxtai.png" draggable="false"></a>
        <a href="/brand/komtai" class="introbox"><img src="/{{env('THEME_NAME')}}/assets/images/komtai.png" draggable="false"></a>
        <a href="/brand/expanse" class="introbox"><img src="/{{env('THEME_NAME')}}/assets/images/expanse.png" draggable="false"></a>
        <div class="introbox oembox">
            <div class="indexuner"><h2>OEM</h2>
                <h3>ORIGINAL <span>EQUIPMENT</span> MANUFACTURER</h3></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets/js/fullpage.min.js"></script>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets/js/plugin.js"></script>
</body>
</html>
