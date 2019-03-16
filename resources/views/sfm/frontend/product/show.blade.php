@extends(env('THEME_NAME').'.layouts.frontend')
@section('content')

    {{--  <div class="singleheader">
          <div class="singlecover"><img src="/{{env('THEME_NAME')}}/assets//{{env('THEME_NAME')}}/assets/images/background.jpg"></div>
          <a href="{{ route('frontend.product.index') }}" class="singleback">BACK TO PRODUCTS</a>
      </div>
      <div class="singleheaderclear"></div>
      <div class="container-fluid">
          <div class="singlecontent">
              <h1>{{$product_list->title}}</h1>
              <p>{{$product_list->body}}</p>
          </div>
          </div>
  --}}

    <div class="container-fluid">

        <div class="singleproduct">
            <div class="singleproductside">
                <h3>{{$product_list->title}}</h3>
                <div class="khat"><span>COLORS:</span> White, Black, Gray, Silver
                    <div class="colors">
                        <div class="color white"></div>
                        <div class="color black"></div>
                        <div class="color gray"></div>
                        <div class="color silver"></div>
                    </div>
                </div>
                <div class="khat"><span>FUNCTION:</span></div>
                <div class="row">

                    <div class="col">
                        <span>DEFROST PROGRAM</span>
                        <span>DEFROST PROGRAM</span>
                    </div>

                </div>
                <a href="{{ $product_list->file_url }}" class="btn">CATALOGE DOWNLOAD</a>
            </div>
            <div class="singleproductimg">
                <div><img src="/{{env('THEME_NAME')}}/assets/images/main-product.png" draggable="false"></div>
            </div>
        </div>
        <div class="owl-carousel productsarea">
            @foreach($same_products as $same_product)
                <div class="product micro1 active">
                    <div class="productthumb">
                        <img src="{{ \GuzzleHttp\json_decode($same_product->imageUrls)->img1 }}" draggable="false">
                    </div>
                    <div class="producttitle">{{ $same_product->title }}</div>
                    <a href="{{route('frontend.product.show',['lang'=>'en','slug' => $same_product->slug])}}"
                       class="productmore">VIEW MORE</a>
                </div>
            @endforeach

        </div>
    </div>

@endsection

@section('title')
    {{ $same_product->title }}
@endsection
