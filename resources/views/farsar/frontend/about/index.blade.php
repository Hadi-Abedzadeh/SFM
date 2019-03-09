@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')

    <div class="div-list-project">
        <div class="container">
            <section class="sect-slider-content-project sect-slider-content-any-blog">
                <div class="row p15">
                    <div class="col-md-24">
                        <article class="art-content-about">
                            <div class="div-content-about">
                                </header>
                                <p class="c-p">
                                    {!! $about->body !!}
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class="sec-slider-product sec-slider-about">
        <div class="container">
            <div class="swiper-container slider-product">
                <div class="swiper-wrapper">
                    {{ create_box_honors(6) }}
                </div>
            </div>
        </div>
        <i class="icon-next swiper-product swiper-product-next f-c-b"></i>
        <i class="icon-prev swiper-product swiper-product-prev f-c-b"></i>
    </section>
@endsection
@section('title')
    درباره ما
@endsection
