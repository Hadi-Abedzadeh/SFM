@extends('default.layouts.backend')

@section('title')
    Create FAQ
@endsection



@section('content')

    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
        <div class="m-portlet__body">
            @include('error')
            @include('flash::message')

            <form action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="Title">Question</label>
                    <input type="text" name="question" class="form-control" id="Title" placeholder="Enter question">
                </div>

                <div class="form-group">
                    <label for="body">Answer</label>
                    <textarea class="form-control" name="answer" id="body" placeholder="Enter your answer"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    {!! ckeditor('card', 'card-contents') !!}
@endsection
