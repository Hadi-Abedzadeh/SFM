@extends('default.layouts.backend')

@section('title')
    Pages
@endsection

@section('content')
    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
        <div class="m-portlet__body">
            @include('error')
            @include('flash::message')

            <form action="{{ route('backend.page.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="Title">Page name</label>
                    <input type="text" name="page" class="form-control" id="Title" placeholder="Enter Page">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

