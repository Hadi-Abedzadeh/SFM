@extends('default.layouts.frontend')

@section('content')
    @foreach($projects as $project)
        <div class='col-md-3'>
            <div class='card mb-3 box-shadow'>
                <h3>{{ $project->title }}</h3>
                <div class='card-body'>
                    <p class='card-text'>
                    {{ $project->body }}

                    <div>
                        <a href="{{route('frontend.project.show', ['id' => $project->id])}}">تمام پروژه ها</a>
                    </div>
                    </p>
                    <div class='d-flex justify-content-between align-items-center'>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


@endsection
