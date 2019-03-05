@extends('default.layouts.backend')

@section('title')
    Create a Project
@endsection

@section('content')
    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
        <div class="m-portlet__body">
            @include('error')
            @include('flash::message')

            <form action="{{ route('backend.project.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="Title">Page name</label>
                    <input type="text" name="title" class="form-control" id="Title" placeholder="Enter Page">
                </div>


                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea type="text" name="body" class="form-control" id="body"></textarea>
                </div>

                <div class="form-group">
                    <label for="Title">Upload image</label>
                    <input type="file" name="imageUrl" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>

    <script src="/assets/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection

