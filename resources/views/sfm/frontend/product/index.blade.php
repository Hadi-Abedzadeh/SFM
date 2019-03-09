@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
{{--
<div class="container-fluid">
    <div class="newsproductarea">
        @foreach($products as $product)
            <div class="newsproduct">
                <div class="newsproductthumb"><img src="{{json_decode($product->imageUrls)->img1}}" draggable="false">
                </div>
                <div class="newsproductcontent">
                    <h4>{{$product->title}}</h4>
                    <p>
                        {{ substr(strip_tags($product->body), 0, 500) }}
                        {{ strlen(strip_tags($product->body)) > 50 ? "..." : "" }}
                    </p>
                    <a href="{{route('frontend.product.show',['slug'=>$product->slug])}}" class="newsproductmore">VIEW
                        MORE</a>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}


<div class="container-fluid">

<div class="sectionheader">
<h2>OUR <span>PRODUCTS</span></h2>
<h3>WHO WE ARE?</h3>
</div>
<div class="flexheader">
<div class="sorter">
<a class="active" data-cat="product">ALL</a>
<a data-cat="A-juicer">juicer</a>
<a data-cat="A-microwave">microwave</a>
<a data-cat="A-vacuum-cleaner">vacuum cleaner</a>
<a data-cat="A-heater">heater</a>
</div>
<div class="searchbox">
<button><div class="icon"></div></button>
<input type="text" placeholder="SEARCH ...">
</div>
</div>
<div class="productsarea">


        @foreach($products as $product) 
	<div class="product A-{{$product->category}} active">
	<div class="productthumb"><img src="/{{env('THEME_NAME')}}/assets/images/product-2.png" draggable="false"></div>
	<div class="producttitle">9090</div>
	<a href="{{route('frontend.product.show',['slug'=>$product->slug])}}" class="productmore">VIEW MORE</a>
	</div>
			
@endforeach

</div>

</div>
@endsection


@section('title')
	Products
@endsection