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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nixie+One&family=Playfair+Display+SC:wght@700&family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
<!--end of page level css-->
@stop

{{-- content --}}
<style>
    .box-center{
        width: 100%;
        height: 400px;
        background-color: #418bca;
        border-left: 3px solid #0E2231 ;

    }
    .text-right1{
        font-family: 'Quicksand', sans-serif;
        text-align: center;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .text-left1{
        font-family: 'Quicksand', sans-serif;
        text-align: center;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .text-left2{
        font-family: 'Quicksand', sans-serif;
        text-align: center;
        position: relative;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

</style>

@section('content')
    <!--Got questions section -->
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('images/background3.jpg')}}" style="width:100%;" >
        </div>
        <div class="col-sm-6" >
            <div class="text-right1">
                <h2 style="color: #101010; padding: 20px;">Searching <br/>for<br/> Answers?</h2><br/>
                <p style="font-size:28px; text-align: center; padding: 20px;">Join the StudPort Community and get answers to all your questions - yeah,<span class="text-info"><b> ALL!</b></span></p>
                <div style="color:#e4d400; font-size:28px; line-height: 1.5em; ">
                    <button class="btn btn-success" style="border-radius:50px; width:250px;"><span style="font-size:24px;font-weight: bold;">Get Started</span></button>

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
                <h2 style="color: #101010; padding: 20px;">We build <br/> supportive communities</h2>
                <p style="font-size:28px; text-align: center; padding: 20px;">The StudPort community helps you achieve your goals
                    through collective efforts of participants.</p>
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
                <h2 style="color: #101010; padding: 20px;">Responsive <br/> design</h2><br/>
                <p style="font-size:28px; text-align: center; padding: 20px;">The Responsiveness of StudPort allows users to have the same
                User Experience (UX) across multiple device dimensions </p>
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

    <!-- Container Section Start -->
<div class="container">
    <!--Content Section Start -->
    <div class="row">
            <div class="col-sm-4">
                <div class="text-left1">
                    <h2 style="text-align:center; color:#e69138; font-family: 'Quicksand', sans-serif;" >StudPort Services</h2><br/>
                    <img src="{{asset('images/background8.jpg')}}" style="width:100%;" >
                    <h3>StudPort is run by qualified secondary, high school and university lecturers</h3>
                </div>
            </div>
            <div class="col-sm-12" >
                <div class="col-12 mx-auto">
                    <ul class="timeline">
                        <!-- Item 1 -->
                        <li>
                            <div class="direction-r wow slideInRight" data-wow-duration="1s">
                                <div class="flag-wrapper">
                                    <span class="hexa"></span>
                                    <span class="flag "><a  style="font-family: chalkduster; font-size:32px; color:#e69138" >StudPort Ask <img src="{{asset('images/background9.jpg')}}" style="width:100%;" ></a> <br> Anybody can ask a question</span>
                                    <span class="time-wrapper"><span class="time"><a href="#" style="text-decoration:none; color:#fff;">... questions asked so far</a></span></span>
                                </div>
                                <div class="desc" style="border-left:5px solid #418bca;">Get answers to all your
                                    questions and give back by sharing your knowledge with others.
                                    <a href="#" style="color:#e69138; text-decoration:none;">Sign up</a> for an account.
                                    <br>
                                    <button type="button" class="btn btn-xs btn-warning"><a href="#"style="color:#fff; text-decoration:none;">
                                            Browse questions</a> </button>

                                </div>
                            </div>
                        </li>

                        <!-- Item 2 -->
                        <li>
                            <div class="direction-l wow slideInLeft" data-wow-duration="1s">
                                <div class="flag-wrapper">
                                    <span class="hexa"></span>
                                    <span class="flag"><a  style="font-family: chalkduster; font-size:32px; color:#e69138" >StudPort Answer <img src="{{asset('images/background10.jpg')}}" style="width:100%;" ></a> <br>  Anybody can answer a question</span>
                                    <span class="time-wrapper"><span class="time">... questions answered so far</span></span>
                                </div>
                                <div class="desc" style="border-left:5px solid #418bca;>StudPort helps students get instant answers from <a href="#" style="color:#e69138; text-decoration:none;" >qualified teachers</a> online.
                                    Find recommended <a href="#" style="color:#e69138; text-decoration:none;">resources</a> from experts in your subject area.
                                    <br>
                                    <button type="button" class="btn btn-xs btn-warning"><a href="#"style="color:#fff; text-decoration:none;">
                                            Try for free</a></button>
                                </div>
                            </div>
                        </li>

                        <!-- Item 3 -->
                        <li>
                            <div class="direction-r wow slideInRight" data-wow-duration="1s">
                                <div class="flag-wrapper">
                                    <span class="hexa"></span>
                                    <span class="flag"><a  style="font-family: chalkduster; font-size:32px; color:#e69138" >StudPort Jobs <img src="{{asset('images/background10.jpg')}}" style="width:100%;" ></a> <br>Find a Tutoring job</span>
                                    <span class="time-wrapper"><span class="time">... jobs available</span></span>
                                </div>
                                <div class="desc" style="border-left:5px solid #418bca;>StudPort helps students who need tutoring on a one-on-one basis by
                                    at different levels and areas of study. <a href="#" style="color:#e69138; text-decoration:none;" >Sign up </a>
                                    to StudPort jobs and find available tutoring jobs.
                                    <br>
                                    <button type="button" class="btn btn-xs btn-warning"><a href="#"style="color:#fff; text-decoration:none;">
                                            Available jobs</a>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <!-- item4  -->

                        <li>
                            <div class="direction-l wow slideInLeft" data-wow-duration="1s">
                                <div class="flag-wrapper">
                                    <span class="hexa"></span>
                                    <span class="flag"><a  style="font-family: chalkduster; font-size:32px; color:#e69138" >StudPort Resources <img src="{{asset('images/background13.jpg')}}" style="width:100%;" ></a> <br> Find recommended study resources</span>
                                    <span class="time-wrapper"><span class="time">... downloads</span></span>
                                </div>
                                <div class="desc" style="border-left:5px solid #418bca;">StudPort Library contains books, articles, video lessons, etc,
                                    recommended by teachers, to help students
                                    acquire knowledge in the shortest possible time
                                    <br>
                                    <button type="button" class="btn btn-xs btn-warning"><a href="#"style="color:#fff; text-decoration:none;">
                                            Find resources</a></button>
                                </div>
                            </div>
                        </li>

                        <!-- Item 5 -->
                        <li>
                            <div class="direction-r wow slideInRight" data-wow-duration="1s">
                                <div class="flag-wrapper">
                                    <span class="hexa"></span>
                                    <span class="flag"><a  style="font-family: chalkduster; font-size:32px; color:#e69138" >StudPort Orientation <img src="{{asset('images/background12.jpg')}}" style="width:100%;" ></a> <br>Career Orientation</span>
                                    <span class="time-wrapper"><span class="time">In progress ...</span></span>
                                </div>
                                <div class="desc" style="font-family: 'Quicksand'; border-left:5px solid #418bca;">StudPort Connects students to guidance counsellors and career coaches.
                                    Here, students get guidance and available career paths of whatever course they are undertaking
                                    <br>
                                    <button type="button" class="btn btn-xs btn-warning"><a href="#"style="color:#fff; text-decoration:none;">
                                            Sign up</a>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>

</div>
        <!-- //Content Section End -->

        <hr style="border: 1px solid #e69138;border-radius: 5px;width: 100px;">

    <h2 style="text-align:center; color:#e69138; font-family:chalkduster;" >Find out how StudPort helps you as a student!</h2>
    <hr style="border: 1px solid #e69138;border-radius: 5px;width: 100px;">
    <iframe style="width:100%; " height="420" src="https://www.youtube.com/embed/viHILXVY_eU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



<!-- //Container End -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
            new WOW().init();
        });
</script>

@stop



