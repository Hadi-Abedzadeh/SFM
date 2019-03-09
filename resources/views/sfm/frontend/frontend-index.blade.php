@extends(env('THEME_NAME').'.layouts.fullpage-frontend')

@section('content')

        <div class="section header">
            {!! create_box_first(1) !!}
        </div>
        <div class="section products">
            <div class="sectionheader">
                <h2>OUR <span>PRODUCTS</span></h2>
                <h3>WHAT WE MAKE?</h3>
            </div>
            <div class="container">
                {{ create_box_second(2) }}
            </div>
            <a href="{{route('frontend.product.index')}}" class="seealllink"><span>SEE ALL PRODUCTS</span></a>
        </div>
        <div class="section news">
            <div class="sectionheader">
                <h2>OUR <span>NEWS</span></h2>
                <h3>WHAT’S UP?</h3>
            </div>
            <div class="container">
                @foreach($news as $report)
                    <div class='newsproduct'>
                        <div class='newsproductthumb'><img src='{{ $report->imageUrl}}' draggable='false'></div>
                        <div class='newsproductcontent'>
                            <h4>{{$report->title}}</h4>
                            <p>
                                {{ substr(strip_tags($report->body), 0, 200) }}
                                {{ strlen(strip_tags($report->body)) > 50 ? "..." : "" }}

                            </p>
                            <a href='{{ route('frontend.news.index.show', ['slug'=> $report->slug ])}}' class='newsproductmore'>VIEW MORE</a>
                        </div>
                    </div>
                @endforeach


            </div>
            <a href="{{ route('frontend.news.index') }}" class="seealllink"><span>SEE ALL NEWS</span></a>
        </div>
        <div class="section footer">
            <div class="sectionheader">
                <h2><span>CONTACT</span> US</h2>
                <h3>HOW TELL TO US?</h3>
            </div>
            <div class="footercontent">
                {!! \App\Contact::first()->etc !!}

            </div>

    </div>
@endsection


@section('title')
	SFM
@endsection