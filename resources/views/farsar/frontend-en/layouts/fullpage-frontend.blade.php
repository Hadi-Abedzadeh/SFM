<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Farsar EN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/latest/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/latest/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/{{env('THEME_NAME')}}/assets-en/css/animate.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/{{env('THEME_NAME')}}/assets-en/css/fullpage.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/{{env('THEME_NAME')}}/assets-en/css/owl.carousel.min.css" media="screen">
    <link rel="stylesheet" href="/{{env('THEME_NAME')}}/assets-en/css/style.css" type="text/css">
</head>
<div id="menuactiver">
    <a class="logo" href="{{ route('frontend') }}"></a>
    <div class="menuicon">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <a class="langchoser" href="/lang/fa">FA</a>

</div>
<div class="fullmenucloser"></div>

@include(env('THEME_NAME'). '.frontend-en.layouts.nav')
<div id="fullpage">
    <div class="section header">
        <nav>
            <a class="logo" href="{{ route('frontend') }}"></a>
            <a class="langchoser" href="/lang/fa">FA</a>
            <div class="socialmedias">
                <a href="#" class="icon googleplus"></a>
                <a href="#" class="icon telegram"></a>
                <a href="#" class="icon twitter"></a>
                <a href="#" class="icon instagram"></a>
            </div>
        </nav>
        <h1>Largest Super<span>Retrina</span>Display.</h1>
        <div class="lefterberg"></div>
        <div class="scrolldown">
            <div class="mouse"></div>
            <span>SCROLL DOWN</span>
        </div>
    </div>
    <div class="section about fp-auto-height-responsive">
        <div class="lefterberg"></div>
        <div class="content">
            <div class="aboutheader">
                <h3>Largest Super</h3>
                <h2>Retina Display</h2>
            </div>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was popularised
                in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum.
            </p>
            <a href="{{ route('aboutus') }}" class="more">See More</a>
        </div>
    </div>
    <div class="section products">
        <div class="container">
            <h2>Products<a href="{{ route('frontend.product.index') }}" class="more">See More</a></h2>
            <div class="productitems owl-carousel">

                @foreach($product_list as $product)
                    <div class="productitem">
                        <h3>{{ $product->title }}</h3>
                        <div class="productitemimg">
                            <img src="{{ json_decode($product->imageUrls)->img1 }}" draggable="false">
                            <img src="{{ json_decode($product->imageUrls)->img1 }}" draggable="false">
                        </div>
                        <a href="{{ route('frontend.product.show', ['slug' => $product->slug]) }}" class="getmore">Get Order</a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="section projects" data-all="2" data-active="1">
        <div class="projectinfo">
            <div class="inner gallery-1 active">
                <div class="container">
                    <h2><span>Projects</span><a href="{{ route('frontend.project.index') }}" class="more">See More</a></h2>
                    <h3>Sarallah Hospital</h3>
                    <p>Lorem Ipsum is simply dummy text of
                        the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of
                        type and scrambled it to make a type
                        specimen book. It has survived not only
                        five centuries, but also the leap into
                        electronic typesetting, remaining
                        essentially unchanged.</p>
                    <a class="nextproject">Next Project</a>
                </div>
            </div>
            <div class="inner gallery-2">
                <div class="container">
                    <h2><span>Projects</span><a href="#" class="more">See More</a></h2>
                    <h3>Mehrad Hospital</h3>
                    <p>Lorem Ipsum is simply dummy text of
                        the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of
                        type and scrambled it to make a type
                        specimen book. It has survived not only
                        five centuries, but also the leap into
                        electronic typesetting, remaining
                        essentially unchanged.</p>
                    <a class="nextproject">Next Project</a>
                </div>
            </div>
        </div>
        <div class="projectgallery">
            <div class="innergallery gallery-1 active" data-all="2" data-active="1">
                <img src="/{{env('THEME_NAME')}}/assets-en/images/project1.jpg" class="galleryimg-1 active">
                <img src="/{{env('THEME_NAME')}}/assets-en/images/project2.jpg" class="galleryimg-2 active">
            </div>

            <div class="projectcontroller">
                <div class="prevgallery"></div>
                <div class="nextgallery"></div>
            </div>
        </div>
    </div>
    <div class="section news">
        <div class="container">
            <h2>News<a href="{{ route('frontend.news.index') }}" class="more">See More</a></h2>
            <div class="newsitems owl-carousel">

                @foreach($news as $report)
                    <div class="newsitem">
                        <div class="newsitemimg"><img src="/{{env('THEME_NAME')}}/assets-en/images/news3.jpg" draggable="false"></div>
                        <div class="newsitemcontainer">
                            <h4>{{ $report->title }}</h4>
                            <p>
                                {{ substr(strip_tags($report->body), 0, 300) }}
                                {{ strlen(strip_tags($report->body)) > 50 ? "..." : "" }}
                            </p>
                            <div class="newsitemfooter">
                                <a href="{{ route('frontend.news.index.show', ['slug'=>$report->slug]) }}" class="more">See More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
    <div class="section footer">
        <div class="footerheader">
            <div class="footerform">
                <div class="container">
                    <h2>Contact</h2>
                    <div class="form">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <textarea placeholder="Message..."></textarea>
                        <button>Send</button>
                    </div>
                </div>
            </div>
            <div class="footeraddress">
                <div class="container">
                    <div class="footeraddresstab"><div class="icon map"></div><p>Unit. 141, Fl. 14, Sadaf Tower.<br/>Sheikh Bahaee Sq. Tehran, IRAN.</p></div>
                    <div class="footeraddresstab"><div class="icon phone"></div><p>+982188211110</p></div>
                    <div class="footeraddresstab"><div class="icon fax"></div><p>+982188211110</p></div>
                    <div class="footeraddresstab"><div class="icon email"></div><p>info@cafelead.agency</p></div>
                </div>
                <div class="socialmedias">
                    <h5>Follow Us</h5>
                    <a href="#" class="icon googleplus"></a>
                    <a href="#" class="icon telegram"></a>
                    <a href="#" class="icon twitter"></a>
                    <a href="#" class="icon instagram"></a>
                </div>
                <a href="contactus.php" class="more">See More</a>
            </div>
            <div class="footermap"></div>
        </div>
        @include(env('THEME_NAME').'.frontend-en.layouts.navfooter')

    </div>
</div>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets-en/js/jquery.min.js"></script>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets-en/js/fullpage.min.js"></script>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets-en/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/{{env('THEME_NAME')}}/assets-en/js/plugin.js"></script>
</body>
</html>
