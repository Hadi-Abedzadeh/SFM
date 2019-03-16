<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/latest/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/latest/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/{{ env('BACKEND_THEME_NAME') }}/assets/css/animate.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/{{ env('BACKEND_THEME_NAME') }}/assets/css/style.css" type="text/css">
</head>
<body>
<div class="loginpage">
    <div class="container animated bounceInDown">
        <h3 class="animated slideInLeft">ورود به <span>سامانه مدیریت</span></h3>
        <form action="/login" method="post">
            {{ csrf_field() }}
        <input id="email" type="email" name="email" value="" required="required" autofocus="autofocus"  class="animated slideInUp" placeholder="نام کاربری خود را وارد کنید" />
        <input id="password" type="password" name="password" required="required" class="animated slideInUp" placeholder="رمز عبور خود را وارد کنید" />
        <div class="row noselect animated slideInUp">
            <div class="col">
                <label><input type="checkbox" name="remember" id="remember" /><span></span>من را به خاطر بسپار</label>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col"><a href="#">رمز عبور خود را فراموش کرده اید؟</a></div>
        </div>
        <button class="animated slideInUp" type="submit">ورود به سیستم</button>
        </form>
        <div class="cafelead animated slideInUp"></div>
    </div>
</div>
<!--script type="text/javascript" src="js/jquery.min.js"></script-->
<!--script type="text/javascript" src="js/plugin.js"></script-->
</body>
</html>