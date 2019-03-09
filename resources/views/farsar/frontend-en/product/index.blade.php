@extends(env('THEME_NAME').'.frontend-en.layouts.frontend')
@section('content')
    <div class="container">
        <div class="gallerysliderarea owl-carousel">
            @foreach($products as $product)
                <div class="galleryslider">
                    <img src="{{ json_decode($product->imageUrls)->img1 }}">
                </div>
            @endforeach
        </div>
        <div class="innerarea">
            {{--<div class="category">--}}
                {{--<div class="areaheader">--}}
                    {{--<h2>Categorys</h2>--}}
                {{--</div>--}}
                {{--<div class="categorylist">--}}
                    {{--@foreach($product_category as $producta)--}}
                        {{--<a href="{{route('frontend.product.catalog', ['slug'=>$producta->slug])}}">{{$producta->title}}</a>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="content">
                <div class="areaheader">
                    <h2>Products</h2>
                    <div class="sorter">
                        <div class="sorterheader">Newest</div>
                        <span>Newest</span>
                        <span>Oldest</span>
                    </div>
                </div>
                <div class="productitems">
                    @foreach($products as $product)
                        <div class="productitem">
                            <h3>{{ $product->title }}</h3>
                            <div class="productitemimg">
                                <img src="{{ json_decode($product->imageUrls)->img1 }}" draggable="false">
                                <img src="{{ json_decode($product->imageUrls)->img1 }}" draggable="false">
                            </div>
                            <a href="{{ route('frontend.product.show', ['slug' => $product->slug]) }}" class="getmore">Get
                                Order</a>
                        </div>
                    @endforeach


                </div>
                {{ $products->links() }}
                {{--<div class="pagination">--}}
                {{--<a href="#">Back</a>--}}
                {{--<a href="#">1</a>--}}
                {{--<a href="#" class="active">2</a>--}}
                {{--<a href="#">3</a>--}}
                {{--<a href="#">Next</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection


@section('title')
    Products
@endsection
