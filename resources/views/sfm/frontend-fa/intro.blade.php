<!doctype html>
<html class="intropage fa">
<head>
    <meta charset="utf-8">
    <title>خوش آمدید</title>
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
    <link rel="stylesheet" href="/{{ env('THEME_NAME_FA') }}/assets/css/fonts.css"/>

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
            <a class="active"><span>IR</span>
                <div class="flagfa"></div>
            </a>
            <a href="{{ change_lang('fa') }}">
                <span>EN</span>
                <div class="flagen"></div>
            </a>
        </div>
    </div>
</nav>
<div class="intro noselect">
    <div class="container">
        <a href="/{{set_lang('fa')}}/brand/luxtai" class="introbox">
            <img src="/{{env('THEME_NAME')}}/assets/images/luxtai.png" draggable="false">
        </a>
        <a href="/{{set_lang('fa')}}/brand/komtai" class="introbox">
            <img src="/{{env('THEME_NAME')}}/assets/images/komtai.png" draggable="false">
        </a>
        <a href="/{{set_lang('fa')}}/brand/expanse" class="introbox">
            <img src="/{{env('THEME_NAME')}}/assets/images/expanse.png" draggable="false">
        </a>
        <div class="introbox oembox">
            <div class="indexuner"><h2>OEM</h2>
                <h3>برند خود را بسازید</h3>
                <div class="oemclose">برگشت</div>
            </div>
        </div>
        <div class="oem">
            <div class="oemcol"><img src="/{{env('THEME_NAME')}}/assets/images/logo.svg"/></div>
            <div class="oemcol"><img src="/{{env('THEME_NAME')}}/assets/images/logo.svg"/></div>
            <div class="oemcol"><img src="/{{env('THEME_NAME')}}/assets/images/logo.svg"/></div>
            <div class="oemcol"><img src="/{{env('THEME_NAME')}}/assets/images/logo.svg"/></div>
            <div class="oemcol"><img src="/{{env('THEME_NAME')}}/assets/images/logo.svg"/></div>
            <div class="oemcol"><img src="/{{env('THEME_NAME')}}/assets/images/logo.svg"/></div>
            <div class="oemcol"><img src="/{{env('THEME_NAME')}}/assets/images/logo.svg"/></div>
            <div class="oemcol"><img src="/{{env('THEME_NAME')}}/assets/images/logo.svg"/></div>
            <div class="oemcol"><img src="/{{env('THEME_NAME')}}/assets/images/logo.svg"/></div>
            <div class="oemcol"><img src="/{{env('THEME_NAME')}}/assets/images/logo.svg"/></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets/js/fullpage.min.js"></script>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets/js/plugin.js"></script>
</body>
</html>

