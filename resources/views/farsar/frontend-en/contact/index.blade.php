@extends(env('THEME_NAME').'.frontend-en.layouts.frontend')
@section('content')
<div class="section footer">
    <div class="footerheader fullversion">
        <div class="footerform">
            <div class="container">
                <div class="form">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <textarea placeholder="Message..."></textarea>
                    <button>Send</button>
                </div>
            </div>
        </div>
        <div class="footeraddress">
            <div class="container">
                <div class="footeraddresstab"><div class="icon map"></div><p>Unit. 141, Fl. 14, Sadaf Tower.<br/>Sheikh Bahaee Sq. Tehran, IRAN.</p></div>
                <div class="footeraddresstab"><div class="icon phone"></div><p>+982188211110</p></div>
                <div class="footeraddresstab"><div class="icon fax"></div><p>+982188211110</p></div>
                <div class="footeraddresstab"><div class="icon email"></div><p>info@cafelead.agency</p></div>
            </div>
            <div class="socialmedias">
                <h5>Follow Us</h5>
                <a href="#" class="icon googleplus"></a>
                <a href="#" class="icon telegram"></a>
                <a href="#" class="icon twitter"></a>
                <a href="#" class="icon instagram"></a>
            </div>
        </div>
        <div class="footermap"></div>
    </div>
</div>

    @endsection


@section('title')
    Contact
@endsection
