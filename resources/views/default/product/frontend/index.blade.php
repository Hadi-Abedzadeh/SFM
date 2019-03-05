@extends('default.layouts.frontend')

@section('content')

    @foreach($products as $product)
        <div class='col-lg-3'>
            <div class='panel panel-default'>
                <div class='panel-heading'><h3>{{ $product->title }}</h3></div>
                <div class='panel-body'>
                    <img src="{{ $product->imageUrl }}"> <br>
                    {{ $product->body }}
                </div>
                <div class='panel-footer'><a href="{{route('frontend.product.catalog', ['slug' => $product->slug])}}">See projects</a></div>
            </div>
        </div>
    @endforeach
    @endsection
