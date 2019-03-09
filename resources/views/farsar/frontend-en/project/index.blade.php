@extends(env('THEME_NAME').'.frontend-en.layouts.frontend')
@section('content')
    <div class="innerarea">
    <div class="projectlist">
        @foreach($projects as $project)
            <div class="fullproject">
            <div class="fullprojectimg">
                <img src="{{json_decode($project->imageUrls)->img1}}">
                <a href="{{ route('frontend.project.show', ['slug' => $project->slug]) }}" class="more">See More</a>
            </div>
            <div class="fullprojectside">
                <h3>{{ $project->title }}</h3>
                <div class="fullprojectconent">
                    <p>
                        {{ substr(strip_tags($project->body), 0, 400) }}
                        {{ strlen(strip_tags($project->body)) > 50 ? "..." : "" }}

                    </p>
                </div>
            </div>
        </div>
        @endforeach
            {{ $projects->links() }}

            {{--<div class="pagination">--}}
            {{--<a href="#">Back</a>--}}
            {{--<a href="#">1</a>--}}
            {{--<a href="#" class="active">2</a>--}}
            {{--<a href="#">3</a>--}}
            {{--<a href="#">Next</a>--}}
        {{--</div>--}}
    </div>
</div>

    @endsection


@section('title')
    Projects
@endsection
