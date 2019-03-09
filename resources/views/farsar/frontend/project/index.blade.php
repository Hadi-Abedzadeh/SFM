@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="div-list-project">
        <div class="container">
            <section class="sect-slider-content-project">
                <header>
                    <h3 class="c-h2">
                        لیست <em class="f-c-b">پروژه ها</em>
                    </h3>
                </header>
                @foreach($projects as $project)
                    <article class="art-slider-content-project slidert-{{$loop->iteration}}">
                        <bdi class="bdi-arrow-slider-project next f-c-b"><i
                                class="icon-next swiper-project swiper-project-next"></i></bdi>
                        <div class="swiper-container swiper-slider-project">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure class="fig-img-project">
                                        <img src="/{{env('THEME_NAME')}}/assets/images/sample/project/2.png" alt=""
                                             title="" class="swiper-lazy">
                                    </figure>
                                </div>

                                @foreach(json_decode($project->imageUrls, true) as $img)
                                    <div class="swiper-slide">
                                        <figure class="fig-img-project">
                                            <img data-src="{{$img}}" alt="" title="" class="swiper-lazy">
                                        </figure>
                                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                    </div>
                                @endforeach

                            </div>
                            <bdi class="bdi-arrow-slider-project prev f-c-b"><i
                                    class="icon-prev swiper-project swiper-project-prev"></i></bdi>
                        </div>
                        <div class="div-content-slider">
                            <header>
                                <h2 class="c-h2">
                                    پروژه <em class="f-c-b">{{ $project->title }}</em>
                                </h2>
                            </header>
                            <P class="c-p">
                                {{ substr(strip_tags($project->body), 0, 500) }}
                                {{ strlen(strip_tags($project->body)) > 50 ? "..." : "" }}
                            </P>
                            <a class="a-btn-bggr a-btn a-btn-bggr-product" href="{{ route('frontend.project.show', ['slug' => $project->slug]) }}" title="اطلاعات بیشتر">اطلاعات بیشتر</a>
                        </div>
                    </article>
                @endforeach
            </section>
        </div>
    </div>
@endsection

@section('title')
    پروژه ها
@endsection
