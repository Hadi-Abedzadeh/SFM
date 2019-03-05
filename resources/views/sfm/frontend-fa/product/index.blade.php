@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')

    <section class="product-section">
        <div class="title">
            <h2><span>محصولات</span> ما</h2>
            <span>ما چه می سازیم؟</span>
        </div>
        <div class="content">
            <header>
                <nav>
                    <ul class="products-button">
                        <li class="active" data-product="item"><span>همه محصولات</span></li>
                        <li data-product="A-1"><span>آبمیوه گیری</span></li>
                        <li data-product="A-2"><span>ماکروویو</span></li>
                        <li data-product="A-3"><span>جارو برقی</span></li>
                        <li data-product="A-4"><span>بخاری</span></li>
                    </ul>
                </nav>
                <div class="search">
                    <input type="search" id="site-search" name="product_search" placeholder="جست و جو محصول …">
                </div>
            </header>

            <div class="products">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-24 A-{{$product->product_id}} item active">
                            <div class="items">
                                <a href="{{ route('frontend.product.show', ['slug'=>$product->slug]) }}">
                                    <img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/product-1.png" title="" alt="">
                                    <span class="cost">{{ $product->title }}</span>
                                    <span class="more-info">اطــــلاعــاتـــــــ بــیــــشــــتـــــــر</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @endsection
