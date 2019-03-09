@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="div-list-project">
        <div class="container">
            <section class="sect-slider-content-project sect-slider-content-catalog">
                <header>
                    <h2 class="c-h2">
                        آگهی <em class="f-c-b">استخدام</em>
                    </h2>
                </header>

                <div class="div-content-career" itemscope itemtype="http://schema.org/options" data-tabindex="career">
                    <header class="tab-title header-career">
                        <ul>
                            <li data-tab="all" class="bg-li-career-before"><span class="c-h2">همه</span></li>
                            <li data-tab="2" class="bg-li-career-before"><span class="c-h2">برنامه نویسی</span></li>
                            <li data-tab="3" class="bg-li-career-before"><span class="c-h2">گرافیک</span></li>
                            <li data-tab="4" class="bg-li-career-before"><span class="c-h2">فروش</span></li>
                            <li data-tab="5" class="bg-li-career-before"><span class="c-h2">بازاریابی</span></li>
                            <li data-tab="6" class="bg-li-career-before"><span class="c-h2">مهندسی</span></li>
                        </ul>
                    </header>

                    @foreach($careers as $career)
                        <div class="row p15" data-tabc="{{ $career->part_id }}">
                            <div class="col-md-12">
                                <article class="art-content-career">
                                    <a href="javascript:void(0)" class="bdi-bg-c" title="واحد برنامه نویسی">
                                        {{ $career->unit }}
                                    </a>
                                    <header>
                                        <h3 class="c-h2">
                                            <a href="javascript:void(0)" title="">
                                                {{ $career->position }}
                                            </a>
                                        </h3>
                                        <ul>
                                            <li><span class="f-c-b">{{ $career->etc }}</span></li>
                                        </ul>
                                    </header>
                                </article>
                            </div>
                        </div>
                    @endforeach

                </div>

            </section>
        </div>
    </div>
@endsection

@section('title')
    استخدام
@endsection
