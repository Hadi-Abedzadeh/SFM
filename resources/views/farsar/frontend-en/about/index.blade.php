@extends(env('THEME_NAME').'.frontend-en.layouts.frontend')
@section('content')

<div class="container">
    <div class="about">
        <h3>About</h3>
        <p>
            {{ $about->body }}

        </p>
    </div>
</div>

    @endsection


@section('title')
    About
@endsection
