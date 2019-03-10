@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('title', 'خوش آمدید')

@section('content')

    <div class="intro noselect">
        <div class="container">
            <a href="/brand/luxtai" class="introbox"><img src="/{{env('THEME_NAME_FA')}}/assets/images/luxtai.png" draggable="false"></a>
            <a href="/brand/komtai" class="introbox"><img src="/{{env('THEME_NAME_FA')}}/assets/images/komtai.png" draggable="false"></a>
            <a href="/brand/expanse" class="introbox"><img src="/{{env('THEME_NAME_FA')}}/assets/images/expanse.png" draggable="false"></a>
            <div class="introbox oembox">
                <div class="indexuner"><h2>OEM</h2>
                    <h3>ORIGINAL <span>EQUIPMENT</span> MANUFACTURER</h3></div>
            </div>
        </div>
    </div>
@endsection
