@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')
    <main id="product-page">
        <div class="container">
    <section class="product-section">
        <div class="title">
            <h2><span>محصولات</span>ما</h2> دسته بندی
            <span>{{ $category }}</span>
        </div>
        <div class="content">

            <div class="products">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-24 item active">
                            <div class="items">
                                <a href="{{ route('frontend.product.show', ['lang'=>'fa', 'slug'=>$product->slug]) }}">
                                    <img src="{{ json_decode($product->imageUrls)->img1 }}" title="" alt="">
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
        </div></main>
    @endsection

@section('title', 'محصولات')
