@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')
    <main id="faq-page">
        <div class="container">
            <section class="faq-section">
                <div class="title">
                    <h2><span>پرسش</span> و <span>پاسخ</span></h2>
                    <span>سوالات متداول</span>
                </div>
                <div class="content row">

                    @foreach($faq as $q)
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-24">
                            <div class="item">
                                <div class="number"><span>{{ $loop->iteration  }}</span></div>
                                <div class="question"><h5>{{ $q->question }}</h5>
                                </div>
                                <div class="answer"><p>
                                        {{$q->answer}}
                                    </p></div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>
        </div>
    </main>
@endsection

@section('title')
    پرسش و پاسخ
@endsection
