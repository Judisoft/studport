<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{ asset('vendors/iCheck/css/minimal/blue.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/pages/login2.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nixie+One&family=Playfair+Display+SC:wght@700&family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
    <!--end of page level css-->
    <!-- styles of the page ends-->
</head>
<style>

    body{
        background-color: #2C504F;
        font-family:"Quicksand", sans-serif;
    }
    .card{
        background: transparent !important;
        text-align: center;
        border: none !important;
        padding: 20px 20px;
        margin: 0 auto;
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
    
input[type=submit] {
  margin-bottom: 10px;
  border: none !important;
  background-color: #00bc8c !important;
  
}
input[type=submit]:hover{
    background-color: #ff8f07 !important;
}
.box{
    width: 400px;
    margin: auto;
    background: transparent !important;
    text-align: center;
    border: none !important;
    padding: 20px 20px;
    
   
}
</style>
<body>
 <div class="container">
        <!--Content Section Start -->
        <div class="row">
            <div class="col-sm-12" >
                <div class="box" >
             <img src="{{asset('images/logo.png')}}" style="padding-bottom: 30px;">
            <div>
                    <h3 style="color: #fff; font-size: 40px; font-weight: 200; padding-bottom: 30px;"> ADMIN LOGIN</h3>
                <div class="card-body">
                    <form action="{{ route('signin') }}" id="authentication" autocomplete="on" method="post" role="form">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group {{ $errors->first('email', 'has-error') }}">
                            <input class="form-control" placeholder="E-mail" name="email" type="text"
                                   value="{!! old('email') !!}"/>
                            <div class="help-block">
                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->first('password', 'has-error') }}">
                            <input class="form-control" placeholder="Password" name="password" type="password"/>
                            <div class="help-block">
                                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <input name="remember-me" type="checkbox" value="Remember Me" class="minimal-blue"/>
                                Remember Me
                            </label>
                        </div>

                        <input type="submit" value="Sign In" class="btn btn-primary text-white btn-block btn-lg" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- global js -->
<script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js-->
<script src="{{ asset('js/TweenLite.min.js') }}"></script>
<script src="{{ asset('vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/login2.js') }}" type="text/javascript"></script>
<!-- end of page level js-->
</body>
</html>
