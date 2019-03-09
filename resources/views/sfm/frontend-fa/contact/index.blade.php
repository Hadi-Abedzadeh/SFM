@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('content')
    <main id="contactUs-page">
    <div class="container">
        <section class="contactUs-section">
            <div class="title">
                <h2><span>تماس</span> با ما</h2>
                <span>چطور با ما تماس بگیرید؟</span>
            </div>
            <div class="content row">

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-24">
                    <div class="item">
                        <header><h3>ارتباط با کارخانه</h3></header>
                        <span class="hr"></span>
                        <div class="info">
                            <ul>
                                <li><span>آدرس :</span> {!! json_decode($contact->address)->addr1 !!}</li>
                                <li><span>تلفن :</span> {!! json_decode($contact->tel)->tel1 !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-24">
                    <div class="item">
                        <header><h3>ارتباط با کارخانه</h3></header>
                        <span class="hr"></span>
                        <div class="info">
                            <ul>
                                <li><span>آدرس :</span> {!! json_decode($contact->address)->addr2 !!}</li>
                                <li><span>تلفن :</span> {!! json_decode($contact->tel)->tel2 !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-24">
                    <div class="item">
                        <header><h3>ارتباط با کارخانه</h3></header>
                        <span class="hr"></span>
                        <div class="info">
                            <ul>
                                <li><span>آدرس :</span> {!! json_decode($contact->address)->addr3 !!}</li>
                                <li><span>تلفن :</span> {!! json_decode($contact->tel)->tel3 !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="form-section">
            <div class="title">
                <h2><span>فرم</span> تماس</h2>
                <span>برای ارتباط با ما فرم زیر را پر کنید</span>
            </div>
            <div class="content">
                <form action="#" class="">
                    <div class="top row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-24"><input type="text" name="name-info" placeholder="نام و نام خانوادگی خود را وارد کنید"></div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-24"><input type="text" name="number-info" placeholder="شماره تماس خود را وارد کنید"></div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-24"><input type="email" name="number-info" placeholder="ایمیل خود را وارد کنید"></div>
                    </div>
                    <div class="center row">
                        <div class="col-xl-24 col-lg-24 col-md-24 col-sm-24"><textarea name="message-info" cols="30" rows="10" placeholder="پیام مورد نظر خود را بنویسید …"></textarea></div>
                    </div>
                    <div class="down row">
                        <div class="col-xl-24 col-lg-24 col-md-24 col-sm-24"><button>ارسال فرم</button></div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    </main>
@endsection


@section('title')
    تماس با ما
@endsection
