@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
<div class="container-fluid">
        <div class="sectionheader">
            <h2>OUR <span>FAQ</span></h2>
            <h3>LIST OF FREQUENTLY QUESTIONS</h3>
        </div>
		<div class="faqcards">
    @foreach($faq as $q)
        <div class="faqcard">
            <div class="faqcardheader">
			<div class="faqcardnumber">{{ $loop->iteration }}</div>
			<div class="faqcardquestion">{{ $q->question }}</div>
			<div class="faqcardplus"></div>
			</div>
            <div class="faqcardanswer">{{$q->answer}}</div>
        </div>
    @endforeach
</div>
</div>
@endsection


@section('title')
	FAQ
@endsection