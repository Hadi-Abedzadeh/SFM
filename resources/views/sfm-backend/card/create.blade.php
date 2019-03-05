@extends('default.layouts.backend')

@section('title')
    Add a new card
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
                    <input type="text" name="title" class="form-control" id="Title" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="body">body</label>
                    <textarea class="form-control" name="body" id="body" placeholder="body"></textarea>
                </div>


                <div class="form-group">
                    <label for="page">page</label>
                    <select class="form-control" id="page" name="page_id">
                        @foreach($pages as $page)
                            <option value="{{ $page->id }}">{{ $page->page }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    {!! ckeditor('card', 'card-contents') !!}

@endsection


