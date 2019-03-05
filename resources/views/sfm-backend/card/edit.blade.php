@extends('default.layouts.backend')

@section('title')
    Edit card
@endsection

@section('content')
    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
        <div class="m-portlet__body">
            @include('error')
            @include('flash::message')

            <form action="{{ route('backend.card.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" name="title" class="form-control" id="Title" value="{{ $card->title }}" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="body">body</label>
                    <textarea class="form-control" name="body" id="body" placeholder="body">{{ $card->body }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

