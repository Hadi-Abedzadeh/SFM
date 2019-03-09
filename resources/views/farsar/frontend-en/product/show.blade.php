@extends(env('THEME_NAME').'.frontend-en.layouts.frontend')
@section('content')

    <div class="container">
        <div class="innerarea sidebyside">
            <div class="singleside">
                <h4>Product Related</h4>

                @foreach($same_products as $same_products)
                    <div class="projectitem">
                        <h3>{{ $same_products->title }}</h3>
                        <div class="projectitemimg">
                            <img src="{!! json_decode($same_products->imageUrls)->img1!!}" draggable="false">
                            <a href="{{route('frontend.product.show', ['slug'=>$same_products->slug])}}"
                               class="getmore">Get Order</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="singlearea">
                <h4>
                    {{ $product_list->title }}
                </h4>

                <div class="gallerysliderarea owl-carousel">
                    @foreach(json_decode($product_list->imageUrls) as $img)
                        <div class="galleryslider active">
                            <img src="{{ $img }}">
                        </div>
                    @endforeach
                </div>

                <div class="content">
                    <p>
                        {{ $product_list->body }}
                    </p>
                </div>


            </div>
        </div>
    </div>

@endsection


@section('title')
    Products
@endsection
