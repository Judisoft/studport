<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            Sign In - StudPort
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
  max-width: 90%;
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

.box1 {
  padding: 20px 20px;
  background-color: #fff;
  border-radius: 5px;
  border: 1px solid var(--gray);
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
.full-width{
  min-width: 100%;
  max-width: 100%;
  padding-left: 0 !important;
  padding-right: 0 !important;
}

</style>
<body>
<div class="container full-width">
 <nav class="navbar navbar-expand-lg navbar-light">
   
<div class="d-flex flex-row">
  <div class="p-2"> <a class="navbar-brand" href="{{route('home')}}">
      <img src="{{asset('images/studport.png')}}" title="StudPort"/>
      </a>
</div>
</div>    
</nav>
</div>
  <section class="w3l-intro" id="intro">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section">
         <!-- Notifications -->
                    <div id="notific">
                        @include('notifications')
                    </div>
          <div class="section-width">
            <div class="box">
                <div class="box1 rounded-0">
                    <div class="mt-auto">
                        <span class="fa fa-user-lock fa-4x px-2 py-2 float-right" style="opacity: 0.1;"></span>
                        <h4 class="pt-3 text-favorite float-left"><b>Sign In</b></h4>
                    </div>
                    <form action="{{ route('login') }}" class="omb_loginForm" autocomplete="off" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group {{ $errors->first('email', 'has-error') }}">
                            <label class="sr-only">Email</label>
                            <input type="email" class="form-control rounded-0" name="email" placeholder="Email"
                                value="{!! old('email') !!}">
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->first('password', 'has-error') }}">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control rounded-0" name="password" placeholder="Password">
                        </div>
                        <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>

                        </div>
                        <div class="d-flex mt-3"></div>
                        <input type="submit" class="btn btn-block btn-success theme-button rounded-0" value="Log In">
                    </form>
                    <br />
                    <div class="d-flex flex-row">
                      <div class="p-2"><a href="{{ route('forgot-password') }}"><small>Forgot Password?</small></a></div>
                      <div class="p-2"><small>Don't have an Account? </small></div>
                      <div class="p-2"><a  href="{{route('register')}}" ><small>Sign Up</small></a></div>
                    </div>
                </div>
              <div class="mt-5 text-center text-dark"><small> &copy;<?php echo date('Y'); ?> StudPort. All Rights Reserved</small></div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/607982e9f7ce1827093b17bf/1f3daepbo';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>