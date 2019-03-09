@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="div-list-project">
        <div class="container">
            <section class="sect-slider-content-project sect-slider-content-catalog">
                <header>
                    <h2 class="c-h2">
                        دسته بندی <em class="f-c-b">محصولات</em>
                    </h2>
                </header>
                <div class="row p15">
                    <div class="col-md-18">
                        <div class="row p15">

                            @foreach($products as $product)
                                <div class="col-md-8">
                                    <article class="art-content-sider art-content-sider-any art-content-sider-products">
                                        <div>
                                            <figure>
                                                <img src="{{ json_decode($product->imageUrls)->img1 }}" alt="{{ $product->title }}" title="{{ $product->title }}">
                                            </figure>
                                        </div>
                                        <header>
                                            <h3 class="c-h2">{{ $product->title }}</h3>
                                        </header>
                                        <a class="a-btn-bggr a-btn" href="{{route('frontend.product.show', ['slug' => $product->slug])}}" title="مشاهده محصول">مشاهدهمحصول</a>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <aside>
                            <article class="art-aside">
                                <header>
                                    <figure>
                                        <img src="./assets/images/sample/sidebar.svg" alt="" title="">
                                    </figure>
                                    <h3 class="f-c-b">
                                        دسته بندی محصولات
                                        <em class="c-h2">دسته بندی مورد نظر را انتخاب کنید</em>
                                    </h3>
                                </header>
                                <ul class="ul-art-aside">
                                    @foreach($get_products_list as $produc)
                                        <li>
                                            <a href="{{ route('frontend.product.catalog',['slug' => $produc->slug ])}}" class="c86" title="{{ $produc->title }}"> {{ $produc->title }} </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </article>
                        </aside>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

@section('title')
    محصولات
@endsection
