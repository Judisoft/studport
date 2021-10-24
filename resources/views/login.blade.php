<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>StudPort - Sign In</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/login.css') }}">
    <link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href="{{asset('plugins1/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins1/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
</head>
<style>
h5{
    font-weight: 600;
}
p{
    font-weight: 300 !important;
    font-size: 14px;
}
.img-fluid{
    width: 50px;
    height: 50px;
}
.image1{
    width: 300px;
    height: 300px;
}
.form-wizard-next-btn{
    background-color:#A3060F !important;
    border-color: #A3060F !important;
    color: #fff;
	font-size: 14px;
    display: inline-block;
    padding: 10px;
	text-transform: uppercase;
    border-radius: 2px;
    text-align: center;
  }

label{
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    color: #000 !important;
}
p{
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    color: #000;
    font-weight: 400;
 }
 input{
     height: 50px !important;
     border: 1px solid var(--dark) !important;
     border-radius: 10px !important;
 }
 input[type=submit]{
    background-color: var(--primary) !important;
    border-radius: 3px !important;
    font-weight: 700 !important;
 }
  input[type=submit]:hover{
    background-color: var(--primary) !important;
 }
 footer{
    text-align: center;
    position: fixed;
    width: 100%;
    bottom: 10px;
    left: 0;
    height: 20px;
 }
 .mt-100{
     margin-top: 100px;
 }
 .text-gray{
     color: #7B7E7C;
 }
 .support p{
     font-weight: 500 !important;
 }
 .pass{
     font-weight: 400;
     font-size: 14px;
 }
 h1{
     font-weight: 900 !important;
     font-size: 28px;
 }
@media(max-width: 768px){
    #leftItems {
        display: none;
    }
 }
 @media(max-width: 768px){
    #rightItems-100 {
        margin-top: 100px;
    }
 }

</style>
<body>
<nav class="navbar main-nav fixed-top navbar-expand-lg p-3 bg-white" style="overflow-x: hidden;">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/my_logo.png')}}" style="height: 60px;" alt="logo"></a>
  </div>
</nav> 
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-6 col-12" id="leftItems">
                <div class="d-flex flex-column mt-3">
                    <div class="p-2"><img src ="{{asset('images/login.svg')}}" /></div>
                    <div class="d-flex flex-row mb-2">
                        <div class="p-2">
                            <img class="img-fluid" src="{{asset('images/question1.png')}}" />
                        </div>
                        <div class="p-2 mt-2">
                            <h5 class="text-primary">Need Help?</h5>
                            <h6>Call Us: (+237) 652-459-059</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 pl-5" id="rightItems-100">
            <h1 class="p-2"> Sign In</h1>
                <div id="notific" class="mb-3">
                    @include('notifications')
                </div>
                <form action="{{ route('login') }}" class="omb_loginForm" autocomplete="off" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card card-body rounded">
                        <div class="d-flex flex-column">
                            <div class="p-2">
                                <label for="email">Email</label> 
                                <input type="email" class="form-control" name="email" placeholder="Enter email" value="{!! old('email') !!}">
                                <small>{{ $errors->first('email', 'Enter email') }}</small>
                            </div>
                            <div class="p-2">
                                <label for="password">Password </label>
                                <label class="float-right"><a href="{{route('forgot-password')}}" class="text-danger pass">Forgot password?</a></label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password">
                                <small>{{ $errors->first('password', 'Enter password') }}</small> 
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-lg-8 p-2 mt-3">
                                    <input type="submit" class="form-wizard-next-btn btn-block rounded" value="LOG ME IN">
                                </div>
                            </div>
                            <div class="support p-1 pl-2">
                                <p>Don't have a StudPort Account? <a href="{{route('register')}}" class="text-primary"><b>Sign Up</b></a></p>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <small class="text-gray">Copyright &copy; <?php echo date('Y') ?> All rights reserved</small>
    </footer>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
</body>
</html>