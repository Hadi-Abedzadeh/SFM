@extends(env('THEME_NAME').'.layouts.frontend')

@section('title', 'Tiket')

@section('content')
    <div class="container-fluid">
        <div class="sectionheader">
            <h2><span>Tiketing</span> Form</h2>
            <h3>HOW TELL TO US</h3>
        </div>


        <form action="{{ route('support') }}" method="post" class="">
            @csrf
            <input type="hidden" name="code" value="{{ strtoupper(str_random(22)) }}">

            <div class="row">
                <input type="text" name="name" placeholder="WHAT'S YOUR NAME?">
                <input type="text" name="tel" placeholder="WHAT'S YOUR PHONE NUMBER?">
                <input type="email" name="email" placeholder="WHAT'S YOUR PHONE EMAIL?">
            </div>
            <textarea name="message" placeholder="WHAT'S YOUR PHONE NUMBER?"></textarea>
            <button>SEND</button>
        </form>
    </div>

@endsection
