@extends(env('THEME_NAME').'.frontend-en.layouts.frontend')
@section('content')
    <div class="container">
        <div class="singleheader">
            <h3 class="singletitle">{{ $post->title }}</h3>
            <img src="{{ $post->imageUrl }}" draggable="false">
        </div>
        <div class="singlecontent">
            <p>
                {{ $post->body }}
            </p>
        </div>
        <div class="singletags">
            <span>Keywords: </span><a href="#">#Farsar</a><a href="#">#فرسار</a>

        </div>

        <div class="newsitems singleslider owl-carousel">

            <div class="newsitem">
                <div class="newsitemimg"><img src="/images/NewsFA5.jpg" draggable="false"></div>
                <div class="newsitemcontainer">
                    <h4>Lorem Ipsum is simply</h4>
                    <p>Dummy text of the printing and
                        type setting industry.<br/>
                        Lorem Ipsum has been the
                        industry's standard dummy text
                        ever since the 1500s...</p>
                    <div class="newsitemfooter">
                        <a href="blogsingle.php" class="more">See More</a>
                    </div>
                </div>
            </div>

            <div class="newsitem">
                <div class="newsitemimg"><img src="/images/NewsFA6.jpg" draggable="false"></div>
                <div class="newsitemcontainer">
                    <h4>Lorem Ipsum is simply</h4>
                    <p>Dummy text of the printing and
                        type setting industry.<br/>
                        Lorem Ipsum has been the
                        industry's standard dummy text
                        ever since the 1500s...</p>
                    <div class="newsitemfooter">
                        <a href="blogsingle.php" class="more">See More</a>
                    </div>
                </div>
            </div>


            <div class="newsitem">
                <div class="newsitemimg"><img src="/images/NewsFA7.jpg" draggable="false"></div>
                <div class="newsitemcontainer">
                    <h4>Lorem Ipsum is simply</h4>
                    <p>Dummy text of the printing and
                        type setting industry.<br/>
                        Lorem Ipsum has been the
                        industry's standard dummy text
                        ever since the 1500s...</p>
                    <div class="newsitemfooter">
                        <a href="#" class="more">See More</a>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection


@section('title')
    Blog
@endsection
