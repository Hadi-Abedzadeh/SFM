@extends(env('THEME_NAME').'.layouts.frontend')
@section('content')

    <div class="singleheader">
        <div class="singlecover"><img src="/{{env('THEME_NAME')}}/assets/images/background.jpg"></div>
        <a href="{{ route('frontend.product.index') }}" class="singleback">BACK TO PRODUCTS</a>
    </div>
    <div class="singleheaderclear"></div>
    <div class="container-fluid">
        <div class="singlecontent">
            <h1>{{$product->title}}</h1>
            <p>{{$product->body}}</p>
        </div>
        </div>


@endsection
