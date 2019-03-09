@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="div-list-project">
        <div class="container">
            <section class="sect-slider-content-project sect-slider-content-any-blog">
                <header>
                    <h2 class="c-h2">
                        <em class="f-c-b">{{ $news->title }}</em>
                    </h2>
                </header>
                <div class="row p15">
                    <div class="col-md-24">
                        <article class="art-content-any-blog">
                            <figure>
                                <img class="img-header-any-blog" src="{{ $news->imageUrl }}" alt="" title="">
                                <img class="svg-ang-blog" src="/{{env('THEME_NAME')}}/assets/images/sample/Anyblog.svg" alt="" title="">
                            </figure>
                            <div class="div-content-main-any-blog">
                                {!! $news->body !!}
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('title')
    اخبار
@endsection
