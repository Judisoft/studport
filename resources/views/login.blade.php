<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Welcome to StudPort</title>
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
    <!--end of page level css-->
</head>


<body>
    <div class="container">
        <!--Content Section Start -->
        <div class="row">
            <div class="box">
                <div class="box1">
                    <div class="text-center">
                        <h3 class="text-primary" style="font-family:  chalkduster;"><i class="fa fa-chalkboard-teacher"></i>StudPort</h3>
                        <hr>
                    <h3 class="text-primary"><i class="far fa-user"> </i> Sign In</h3>
                    <p class="text-warning">Fill in your StudPort login credentials</p>
                    <!-- Notifications -->
                    <div id="notific">
                        @include('notifications')
                    </div>
                    <form action="{{ route('login') }}" class="omb_loginForm" autocomplete="off" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group {{ $errors->first('email', 'has-error') }}">
                            <label class="sr-only">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                value="{!! old('email') !!}" >
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->first('password', 'has-error') }}">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Password
                            </label>

                        </div>
                        <input type="submit" class="btn btn-block btn-primary" value="Log In">
                        Don't have an account? <a href="{{ route('register') }}"><strong> Sign Up</strong></a>
                    </form>
                    <br />
                    <div class="bg-transparent">
                        <a href="{{ route('forgot-password') }}">Forgot Password?</a>
                    </div>
                </div>

            </div>
            <div style="text-align:center;">&copy;<?php echo date('Y'); ?> <a href="http://studport.cm/" style="text-decoration:none;">StudPort</a></div>
        </div>
        <!-- //Content Section End -->
    </div>
    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/login_custom.js') }}"></script>
    <!--global js end-->
</body>

</html>
