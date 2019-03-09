@extends(env('THEME_NAME').'.frontend-en.layouts.frontend')
@section('content')

    <div class="container">
        <div class="innerarea sidebyside">
            <div class="singleside">
                <h4>Project Related</h4>

                @foreach($related_project as $project2)
                    <div class="projectitem">
                        <h3>{{ $project2->title }}</h3>
                        <div class="projectitemimg">
                            <img src="{{ json_decode($project2->imageUrls)->img1 }}" draggable="false">
                            <a href="{{ route('frontend.project.show', ['slug' => $project2->slug]) }}" class="getmore">Get
                                Order</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="singlearea">
                <h4>{{ $project->title }}</h4>
                <div class="gallerysliderarea owl-carousel">


                    @foreach(json_decode($project->imageUrls, true) as $img)
                        <div class="galleryslider active">
                            <img src="{{$img}}">
                        </div>
                    @endforeach
                </div>
                <div class="content">
                    <p>
                        {{ $project->body }}
                    </p>
                </div>


            </div>
        </div>
    </div>

@endsection


@section('title')
    Projects
@endsection
