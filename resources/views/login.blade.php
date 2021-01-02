<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In | Welcome to StudPort</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/iCheck/css/all.css')}}" />
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/buttons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/login.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/custom1.css') }}">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nixie+One&family=Playfair+Display+SC:wght@700&family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
    <!--end of page level css-->
</head>
<style>

    .text-left1{
        font-family: 'Quicksand', sans-serif;
        text-align: center;
        position: relative;
        top: 30%;
        left: 60%;
        transform: translate(-50%, -50%);
    }
    input{
       font-size: 100%;
    }
    body{
        background-color: #eee;
        margin-top: 0;
    }
    .box h2 {
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }
    .box h2:before, .box h2:after {
        content: "";
        height: 1px;
        width: 30%;
        background: #d4d4d4;
        position: absolute;
        top: 50%;
        z-index: 2;
    }
    .box h2:before {
        left: 0;
    }
    .box h2:after {
        right: 0;
</style>

<body>
    <div class="container">
        <!--Content Section Start -->
        <div class="row">
            <div class="col-sm-12" >
                <div class="box" >
                    <div class="box1">
                        <div class="text-center">
                            <img src="{{asset('images/logo.png')}}">
                            <h2 style="color: #418bca; font-size: 40px;"> Sign In</h2>
                            <p class="text-danger">Fill in your StudPort login credentials</p>
                            <!-- Notifications -->
                            <div id="notific">
                                @include('notifications')
                            </div>
                            <form action="{{ route('login') }}" class="omb_loginForm" autocomplete="off" method="POST">
                                <input type="hidden"  name="_token" value="{{ csrf_token() }}">
                                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                    <label class="sr-only">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                           value="{!! old('email') !!}" style="font-size: 200%;" >
                                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                </div>
                                <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                    <label class="sr-only">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" style="font-size: 200%;" >
                                </div>
                                <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember Password
                                    </label>

                                </div>
                                <input type="submit" class="btn btn-block btn-primary" value="Sign In" style="font-size: 200%;">
                                Don't have an account? <a href="{{ route('register') }}"><strong> Sign Up</strong></a>
                            </form>
                            <br />
                            <div class="bg-transparent">
                                <a href="{{ route('forgot-password') }}" style="text-decoration:none; font-weight: bold;" >Forgot Password?</a>
                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <div class="text-center">&copy;<?php echo date('Y'); ?>  <a href="{{ route('home') }}" style="text-decoration:none; font-weight: bold;"> StudPort.</a> All Rights Reserved</div>
            </div>

        <!-- //Content Section End -->
    </div>
    <!--global js starts-->

    </div>
</body>
<script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript">
</script>
<script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/login_custom.js') }}"></script>
<!--global js end-->
</html>
