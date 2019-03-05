@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
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
@endsection
