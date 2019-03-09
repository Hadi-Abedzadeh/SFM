@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')
    <main id="catalog-page">
    <div class="container">
        <section class="catalog-section">
            <div class="title">
                <h2><span>کاتالوگ</span> ها</h2>
                <span>دانلود کاتالوگ محصولات</span>
            </div>
            <div class="content">
                <div class="row">
					@for($i=0;$i<10;$i++)
					<div class="col-xl-8 col-lg-8 col-md-12 col-sm-24">
                        <a href="#">
                            <div class="item">
                                <div class="download icon"></div>
                                <div class="download text"><h5>کاتالوگ شماره یک </h5>
                                    <span>توضیحات مربوط به این کاتالوگ</span></div>
                                <div class="download date"><span>۳۱</span><span>شهریور</span></div>
                            </div>
                        </a>
                    </div>
					@endfor
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection


@section('title')
    گاتالوگ
@endsection
