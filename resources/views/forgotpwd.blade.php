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
.full-width{
  min-width: 100%;
  max-width: 100%;
  padding-left: 0 !important;
  padding-right: 0 !important;
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
.theme-button {
  transition: 0.3s ease-out;
  display: inline-block;
  line-height: 42px;
  font-weight: 700;
  font-size: 14px;
  margin: 0px;
  padding: 0px 30px;
  background-color: #063755;
  color: #fff;
  text-transform: uppercase; }
    
.theme-button a:hover{
    color: #fff !important;
}

@media screen and (max-width: 384px) {
  .theme-button {
    line-height: 44px;
    padding: 0px 20px; } }

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
  border: 1px solid #CCD1D1;
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
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #01182F !important;">
    <a class="navbar-brand ml-5" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="" /></a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item ml-auto text-primary px-2">Tips to Secure Password?</li>
    </ul>
</nav>
  <section class="w3l-intro" id="intro" style="margin-top: 0 !important">
    <div class="new-block top-bottom">
      <div class="container full-width">
        <div class="middle-section">
                    <!-- Notifications -->
                    <div id="notific">
                        @include('notifications')
                    </div>
          <div class="section-width">
            <div class="box">
                <div class="box1 br-5 shadow">
                    <div class="text-center mb-3">
                         <span class="fa fa-key fa-3x px-2 py-2 float-right" style="opacity: 0.1;"></span>
                        <h4 class="pt-3 text-favorite float-left"><b>FORGOT PASSWORD</b></h4>
                    </div>
                     <form action="{{ route('forgot-password') }}" class="omb_loginForm" autocomplete="off" method="POST">
                                {!! Form::token() !!}
                              <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                    <label class="sr-only">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                           value="{!! old('email') !!}">
                                    <span class="help-block"> {{ $errors->first('email', ':message') }} </span>
                                </div>

                                <input type="submit" class="btn btn-block theme-button" value="Reset Your Password">
                            </form>
                            <br />
                                <span class="text-dark pt-2">Back to login page?</span> <a href="{{ route('login') }}">click here</a>
                    <br />
                </div>
              <div class="text-center text-dark"><small> &copy;<?php echo date('Y'); ?> StudPort. All Rights Reserved</small></div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>