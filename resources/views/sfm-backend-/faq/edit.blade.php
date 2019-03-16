@extends('default.layouts.backend')

@section('title')
    Edit FAQ
@endsection

@section('content')
    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
        <div class="m-portlet__body">
            @include('error')
            @include('flash::message')
            <form action="{{route('faq.update', ['id'=> $faq->id])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" name="question" class="form-control" value="{{$faq->question}}" id="Title" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="body">body</label>
                    <textarea class="form-control" name="answer" id="body" placeholder="body">{{$faq->answer}}</textarea>
                </div>

                <input type="hidden" name="page_id" value="{{$faq->page_id}}">

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    {!! ckeditor('card', 'card-contents') !!}
@endsection
