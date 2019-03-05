@extends('default.layouts.backend')

@section('title')
    Edit post
@endsection

@section('content')
    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
        <div class="m-portlet__body">
            @include('error')
            @include('flash::message')

            <form action="{{ route('backend.blog.comment.update', ['id' => $comment->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="Title">Name</label>
                    <input type="text" name="client_name" class="form-control" id="client_name" value="{{ $comment->client_name }}" placeholder="Client Name">
                </div>

                <div class="form-group">
                    <label for="client_email">Client email</label>
                    <input type="text" name="client_email" class="form-control" id="client_email" value="{{ $comment->client_email }}" placeholder="Client Email">
                </div>


                <div class="form-group">
                    <label for="body">body</label>
                    <textarea class="form-control" name="body" id="body" placeholder="body">{{ $comment->body }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="/assets/ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('body' ,{
            filebrowserUploadUrl : '{{route('backend.blog.img_upload')}}',
            filebrowserImageUploadUrl : '{{route('backend.blog.img_upload')}}',
        });
    </script>
@endsection

@section('select2')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });

        $('.alert').fadeOut(4000);

    </script>
@endsection


