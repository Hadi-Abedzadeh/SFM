@extends('default.layouts.frontend')

@section('content')
    <div class="container-fluid">
        <h2>News</h2>

    @foreach($news as $report)
        <div class='col-lg-3'>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <h3>
                        <a href="{{ route('frontend.news.index.show', ['slug' => $report->slug ]) }}">{{ $report->title }}</a>
                    </h3>
                </div>
                <div class='panel-body'>
                    {!! str_limit(strip_tags($report->body), 70)  !!}
                    {!! (strlen(strip_tags($report->body)) > 70) ? ' ...... ' : '' !!}
                </div>
                <div class='panel-footer'>
                    <a href="{{route('frontend.product.show', ['id' => $report->id])}}">See more</a>
                </div>
            </div>
        </div>

    @endforeach

    {{ $news->links() }}
    </div>

@endsection
