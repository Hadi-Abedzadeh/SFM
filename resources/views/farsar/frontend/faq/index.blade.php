@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="div-list-project">
        <div class="container">
            <section class="sect-slider-content-project">
                <header>
                    <h2 class="c-h2">
                        سوالات <em class="f-c-b">متداول</em>
                    </h2>
                </header>
                <div class="row p15">
                    @foreach($faq as $q)
                        <div class="col-md-12">
                            <article class="art-content-faq">
                                <header>
                                <span class="bdi-bg-c">
                                    <i class="num">{{ $loop->iteration  }}</i>
                                    <i class="mi"></i>
                                </span>
                                    <h3 class="c-h2">{{ $q->question }}</h3>
                                </header>
                                <p class="p-b-c">{{$q->answer}}</p>
                            </article>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

@endsection

@section('title')
    پرسش و پاسخ
@endsection
