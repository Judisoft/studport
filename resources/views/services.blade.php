@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Services
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!--end of page level css-->
@stop
{{-- Page content --}}
@section('content')
<section class="w3l-get-started-index" style="background-color: #F0F5F7 !important; min-height: 400px;">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
                <div class="header-section text-center mb-4 p-5">
                    <h3 class="text-dark">StudPort Services</h3>
                    <hr style="width: 10%; border:3px solid #ff8f07; border-radius: 5px;">
                    <p class="mt-5">
                        StudPort is committed to providing quality digital services to improve the
                        teaching and learning process for Students and Teachers.  
                        Our services are designed to empower each student to reach his or her highest potential.
                    </p>
                </div>
            </div> 
            <div class="py-5">
                <h1 class="text-center" style="font-weight: 200;"><span class="icon-puzzle fa-5x px-2" style="color: #E4D7D6;"></span> We are here to give you the Support you need. Just let us know how</h1>
            </div>         
        </div>
</section>
    <!--  servcies section -->
    <div class="w3l-services1 pt-2" id="services">
        <div class="container pt-lg-3">
            <div class="aboutgrids row">
                <div class="col-lg-6 col-12 aboutgrid2">
                    <div class="mt-5">
                        <h1 class="text-left" style="font-weight: 600;">StudPort For Students</h1>
                        <hr>
                    </div>
                        <ul class="services-list mt-1">
                            <p style="font-weight: 200;">Our Student-focused services include:</p>
                            <li>Personalised Question and Answer Management System</li>
                            <li>Digital Library & BookStore</li>
                            <li>Study/Support Groups Integration</li>
                            <li>One-On-One Tutoring</li>
                            <li>StudPort Clubs for Students</li>
                            <li>Internship Placements</li>
                            <li>Academic Orientation</li><br>
                            <a href="{{URL::to('contact')}}" class="btn btn-secondary  theme-button" style="border-radius: 30px;color: #fff; ">Click To Know More</a>
                            <br>
                        </ul>

                </div>
                        <div class="col-lg-6 col-12 mt-5">
                            <h1 class="text-left" style="font-weight: 600;">Teachers and Institutions</h1>
                            <hr>
                            <ul class="services-list mt-1">
                                <p style="font-weight: 200;">Our Teacher-focused services include:</p>
                                <li>E-book Library and Teaching Resources</li>
                                <li>Tutoring Job Finder</li>
                                <li>Capacity-building seminar placements </li>
                                <li>Training Programs in Educational Technologies</li>
                                <br>
                                <a href="{{URL::to('contact')}}" class="btn btn-secondary theme-button" style="border-radius: 30px;color: #fff;">Click To Know More</a>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
          <!--  //servcies section -->
    <section class="w3l-services2">
        <div class="feature-16-main py-2">
            <div class="container py-lg-3">
                <div class="header-section text-center">
                    <h3 class="text-dark">Our Pricing Plan</h3>
                    <hr style="width: 10%;">
                    <p style="font-weight: 200;">Choose a Payment Plan  </p>
                </div>
                <div class="features-grids">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="feature-16-gd-info">
                                    <p class="text-center text-info" style="font-size: 28px;"><b>XAF 0/year</b></p>
                                    <h4 class="mt-4 mb-2 text-center">Trial Account</h4>
                                    <hr style="width: 100%;">
                                    <p><span class="fa fa-check float-left" style="color: #00bc8c;"></span>&nbsp; StudPort Account</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; Personalised Q/A Account</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; 10 Free Downloads</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; 10MB File Storage</p>
                                    <p><span class="fa fa-times" style="color: #dc3545;"></span>&nbsp; One-on-One Tutoring <sup class="text-danger">*</sup></p>
                                    <p><span class="fa fa-times" style="color: #dc3545;"></span>&nbsp; Internship Placements</p>
                                    <p><span class="fa fa-times" style="color: #dc3545;"></span>&nbsp; Tutoring Jobs Notifications</p>
                                    <p><span class="fa fa-times" style="color: #dc3545;"></span>&nbsp; Lecture Notes <sup class="text-danger">*</sup></p>
                                    <p><span class="fa fa-times" style="color: #dc3545;"></span>&nbsp; 0% Discount on StudPort Purchaces</p>
                                    <p align="center"><a href="#" class="btn  theme-button" style="border-radius: 30px;color: #fff; background-color: #4988F5;"><span class="icon-basket fa-2x px-2"></span>Add to Cart </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="feature-16-gd-info">
                                <p class="text-center text-info" style="font-size: 28px;"><b>XAF 5,000/year</b></p>
                                    <h4 class="mt-4 mb-2 text-center" text-center>Premium Account</h4>
                                    <hr style="width: 100%;">
                                    <p><span class="fa fa-check float-left" style="color: #00bc8c;"></span>&nbsp; StudPort Account</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; Personalised Q/A Account</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; 20 Free Downloads</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; 100MB File Storage</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; One-on-One Tutoring <sup class="text-danger">*</sup></p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; Tutoring Jobs Notifications</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; Internship Placements</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; Lecture Notes <sup class="text-danger">*</sup></p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; 5% Discount on StudPort Purchaces</p>    
                                    <p align="center"><a href="#" class="btn  theme-button" style="border-radius: 30px;color: #fff; background-color: #4988F5;"><span class="icon-basket fa-2x px-2"></span>Add to Cart </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="feature-16-gd-info">
                                <p class="text-center text-info" style="font-size: 28px;"><b>XAF 10,000/year</b></p>
                                    <h4 class="mt-4 mb-2 text-center">VIP Account</h4>
                                    <hr style="width: 100%;">
                                    <p><span class="fa fa-check float-left" style="color: #00bc8c;"></span>&nbsp; StudPort Account</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; Personalised Q/A Account</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; 50 Free Downloads</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; 200MB File Storage</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; One-on-One Tutoring<sup class="text-danger">*</sup></p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; Internship Placements</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; Tutoring Jobs Notifications</p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span>&nbsp; Lecture Notes <sup class="text-danger">*</sup></p>
                                    <p><span class="fa fa-check" style="color: #00bc8c;"></span> 10% Discount on StudPort Purchaces</p>
                                    <p align="center"><a href="#" class="btn  theme-button" style="border-radius: 30px;color: #fff; background-color: #4988F5;"><span class="icon-basket fa-2x px-2"></span>Add to Cart </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="aboutbottom py-5">
            <div class="container py-lg-3 text-center">
            <h3 style="text-align: center; color: #fff; font-weight: 200; padding:10px;">OUR RESOURCES </h3>
            <hr style="width: 10%; height: 1px; background-color: #fff;">
                <div class="bottomgrids row no-gutters">
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0">
                        <span class="fa fa-laptop"></span>
                        <h4><a class="service-title" href="#url">Online Courses</a></h4>
                        <h4><a class="service-title" href="#url">0</a></h4>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-md-0 mt-5">
                        <span class="fa fa-users"></span>
                        <h4><a class="service-title" href="#url">StudPort Teachers</a></h4>
                        <h4><a class="service-title" href="#url">{{$number_of_teachers}}</a></h4>
                        
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-5">
                        <span class="fa fa-book"></span>
                        <h4><a class="service-title" href="#url">Books in Library</a></h4>
                        <h4><a class="service-title" href="#url">0</a></h4>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <span class="fa fa-tools"></span>
                        <h4><a class="service-title" href="#url">Jobs</a></h4>
                        <h4><a class="service-title" href="#url">{{$number_of_jobs}}</a></h4>
                        
                    </div>
                     <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <span class="fa fa-handshake"></span>
                        <h4><a class="service-title" href="#url">StudPort Partners</a></h4>
                        <h4><a class="service-title" href="#url">0</a></h4>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <span class="fa fa-phone"></span>
                        <h4><a class="service-title" href="#url">Call Assistance Agents</a></h4>
                        <h4><a class="service-title" href="#url">0</a></h4>
                        <p class="service-text"><small>We are reachable Anytime, Anywhere!</small></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>


@stop


