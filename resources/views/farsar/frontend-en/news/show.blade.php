@extends(env('THEME_NAME').'.frontend-en.layouts.frontend')
@section('content')

    <div class="container">
        <div class="innerarea sidebyside">
            <div class="singleside">
                <h4>Project Related</h4>

                @foreach($projects as $project)


                    <div class="projectitem">
                        <h3>{{ $project->title }}</h3>
                        <div class="projectitemimg">
                            <img src="{{ json_decode($project->imageUrls)->img1 }}" draggable="false">
                            <a href="{{ route('frontend.project.show', ['slug' => $project->slug]) }}" class="getmore">Get Order</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="singlearea">
                <h4>{{ $news->title }}</h4>
                {{--<div class="gallerysliderarea owl-carousel">--}}
                        {{--<div class="galleryslider active">--}}
                            {{--<img src="{{ $news->imageUrl }}">--}}
                        {{--</div>--}}
                {{--</div>--}}

                <img src="{{ $news->imageUrl }}">


                <div class="content">
                    <p>
                        {{ $news->body }}
                    </p>
                </div>


            </div>
        </div>
    </div>

@endsection


@section('title')
    News
@endsection
