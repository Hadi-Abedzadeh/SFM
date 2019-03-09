@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
<div class="div-list-project">
    <div class="container">
        <section class="sect-slider-content-project sect-slider-content-catalog">
            <header>
                <h2 class="c-h2">
                    پروژه <em class="f-c-b">{{ $project->title }}</em>
                </h2>
            </header>
            <div class="row p15">
                <div class="col-md-24">
                    <div class="row p15">
                        <div class="col-md-8">
                            <figure class="fig-img-any-project">
                                <img src="/{{env('THEME_NAME')}}/assets/images/sample/project/1.jpg" alt="" title="">
                            </figure>
                        </div>
                        <div class="col-md-16">
                            <article class="art-content-any-project">
                                <header>
                                    <h3 class="c-h2">
                                        عنوان <em class="f-c-b">اول</em>
                                    </h3>
                                </header>
                                <p class="c-p">
                                    {{$project->body}}
                                </p>
                            </article>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <section class="sec-slider-product sec-slider-any-project">
        <div class="container">
            <div class="swiper-container slider-product">
                <div class="swiper-wrapper">


                    @foreach(json_decode($project->imageUrls, true) as $project2)
                        <div class="swiper-slide">
                            <article class="art-content-sider-any-project">
                                <a href="javascript:vidd(0)" title="">
                                    <figure>
                                        <img src="/{{env('THEME_NAME')}}/assets/images/sample/project/HeaderBG.png" alt="" title="">
                                    </figure>
                                </a>
                            </article>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
        <i class="icon-next swiper-product swiper-product-next f-c-b"></i>
        <i class="icon-prev swiper-product swiper-product-prev f-c-b"></i>
    </section>
</div>
@endsection

@section('title')
    پروژه ها
@endsection
