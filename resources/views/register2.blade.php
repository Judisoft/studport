<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up | Welcome to StudPort</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/iCheck/css/all.css')}}" />
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/register.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/custom1.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nixie+One&family=Playfair+Display+SC:wght@700&family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
    <!--end of page level css-->
</head>

<style>
    body{
        background: #2C504F;
        margin-top: 0;
        -webkit-font-smoothing: antialiased;
    }
     .text-left1{
         text-align: center;
         position: relative;
         top: 30%;
         left: 60%;
         transform: translate(-50%, -50%);
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
</style>

<body>
    <div class="container">
    <div class="row">
                <div class="box">
                    <img src="{{asset('images/logo.png')}}" style="padding-bottom: 30px;">
                    <h3 style="color: #fff; font-size: 40px; font-weight: 200; padding-bottom: 30px;"> Sign Up</h3>
                    <!-- Notifications -->
                    <div id="notific">
                        @include('notifications')
                    </div>
                    <form action="{{ route('register') }}" method="POST" id="reg_form">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                            <label class="sr-only"> First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                   placeholder="First Name" value="{!! old('first_name') !!}" style="font-size: 150%; font-weight: 100 !important;">
                            {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                            <label class="sr-only"> Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                                   value="{!! old('last_name') !!}" style="font-size: 150%; font-weight: 100 !important;">
                            {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->first('email', 'has-error') }}">
                            <label class="sr-only"> Email</label>
                            <input type="email" class="form-control" id="Email" name="email" placeholder="Email"
                                   value="{!! old('Email') !!}" style="font-size: 150%; font-weight: 100 !important;">
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->first('password', 'has-error') }}">
                            <label class="sr-only"> Password</label>
                            <input type="password" class="form-control" id="Password1" name="password"
                                   placeholder="Password" style="font-size: 150%; font-weight: 100 !important;">
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                            <label class="sr-only"> Confirm Password</label>
                            <input type="password" class="form-control" id="Password2" name="password_confirm"
                                   placeholder="Confirm Password" style="font-size: 150%; font-weight: 100 !important;">
                            {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->first('institution', 'has-error') }}">
                            <label class="sr-only"> Institution</label>
                            <input type="text" class="form-control" id="institution" name="institution" placeholder="Institution"
                                   value="{!! old('institution') !!}" style="font-size: 150%; font-weight: 100 !important;" >
                            {!! $errors->first('institution', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->first('department', 'has-error') }}">
                            <label class="sr-only"> Department</label>
                            <input type="text" class="form-control" id="department" name="department" placeholder="Department"
                                   value="{!! old('department') !!}" style="font-size: 150%; font-weight: 100 !important;">
                            {!! $errors->first('department', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->first('level', 'has-error') }}">
                            <label class="sr-only"> Level</label>
                            <input type="number" class="form-control" id="level" name="level" min = '1' max ='5' placeholder="Level/Class"
                                   value="{!! old('level') !!}" style="font-size: 150%; font-weight: 100 !important;">
                            {!! $errors->first('level', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group {{ $errors->first('gender', 'has-error') }}" style="color: #fff;">
                            Gender
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio1" value="male"> Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="inlineRadio2" value="female"> Female
                            </label>
                            {!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="checkbox">
                            <label class="form-check-label">
                                <input type="checkbox" required="required"><span style="color: #fff;"> I accept the </span><a href="{{route('privacy')}}" style="color: #fff;"><b>Terms and Conditions</b></a>
                            </label>
                        </div>
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                        <div style="padding-top: 30px;"></div>
                        <input type="submit" class="btn btn-block btn-primary" value="Sign Up" style="font-size: 200%;">
                        <p style="color: #D5DDE6;"><b>Already have an account? Please </b><a href="{{ route('login') }}" style="text-decoration:none;"><b> Sign In</b></a></p>
                    </form>
                </div>
        </div>
    </div>
        <!-- //Content Section End -->
    <br>
                <div class="text-center text-white"> &copy;<?php echo date('Y'); ?> StudPort. All Rights Reserved</div>
    </div>

</body>
<!--global js starts-->
<script src='https://www.google.com/recaptcha/api.js'></script>
{{--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript">
</script>
<script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/register_custom.js') }}"></script>
<!--global js end-->

</html>
