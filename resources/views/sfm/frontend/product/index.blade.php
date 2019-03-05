@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')

    <div class="newsproductarea">
        @foreach($products as $product)
            <div class="newsproduct">
                <div class="newsproductthumb"><img src="{{$product->imageUrl}}" draggable="false"></div>
                <div class="newsproductcontent">
                    <h4>{{$product->title}}</h4>
                    <p>{{$product->body}}</p>
                    <a href="{{route('frontend.product.show',['slug'=>$product->slug])}}" class="newsproductmore">VIEW
                        MORE</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
