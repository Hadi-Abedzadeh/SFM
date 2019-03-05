@extends('default.layouts.frontend')

@section('title')
    Add category
@endsection

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>
                    About us
                </h3>
            </div>
            <div class="panel-body">
                {!! $about->body !!}
            </div>
            <div class="panel-footer">
            </div>
        </div>
    </div>

@endsection
