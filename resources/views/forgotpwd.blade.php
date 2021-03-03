<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password | StudPort</title>
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
    h5{font-size: 24px !important;
    }
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
       background-color: #2C504F !important;
       border:none !important;
        border-bottom: 1px solid #fff !important;
        padding: 5px 10px !important;
        outline: none !important;
        border-radius: 0 !important;
        color: #fff !important;
    }
    [placeholder]:focus::-webkit-input-placeholder {
    transition: text-indent 0.4s 0.4s ease; 
    text-indent: -100%;
    opacity: 1;
    }
    body{
        background-color: #2C504F;
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
        right: 0;}
</style>

<body>
    <div class="container">
        <!-- Content Section Start -->
        <div class="row">
            <div class="col-sm-12" >
                <div class="box" >
                    <div class="box1">
                        <div class="text-center">
                            <img src="{{asset('images/logo.png')}}" style="padding-bottom: 30px;">
                            <h5 style="color: #fff; font-size: 40px; font-weight: 200; padding-bottom: 10px;">Forgot Password</h5>
                            <p class="text-white">Enter your email to reset your password</p>
                            <!-- Notifications -->
                            <div id="notific">
                                @include('notifications')
                            </div>
                                 <form action="{{ route('forgot-password') }}" class="omb_loginForm" autocomplete="off" method="POST">
                                {!! Form::token() !!}
                              <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                    <label class="sr-only">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                           value="{!! old('email') !!}" style="font-size: 150%; font-weight: 100 !important;" >
                                    <span class="help-block"> {{ $errors->first('email', ':message') }} </span>
                                </div>

                                <input type="submit" class="btn btn-block btn-primary" value="Reset Your Password" style="font-size: 150%;">
                                <span class="text-white">Back to login page?</span> <a href="{{ route('login') }}" class="text-info">click here</a>
                            </form>
                            <br />
                        </div>

                    </div>
                </div>
                <br>
                <div class="text-center text-white">&copy;<?php echo date('Y'); ?> StudPort. All Rights Reserved</div>
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
