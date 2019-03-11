@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="container-fluid">
        <div class="singlecontent">
            <div class="sectionheader">
                <h2>{!! $about->title_en !!}</h2>
            </div>
            <p>
                {!! $about->body_en !!}
            </p>
        </div>
    </div>
@endsection

@section('title', $about->title_en)
