@extends(env('THEME_NAME').'.frontend-fa.layouts.frontend')

@section('title', 'تیکت پشتیبانی')

@section('content')
    <main id="contactUs-page">
        <div class="container">

            <section class="form-section">
                <div class="title">
                    <h2><span>فرم</span> پشتیبانی</h2>
                    <span>جهت پشتیبانی فرم زیر را تکمیل نمایید</span>
                </div>
                <div class="content">
                    @include('error')
                    <form action="{{ route('support') }}" method="post" class="">
                        <div class="top row">
                            @csrf
                            <input type="hidden" name="code" value="{{ strtoupper(str_random(22)) }}">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-24"><input type="text" name="name" placeholder="نام و نام خانوادگی خود را وارد کنید"></div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-24"><input type="text" name="tel" placeholder="شماره تماس خود را وارد کنید"></div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-24"><input type="email" name="email" placeholder="ایمیل خود را وارد کنید"></div>
                        </div>
                        <div class="center row">
                            <div class="col-xl-24 col-lg-24 col-md-24 col-sm-24"><textarea name="message" cols="30" rows="10" placeholder="پیام مورد نظر خود را بنویسید …"></textarea></div>
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
