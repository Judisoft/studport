@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/timeline1.css') }}">
<link href="{{ asset('vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />

<!--end of page level css-->
@stop

{{-- content --}}
<style>
    h1{
        font-family: "Open Sans", sans-Serif !important;
        font-weight: 700;
        font-size: 52px;
        line-height: 70px;
        letter-spacing: 1px;
        margin-bottom: 30px;
        color: #383838;
    }
    a,h2,h3,h5,h6,p,li,ul.welcome-area{
        font-family: "Open Sans", sans-serif !important;
        font-weight: normal;
    }
    .box-center{
        width: 100%;
        height: 400px;
        background-color: #418bca;
        border-left: 3px solid #0E2231 ;

    }
    .text-right1{
        font-family: "Open Sans", sans-serif;
        text-align: center;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .text-left1{
        font-family: "Open Sans", sans-serif;
        text-align: center;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .text-left2{
        font-family: "Open Sans", sans-serif;
        text-align: center;
        position: relative;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .welcome-area {
        width: 100%;
        height: 100vh;
        min-height: 793px;
        background-image: url("../images/slider-icon.png");
        background-repeat: no-repeat;
        background-position: right top;
    }

    .welcome-area .header-text .left-text {
        position: relative;
        align-self: center;
        margin-top: 35%;
        transform: perspective(1px) translateY(-30%) !important;
    }

    .welcome-area .header-text h1 {
        font-family: Sans-Serif !important;
        font-weight: 700;
        font-size: 52px;
        line-height: 70px;
        letter-spacing: 1px;
        margin-bottom: 30px;
        color: #383838;
    }

    .welcome-area .header-text h1 em {
        font-style: normal;
        font-weight: normal;
        color: #fba70b;
    }

    .welcome-area .header-text p {
        font-weight: 300;
        font-size: 18px;
        color: #7a7a7a;
        line-height: 30px;
        letter-spacing: 0.25px;
        margin-bottom: 40px;
        position: relative;
    }

    @media (max-width: 1420px) {
        .welcome-area .header-text {
            width: 70%;
            margin-left: 5%;
        }
    }

    @media (max-width: 1320px) {
        .welcome-area .header-text .left-text {
            margin-top: 50%;
        }
        .welcome-area .header-text {
            width: 50%;
            margin-left: 5%;
        }
    }

    @media (max-width: 1140px) {
        .welcome-area {
            height: auto;
        }
        .welcome-area .header-text {
            width: 92%;
            padding-top: 793px;
        }
        .welcome-area .header-text .left-text {
            margin-top: 5%;
            transform: none !important;
        }
    }
    @media (max-width: 810px) {
        .welcome-area {
            background-size: contain;
        }

        .welcome-area .header-text {
            padding-top: 100%;
            margin-left: 0;
        }

        .container-fluid .col-md-12 {
            margin-right: 0px;
            padding-right: 0px;
        }
    }
    a.main-button-slider {
        font-size: 14px;
        border-radius: 25px;
        padding: 15px 25px;
        background-color: #fba70b;
        text-transform: uppercase;
        text-decoration: none;
        color: #fff;
        font-weight: 600;
        letter-spacing: 1px;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    a.main-button-slider:hover {
        background-color: #f1556a;
        color: #fff;
        text-decoration: none;
    }
    .welcome-area .header-text .left-text {
        position: relative;
        align-self: center;
        margin-top: 15%;
        transform: perspective(1px) translateY(-30%) !important;
    }
    .left-image-decor {
        background-image: url("../images/left-bg-decor.png");
        background-repeat: no-repeat;
        position: relative;
        width: 100%;
        display: inline-block;
        height: 110%;

    }
    .right-image-decor {
        background-image: url("../images/right-bg-decor.png");
        background-repeat: no-repeat;
        background-position: right center;
        position: absolute;
        width: 100%;
        display: inline-block;
        height: 110%;
        margin-top: -200px;
    }


    @media (max-width: 992px) {
        .features-item {
            margin-bottom: 45px;
        }
    }

    .features-item {
        border-radius: 5px;
        padding: 60px 30px;
        text-align: center;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }

    .features-item h2 {
        z-index: 9;
        text-align: center;
        top: 10px;
        left: 45px;
        font-size: 100px;
        font-weight: 600;
        color: #fdefe9;
    }

    .features-item img {
        z-index: 10;
        position: relative;
        max-width: 100%;
        margin-bottom: 40px;
    }

    .features-item h4 {
        margin-top: 20px;
        font-size: 22px;
        color: #1e1e1e;
        margin-bottom: 25px;
    }

    .features-item .main-button {
        margin-top: 35px;
        display: inline-block;
    }
    a.main-button {
        font-size: 14px;
        border-radius: 25px;
        padding: 15px 25px;
        background-color: #f4813f;
        text-transform: uppercase;
        color: #fff;
        font-weight: 600;
        letter-spacing: 1px;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }
    a.main-button:hover{
        background-color: #f1556a;
        color: #fff;
        text-decoration: none;
    }

    a.main-button2 {
        font-size: 14px;
        border-radius: 25px;
        padding: 15px 25px;
        background-color: #67c5df;
        text-transform: uppercase;
        color: #fff;
        font-weight: 600;
        letter-spacing: 1px;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }
    a.main-button2:hover{
        background-color: #f4813f;
        color: #fff;
        text-decoration: none;
    }


</style>

@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <div class="left-image-decor">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <h1 style="margin-top: 70px;">The number one <em>Portal</em> for  <br/><em>Students</em></h1>
                        <p> <a href="#">StudPort</a> is an open academic community where students gain and share knowledge. It's a platform that comes alongside students,
                            helping them connect with other students and teachers. </p>
                        <a href="#about" class="main-button-slider">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->
    <!--Got questions section -->
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('images/background3.jpg')}}" style="width:100%;" >
        </div>
        <div class="col-sm-6" >
            <div class="text-right1">
                <h2 style="font-family: Sans-Serif !important;font-weight: 700; font-size: 40px; color: #fba70b; padding: 20px;">Searching <br/>for<br/> Answers?</h2><br/>
                <p style="font-size:24px; text-align: center; padding: 20px;"> StudPort Community is here to help you climb the ladder of excellence.
                    Join the StudPort Community now and get answers to all your questions - yeah,<span class="text-info"><b> ALL!</b></span></p>
                <div style="color:#e4d400; font-size:28px; line-height: 1.5em; ">
                    <a href="#" class="main-button2">Get Started</a>

                </div>
            </div>
        </div>
    </div>
    <div style="height: 50px;"></div>
    <!--End of Got questions section -->
    <!--Beginning of Communities -->
    <div class="row">
        <div class="col-sm-6">
            <div class="text-left1">
                <h2 style="font-family: Sans-Serif !important;font-weight: 700; font-size: 40px; color: #fba70b; padding: 20px;">We build <br/> supportive communities</h2>
                <p style="font-size:24px; text-align: center; padding: 20px;">The StudPort community helps you achieve your goals
                    through collective efforts of participants. We bring together the brightest minds who pull others up to excellence.</p>
            </div>
        </div>
        <div class="col-sm-6" >
            <img src="{{asset('images/background6.jpg')}}" style="width:100%;" >
        </div>
    </div>

    <!-- End of Community -->
    <!--features section start -->
    <div class="row">
        <div class="col-sm-6">
            <div class="text-left1">
                <h2 style="font-family: Sans-Serif !important;font-weight: 700; font-size: 40px; color: #fba70b; padding: 20px;">StudPort Responsive <br/> design</h2><br/>
                <p style="font-size:24px; text-align: center; padding: 20px;">The Responsiveness of StudPort allows users to have the same
                User Experience (UX) across multiple device dimensions. Don't border about your access device, it's the same experience </p>
            </div>
        </div>
        <div class="col-sm-6" >
            <img src="{{asset('images/background7.jpg')}}" style="width:100%;" >
        </div>
    </div>
    <!--
        <div style="color:#e4d400; font-size:28px; line-height: 1.5em; ">
            <button class="btn btn-outline-primary" style="border-radius:50px; width:200px;">StudPort Secondary</button><br>
        <button class="btn btn-outline-primary" style="border-radius:50px;width:200px;">StudPort PostSecondary </button><br>
        <button class="btn btn-outline-primary" style="border-radius:50px;width:200px;">StudPort Professional </button>
        </div>  -->
        <div> </div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon">
                            @foreach($questions as $question)
                            @endforeach
                            <h2 class="text-danger">{{$question->count()}}</h2>

                            <h4 class="text-danger">Questions have been asked</h4>
                            <p>Studport allows you to ask questions. Anybody can ask a question. You can also <a href="#" class="text-primary">browse frequently asked questions</a> by category
                                <a href="#" class="text-primary">Register</a> an account and start asking your questions</p>
                            <a href="#testimonials" class="main-button" >
                                Ask Question
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2 class="text-success">00</h2>
                            <h4 class="text-success">Questions have been answered</h4>
                            <p>StudPort helps you get instant answers from qualified teachers and from other students online. Find recommended resources from experts.
                                You can also <a href="#" class="text-primary">browse frequently asked questions</a> by category</p>
                            <a href="#testimonials" class="main-button">
                                Browse Answers
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2 class="text-primary">00</h2>


                            <h4 class="text-primary">Tutoring jobs available</h4>
                            <p>StudPort helps students who need tutoring  at different levels and areas of study, to find qualified teachers.
                                <a href="#" class="text-primary">Register</a> a StudPort account and browse available tutoring jobs</p>
                            <br>
                            <a href="#testimonials" class="main-button">
                               sign up
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
<br/>
    <hr>
    <div style="height: 50px;"></div>
    <div class="row">
        <div class="col-sm-5">
            <div style="margin-left: 20px;">
                <h3>Leave a comment</h3>
                <!-- Contact form Section Start -->
                    <hr>
                    <!-- Notifications -->
                    <div id="notific">
                        @include('notifications')
                    </div>
                <!-- //Contact Form Section End -->

            </div>
        </div>
        <div class="col-sm-6" >
            <div class="card">
                <div class="text-center"><h3>StudPort Help Videos </h3></div>
                <hr style="width: 100%;">
                <div class="card-body">
                    <iframe style="width:100%;  border-radius: 5px; margin-right: 10px; " height="420" src="https://www.youtube.com/embed/viHILXVY_eU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
                    <br />
                    <hr style="border: 1px dotted #878683; border-radius: 5px;width: 100%;">
                    <h4 style="text-align:center; color:#000; margin-right: 10px">Learn Latex in 5 minutes</h4>
                    <br />
                    <iframe style="width:100%;  border-radius: 5px; margin-right: 10px; " height="420" src="https://www.youtube.com/embed/Y-kXtWdjtmw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br/>
                    <hr style="border: 1px dotted #878683; border-radius: 5px;width: 100%;">
                </div>
            </div>

        </div>
    </div>
<br />
<!-- //Container End -->
@stop




