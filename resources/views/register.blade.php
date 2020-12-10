<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Welcome to StudPort</title>
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
    <!--end of page level css-->
</head>

<body>
    <div class="container">
        <!--Content Section Start -->
        <div class="row">
            <div class="box">
                <h3 class="text-primary" style="font-family:  chalkduster;"><i class="fa fa-chalkboard-teacher"></i>StudPort</h3>
                <hr>
                <h3 class="text-primary"><i class="far fa-user"> </i> Sign Up</h3>
                <p class="text-warning">Fill the form bellow to sign up for a StudPort account</p>
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
                            placeholder="First Name" value="{!! old('first_name') !!}">
                        {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                        <label class="sr-only"> Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                            value="{!! old('last_name') !!}">
                        {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                    </div>
                    
                    <div class="form-group {{ $errors->first('email', 'has-error') }}">
                        <label class="sr-only"> Email</label>
                        <input type="email" class="form-control" id="Email" name="email" placeholder="Email"
                            value="{!! old('Email') !!}">
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->first('password', 'has-error') }}">
                        <label class="sr-only"> Password</label>
                        <input type="password" class="form-control" id="Password1" name="password"
                            placeholder="Password">
                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                        <label class="sr-only"> Confirm Password</label>
                        <input type="password" class="form-control" id="Password2" name="password_confirm"
                            placeholder="Confirm Password">
                        {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->first('institution', 'has-error') }}">
                        <label class="sr-only"> Institution</label>
                        <input type="text" class="form-control" id="institution" name="institution" placeholder="Institution"
                            value="{!! old('institution') !!}" >
                        {!! $errors->first('institution', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->first('department', 'has-error') }}">
                        <label class="sr-only"> Department</label>
                        <input type="text" class="form-control" id="department" name="department" placeholder="Department"
                            value="{!! old('department') !!}" >
                        {!! $errors->first('department', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{ $errors->first('level', 'has-error') }}">
                        <label class="sr-only"> Level</label>
                        <input type="text" class="form-control" id="level" name="level" placeholder="Level/Class"
                            value="{!! old('level') !!}">
                        {!! $errors->first('level', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group {{ $errors->first('gender', 'has-error') }}">
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
                        <label>
                            <input type="checkbox" name="subscribed"> I accept <a href="#"> Terms and Conditions</a>
                        </label>
                    </div>
                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                    <input type="submit" class="btn btn-block br-0 btn-primary my-2" value="Sign Up">
                    Already have an account? Please <a href="{{ route('login') }}"> Sign In</a>
                </form>
                <div style="text-align:center;">&copy;<?php echo date('Y'); ?> <a href="http://studport.cm/" style="text-decoration:none;">StudPort</a></div>
                </div>
            </div>
        </div>

        <!-- //Content Section End -->
    </div>
    <!--global js starts-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    {{--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/register_custom.js') }}"></script>
    <!--global js end-->
</body>

</html>
