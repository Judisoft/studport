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
            width: 300px;
            padding: 10px;
            text-transform: uppercase;
            border-radius: 2px;
            text-align: center;
        }
        .form-wizard-next-btn:hover{
            color: #fff;
            background-color: #A3060F !important;
            border: #A3060F !important;
            animation:  .3s ease-in;
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
        small{
        color: var(--danger);
        font-weight: 500;
        }
        .support p{
        font-weight: 500 !important;
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
        @media(max-width: 768px){
            #leftItems {
                display: none;
            }
        }
        @media(max-width: 768px){
            #rightItems {
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
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 col-12" id="leftItems">
                    <div class="d-flex flex-column mt-3">
                        <div class="d-flex flex-row mb-2">
                            <div class="p-2">
                                <img class="img-fluid" src="{{asset('images/feature/f1.svg')}}" />
                            </div>
                            <div class="p-2">
                                <h5>Be Connected!</h5>
                                <p>Connect with Teachers, students, and institutions across and beyond your local campus.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-2">
                            <div class="p-2">
                                <img class="img-fluid" src="{{asset('images/feature/f2.svg')}}" />
                            </div>
                            <div class="p-2">
                                <h5>Insightful Discussions</h5>
                                <p>Ask questions, share ideas, projects & engage in interesting conversations and open discourses.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-2">
                            <div class="p-2">
                                <img class="img-fluid" src="{{asset('images/feature/f4.svg')}}" />
                            </div>
                            <div class="p-2">
                                <h5>Explore Opportunities</h5>
                                <p>Find one that is right for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 pl-4" id="rightItems">
                    <h1 class="p-2"> Sign Up</h1>
                    <div id="notific">
                        @include('notifications')
                    </div>
                    <form action="{{ route('register') }}" method="POST" id="reg_form">
                    <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="card card-body rounded">
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row mt-3">
                                <div class="col-lg-6 p-2">
                                    <label for="first_name">First Name <span class="text-danger">*</span></label> 
                                    <input type="text" class="form-control" name="first_name" placeholder="Enter your first name" value="{{ old('first_name') }}">
                                    <small>{{ $errors->first('first_name', 'Enter first name') }}</small>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <label for="last_name">Last Name <span class="text-danger">*</span></label> 
                                    <input type="text" class="form-control" name="last_name" placeholder="Enter your last name" value="{{ old('last_name') }}">
                                    <small>{{ $errors->first('last_name', 'Enter last name') }}</small>
                                </div>
                                </div>
                                <div class="p-2">
                                    <label for="email">Email <span class="text-danger">*</span></label> 
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{!! old('email') !!}">
                                    <small>{{ $errors->first('email', 'Enter email') }}</small>
                                </div>
                                <div class="p-2">
                                    <label for="password">Password <span class="text-danger">*</span></label> 
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                    <small>{{ $errors->first('password', 'Enter password') }}</small> 
                                </div>
                                <div class="p-2">
                                    <label for="password">Confirm Password <span class="text-danger">*</span></label> 
                                    <input type="password" class="form-control" name="password_confirm" placeholder="Confirm password">
                                    <small>{{ $errors->first('confirm_password', 'Confirm password') }}</small> 
                                </div>
                                <div class="d-flex flex-row">
                                <div class="p-2">
                                    <input type="checkbox" name="privacy" value="accepted" checked>
                                </div>
                                <div class="p-2 mt-2">
                                    <p><b>By clicking "CREATE MY ACCOUNT" you agree to our Consent Clause for <a href="#">Data Collection</a> and <a href="#">Privacy Policy.</a></b></p>
                                </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="col-lg-6 p-2">
                                        <input type="submit" class="form-wizard-next-btn btn-block rounded" value="CREATE MY ACCOUNT">
                                    </div>
                                </div>
                                <div class="support p-1 pl-2">
                                    <p>Already have a StudentPortal Account? <a href="{{route('login')}}" class="text-primary"><b>Sign In</b></a></p>
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