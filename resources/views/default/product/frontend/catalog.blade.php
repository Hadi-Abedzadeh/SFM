@extends('default.layouts.frontend')
@section('content')
    @foreach($products as $product)
        <div class='col-lg-3'>
            <div class='panel panel-default'>
                <div class='panel-heading'><h3>{{ $product->title }}</h3></div>
                <div class='panel-body'>
                    {{ $product->body }}
                </div>
                <div class='panel-footer'>
                    <a href="{{route('frontend.product.show', ['slug' => $product->slug])}}">See more</a>
                </div>
            </div>
        </div>
    @endforeach


@endsection
