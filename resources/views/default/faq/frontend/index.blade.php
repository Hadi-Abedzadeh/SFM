@extends('default.layouts.frontend')

@section('content')
    <style>
        button{
            color: #5f5b5b;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            font-size: 15px;
            transition: 0.4s;
            margin: 3px 0px;
            border-radius: 4px;
            background: #DDD!important;

        }

    </style>
    @foreach($faq as $q)
        <div class="container" style="">
            <a href="{{ route('frontend.blog.index') .'/'.$q->slug }}">{{ $q->title }}</a>
            <button class="panel text-right" type="button" class="btn btn-info" data-toggle="collapse" data-target="#faq{{$q->id}}"> {{ $q->question }} </button>
            <div id="faq{{$q->id}}" class="faq collapse">
                {!! $q->answer !!}
            </div>
        </div>
        <br>
    @endforeach


@endsection
