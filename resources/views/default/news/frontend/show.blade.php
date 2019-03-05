@extends('default.layouts.frontend')

@section('content')
    {{ $post->title }}
    <br>
    {!! $post->body !!}
    <br>
    @foreach($post->comments()->get() as $comment)
        @if($comment->active == 1)
            <hr>
            Name: {{ $comment->client_name  }}<br>
            Email: {{ $comment->client_email }} <br>
            Body: {!! $comment->body  !!} <br>
        @endif
    @endforeach
    <hr>

    <div class="container">
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
                <label for="pwd">Comment:</label>
                <div class="form-group">
                    <label for="body">body</label>
                    <textarea class="form-control" name="body" id="body" placeholder="body"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="/assets/ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('body' ,{

            customConfig: ''
        });
    </script>
@endsection
