<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            Sign Up | Welcome to StudPort
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" href="{{asset('css/style-starter.css')}}">
     <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}"/>
         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <!--end of global css-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- page level css-->
    
@yield('header_styles')
<!--end of page level css-->
</head>
<style>
  .full-width {
    width: 100% !important;
    min-width: 100% !important;
    max-width: 100% !important;
}
    .btn-nav{
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border:none !important;
    }
     .btn-outline-primary-nav:hover {
    color: #fff;
    background-color: #2C504F;
    border-color: #28a745; }

    [placeholder]:focus::-webkit-input-placeholder {
    transition: text-indent 0.4s 0.4s ease; 
    text-indent: -200%;
    opacity: 1;
    }
  .card-1 {
  box-shadow: 0 10px 20px #D5DDE6, 0 5px 5px #D5DDE6;
} 
@media(min-width: 576px){
.box {
  min-width: 90%;
  margin: auto;
  align-items: left;
  border-radius: 5px;
    
}
}
@media(min-width: 768px){
.box {
  max-width: 50%;
  margin: auto;
  align-items: left;
  border-radius: 5px;
    
}
}
@media(min-width: 992px){
.box {
  max-width: 50%;
  margin: auto;
  align-items: left;
  border-radius: 5px;
    
}
}
@media(min-width: 1200px){
.box {
  max-width: 50%;
  margin: auto;
  align-items: left;
  border-radius: 5px;
    
}
}


.box1 {
  padding: 20px 20px;
  background-color: #D5DDE6;
  border-radius: 5px;
}

.help-block {
  color: #a94442 !important;
  font-size: 12px;
}

.has-error .form-control {
  border-color: #a94442;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.has-error .form-control:focus {
  border-color: #843534;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}

.social {
  position: relative;
  padding-left: 44px;
  text-align: left;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.social i {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 32px;
  line-height: 34px;
  text-align: center;
  border-right: 1px solid rgba(0, 0, 0, 0.2);
}

.social:hover {
  color: white;
}
h4{
  font-weight: 400 !important;
}

</style>
<body>
  <section class="w3l-intro" id="intro" style="margin-top: 0 !important">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section">
          <div class="section-width">
            <div class="box">
                <div class="box1 br-5 shadow">
                    <div class="text-center">
                        <span class="fa fa-user-circle fa-5x px-2 py-2 text-dark"></span>
                        <h4>SIGN IN</h4>
                    </div>
                    <!-- Notifications -->
                    <div id="notific">
                        @include('notifications')
                    </div>
                    <form action="{{ route('login') }}" class="omb_loginForm" autocomplete="off" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group {{ $errors->first('email', 'has-error') }}">
                            <label class="sr-only">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                value="{!! old('email') !!}">
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->first('password', 'has-error') }}">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>

                        </div>
                        <input type="submit" class="btn btn-block btn-secondary py-2 mb-3" value="Log In">
                        Don't have an account? <a href="{{ route('register') }}"><strong> Sign Up</strong></a>
                    </form>
                    <br />
                    <div class="bg-transparent animation flipInX">
                        <a href="{{ route('forgot-password') }}">Forgot Password?</a>
                    </div>
                </div>
              <div class="text-center text-dark"><small> &copy;<?php echo date('Y'); ?> StudPort. All Rights Reserved</small></div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>