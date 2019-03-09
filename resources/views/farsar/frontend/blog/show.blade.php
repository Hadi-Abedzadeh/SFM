@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="div-list-project">
<div class="container">
    <section class="sect-slider-content-project sect-slider-content-any-blog">
        <header>
            <h2 class="c-h2">
                <em class="f-c-b">{{ $post->title }}</em>
            </h2>
        </header>
        <div class="row p15">
            <div class="col-md-24">
                <article class="art-content-any-blog">
                    <figure>
                        <img class="img-header-any-blog" src="{{ $post->imageUrl }}" alt=""
                             title="">
                        <img class="svg-ang-blog" src="/{{env('THEME_NAME')}}/assets/images/sample/Anyblog.svg" alt="" title="">
                    </figure>
                    <div class="div-content-main-any-blog">

                        {!! $post->body !!}

                    </div>
                    <div class="div-tag-any-blog">
                        <figure>
                            <img src="/{{env('THEME_NAME')}}/assets/images/sample/tag-any-blog.svg" alt="" title="">
                        </figure>
                        <header>
                            <h4 class="c-h2">برچسب ها :</h4>
                        </header>
                        <ul>
                            @foreach($post->categories as $name)
                                <li>
                                    <a href="{{ route('category', ['slug'=> $name->slug]) }}" class="f-c-b" title="{{$name->name}}">#{{ $name->name }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="sec-comments-any-blog">

        <article class="art-comments-any-blog">
            <header>
                <h4 class="c-h2">نظرات <em class="f-c-b">شما</em></h4>
            </header>
            <ul>
                @foreach($post->comments as $comment)
                <li>
                    <header>
                        <h5 class="f-c-b"> {{ $comment->client_name }} </h5>
                        <img src="/{{env('THEME_NAME')}}/assets/images/sample/stars.png" alt="" title="">
                        <em class="c-h2">{{ $comment->created_at }}</em>
                    </header>
                    <p class="c-p">
                        {{ $comment->body }}
                    </p>
                </li>
                @endforeach
            </ul>
        </article>
        <footer>
            <form action="" method="post">
                <input type="text" placeholder="نام و نام خانوادگی">
                <input type="text" placeholder="ایمیل شما">
                <button class="a-btn-bgc">ثبت نظر</button>
                <textarea name="" id="" cols="30" rows="5" placeholder="متن خود را وارد کنید …"></textarea>
            </form>
        </footer>
    </section>
</div>
</div>
    @endsection

@section('title')
    بلاگ
@endsection
