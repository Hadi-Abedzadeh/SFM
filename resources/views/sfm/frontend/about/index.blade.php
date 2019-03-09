@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="container-fluid">
        <div class="singlecontent">
            <div class="sectionheader">
                <h2><span>ABOUT</span> US</h2>
                <h3>WHO WE ARE?</h3>
            </div>
            <p>
                {!! $about->body !!}
            </p>
        </div>
    </div>
@endsection


@section('title')
	About
@endsection