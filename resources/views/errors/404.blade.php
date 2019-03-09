@extends(env('THEME_NAME').'.layouts.fullpage-frontend')
@section('content')

    @switch(set_lang())
        @case('en')
        <div class="notfound livebackground">
            <div class="container">
                <h1>404</h1>
                <h2>THIS IS NOT THE WEB PAGE YOU ARE LOOKING FOR</h2>
            </div>
        </div>
        @break
        @case('fa')
404444
        @break

    @endswitch
    @endsection
