<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>SFM</title>
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

@include(env('THEME_NAME').'.frontend.sidebar')
<div id="fullpage">

    @yield('content')
</div>
</body>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets/js/fullpage.min.js"></script>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets/js/plugin.js"></script>
</html>
