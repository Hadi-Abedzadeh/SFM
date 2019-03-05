@extends('default.layouts.backend')

@section('title')
    About us
@endsection

@section('content')
    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
        <div class="m-portlet__body">
            @include('error')
            @include('flash::message')

            <form action="{{ route('about-us.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="body">About us:</label>
                    <textarea class="form-control" name="body" id="body" placeholder="body"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
    {!! ckeditor('aboutus', 'files')  !!}
@endsection
