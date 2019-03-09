@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="div-list-project">
        <div class="container">
            <section class="sect-slider-content-project sect-slider-content-any-blog">
                <div class="row p15">
                    <div class="col-md-24">
                        <article class="art-content-about">
                            <div class="div-content-about">
                                <p class="c-p">
                                    {!!  $contact->etc !!}
                                    {!!  $contact->social_media !!}
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('title')
تماس با ما
@endsection
