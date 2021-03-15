<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            Sign Up | Welcome To StudPort
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
                        <h4>CREATE ACCOUNT</h4>
                    </div>
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
                            value="{!! old('institution') !!}">
                        {!! $errors->first('institution', '<span class="help-block">:message</span>') !!}
                    </div>
                     <div class="form-group {{ $errors->first('department', 'has-error') }}">
                        <label class="sr-only"> Department</label>
                        <input type="text" class="form-control" id="department" name="department" placeholder="Department"
                            value="{!! old('department') !!}">
                        {!! $errors->first('department', '<span class="help-block">:message</span>') !!}
                    </div>
                     <div class="form-group {{ $errors->first('level', 'has-error') }}">
                        <label class="sr-only"> Level</label>
                        <input type="text" class="form-control" id="level" name="level" placeholder="Level"
                            value="{!! old('level') !!}">
                        {!! $errors->first('level', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group {{ $errors->first('gender', 'has-error') }}">
                        <label class="sr-only">Gender</label>
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
                    <button type="submit" class="btn btn-block br-0 btn-secondary my-2" style="border: none !important;">Sign Up</button>
                    Already have an account? Please <a href="{{ route('login') }}"> Log In</a>
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