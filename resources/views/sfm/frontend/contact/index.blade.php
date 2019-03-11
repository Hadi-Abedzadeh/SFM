@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')
    <div class="container-fluid">
        <div class="sectionheader">
            <h2><span>CONTACT</span> US</h2>
            <h3>HOW TELL TO US</h3>
        </div>
        <div class="row">
            <?php for($i = 0;$i < 3;$i++){ ?>
            <div class="contactbox">
                <h3>CONTACT TO OFFICE</h3>
                <p><span>ADDRESS:</span> Unit. 141, Fl. 14, Sadaf Tower.
                    Sheikh Bahaee Sq. Tehran, IRAN.<br><span>PHONE NUMBER:</span> +98 21 8821 1110</p>
            </div>
            <?php } ?>
        </div>
        <form>
            <div class="row">
                <input type="text" placeholder="WHAT'S YOUR NAME?">
                <input type="text" placeholder="WHAT'S YOUR PHONE NUMBER?">
                <input type="text" placeholder="WHAT'S YOUR PHONE EMAIL?">
            </div>
            <textarea placeholder="WHAT'S YOUR PHONE NUMBER?"></textarea>
            <button>SEND</button>
        </form>
    </div>


@endsection



@section('title', 'Contact')
