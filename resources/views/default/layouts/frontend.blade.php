<html>
<head>
    <title>Laravel Cms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="{{ active_nav() }}"><a href="/">Home</a></li>
            <li class="{{ active_nav('/blog') }}"><a href="/blog">Blog</a></li>
            <li class="{{ active_nav('/news') }}"><a href="/news">News</a></li>
            <li class="{{ active_nav('/faq') }}"><a href="/faq">FAQ</a></li>
            <li class="{{ active_nav('/contact-us') }}"><a href="/contact-us">Contact us</a></li>
            <li class="{{ active_nav('/products') }}"><a href="/products">Products</a></li>
            <li class="{{ active_nav('/about-us') }}"><a href="/about-us">about us</a></li>
        </ul>
    </div>
</nav>


@yield('content')
</body>
</html>
