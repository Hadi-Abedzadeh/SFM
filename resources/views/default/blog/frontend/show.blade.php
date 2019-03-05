@extends('default.layouts.frontend')

@section('content')
    <div class="container">
        <div class="well ">
            @if(file_exists(($post->imageUrl)))
                <img src="/{{ $post->imageUrl }}"
                     style="width: 100%; height: 300px; border-radius: 2px">
            @else
                <img src="/uploads/no-image.png" style="width: 100%; height: 300px; border-radius: 2px">
            @endif
            <br>

            <h2><a href="{{ route('frontend.blog.index') .'/'.$post->slug }}">{{ $post->title }}</a></h2>
            <br>
            {!! str_limit(strip_tags($post->body), 300)  !!}
            {!! (strlen(strip_tags($post->body)) > 300) ? ' ...... ' : '' !!}
            <br>
            <hr>

            @if(count($post->categories()->get()))
                <ul>Category:
                    @foreach($post->categories()->pluck('name', 'slug') as $slug => $category)
                        <li>
                            <a href="{{ route('category', ['categorySlug' => $slug]) }}"> {{ $category }} </a>
                        </li>
                    @endforeach
                </ul>
            @else
                {{ "No category" }}
            @endif
            <hr>
        </div>

        @foreach($post->comments()->get() as $comment)
            @if($comment->active == 1)
                <hr>
                Name:  {{ $comment->client_name  }}<br>
                Email: {{ $comment->client_email }} <br>
                Body:  {!! $comment->body  !!} <br>
            @endif
        @endforeach

        <hr>

        <div class="container">
            <div class="col-lg-6 well">
                <form action="{{ route('backend.blog.comments.store') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="post_id" value="{{ $post->id }}">

                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="client_name" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="name">Email: </label>
                        <input type="text" name="client_email" class="form-control" id="email">
                    </div>

                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea class="form-control" style="resize: vertical; min-height: 100px;" name="body" id="comment" placeholder="comment"></textarea>
                        </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


{{--            {!! ckeditor('blog', 'post-contents')  !!}--}}
        </div>
    </div>
@endsection
