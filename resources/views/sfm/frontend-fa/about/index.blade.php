@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')
    <main id="aboutUs-page">
        <div class="container">
            <section class="aboutUs-section">
                <div class="title">
                    <h2><span> {!! $about->title_fa !!} </span></h2>
                </div>
                <div class="content">
                    {!! $about->body_fa !!}
                </div>
            </section>
        </div>
    </main>
@endsection


@section('title' , $about->title_fa )
