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

<style>
#demo1{
	position: relative;
}
#demo1:before{
	position: absolute;
	content: "";
	z-index: -1;
	bottom: 15px;
	left: 8px;
	top: 80%;
	width: 50%;
	background: #777;
	-webkit-box-shadow: 0 18px 15px #486685;
	-moz-box-shadow: 0 18px 15px #486685;
	box-shadow: 0 18px 15px #486685;
	-webkit-transform: rotate(-4deg);
	-moz-transform: rotate(-4deg);
	-o-transform: rotate(-4deg);
	-ms-transform: rotate(-4deg);
	transform: rotate(-4deg);
}
#demo2{
	position: relative;
}
#demo2:before{
	position: absolute;
	content: "";
	z-index: -1;
	bottom: 20px;
	left: 8px;
	right: 8px;
	top: 20px;
	background: #777;
	-webkit-box-shadow: 0 0 30px 10px #486685;
	-moz-box-shadow: 0 0 30px 10px #486685;
	box-shadow: 0 0 30px 10px #486685;
	border-radius: 10px/40px; 
}
#demo3{
	position: relative;
}
#demo3:before{
	position: absolute;
	content: "";
	z-index: -1;
	bottom: 15px;
	left: 8px;
	top: 80%;
	width: 50%;
	background: #777;
	-webkit-box-shadow: 0 18px 15px #486685;
	-moz-box-shadow: 0 18px 15px #486685;
	box-shadow: 0 18px 15px #486685;
	-webkit-transform: rotate(-4deg);
	-moz-transform: rotate(-4deg);
	-o-transform: rotate(-4deg);
	-ms-transform: rotate(-4deg);
	transform: rotate(-4deg);
}
#demo3:after{
	position: absolute;
	content: "";
	z-index: -1;
	bottom: 15px;
	right: 8px;
	top: 80%;
	width: 50%;
	background: #777;
	-webkit-box-shadow: 0 18px 15px #486685;
	-moz-box-shadow: 0 18px 15px #486685;
	box-shadow: 0 18px 15px #486685;
	-webkit-transform: rotate(4deg);
	-moz-transform: rotate(4deg);
	-o-transform: rotate(4deg);
	-ms-transform: rotate(4deg);
	transform: rotate(4deg);
}
.text-link{
    color: #486685;
}
.feature-16-gd:hover{
    background-color: var(--lighten);
    box-shadow: 0 10px 10px #ddd;
    -webkit-box-shadow: 0 10px 10px #ddd;
	-moz-box-shadow: 0 10px 10px #ddd;
    transition: 0.8s ease-out;
}
.feature-16-gd  .text-link:hover{
    text-decoration: underline;
}
</style>
    <!--end of page level css-->
@stop
{{-- Page content --}}
@section('content')
  <section class="w3l-get-started-index" id="intro">
    <div class="new-block-about top-bottom"  style="max-height:calc(20vh - 0px) !important;">
      <div class="container">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <div class="header-section">
            <h1 class="text-left text-white">Our Services </h1>
            <br>
            <h6 class="text-left"><a href="{{route('home')}}">Home</a>&nbsp;/&nbsp;<a class="text-white">Our Services</a></h6>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="w3l-get-started-index" style="min-height: 400px;">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
                <div class="header-section text-center mb-4 p-5">
                    <h1 class="text-dark">What we Do</h1>
                    <p class="mt-5">
                        StudPort provides digital services that improve the
                        teaching and learning processes for Students and Teachers. Our solutions are effecient and easy to use.  
                        Our services are designed to equip students and teachers reach their highest potential.
                    </p>
                </div>
            </div>   
            </div>
</section>
<section class="w3l-get-started-index" style="min-height: 400px;">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
            <div class="header-section text-center mb-4 p-5">
                    <h1 class="text-dark">Services for Students</h1>
                    
                </div>
            </div>          
            <div class="row">
                            <div class="col-lg-4 col-md-6 featured-service">
                                <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;">
                                    <div class="feature-16-gd-info px-3 text-center">
                                        <div class="text-center"><img src="{{asset('images/q_and_a.png')}}"  style="height: 50px; width: 50px;"></div>
                                         <h4 class="mt-4 mb-4 px-2 text-link fw-600">Q&A Manager</h4> 
                                         <p>We receive and  transmit admission application files to learning institutions</p>

                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;"> 
                                <div class="feature-16-gd-info px-3 text-center">
                                            <div class="text-center"><img src="{{asset('images/online-library.png')}}"  style="height: 50px; width: 50px;"></div>
                                            <h4 class="mt-4 mb-4 text-link fw-600">Digital Library </h4>
                                            <p>We provide access to thousands of books and instructional materials.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;">
                                <div class="feature-16-gd-info px-3 text-center">
                                        <div class="text-center"><img src="{{asset('images/internship.png')}}"  style="height: 50px; width: 50px;"></div>
                                        <h4 class="mt-4 mb-4 text-link fw-600">Insternship Placements</h4>
                                        <p>We assist students land internships through our company partnership programs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                                <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;">
                                    <div class="feature-16-gd-info px-3 text-center">
                                        <div class="text-center"><img src="{{asset('images/one-on-one.png')}}"  style="height: 50px; width: 50px;"></div>
                                         <h4 class="mt-4 mb-4 px-2 text-link fw-600">One-on-One Tutoring</h4> 
                                         <p>We help students get access to highly qualified tutors</p>

                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;"> 
                                <div class="feature-16-gd-info px-3 text-center">
                                            <div class="text-center"><img src="{{asset('images/mentorship.png')}}"  style="height: 50px; width: 50px;"></div>
                                            <h4 class="mt-4 mb-4 text-link fw-600">Academic Mentorship</h4>
                                            <p>We orientate students on academic and career paths</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;">
                                <div class="feature-16-gd-info px-3 text-center">
                                        <div class="text-center"><img src="{{asset('images/linkup.png')}}"  style="height: 50px; width: 50px;"></div>
                                        <h4 class="mt-4 mb-4 text-link fw-600">StudPort Connect</h4>
                                        <p>We assist students link up with students of other institutions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <br>
        </div>
    </div>
    <br>
</section>
<section class="w3l-get-started-index mt-3" style="min-height: 400px;">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
            <div class="header-section text-center mb-4 p-5">
                    <h1 class="text-dark">Services for Academic Institutions</h1>
                </div>
            </div>          
            <div class="row">
                            <div class="col-lg-4 col-md-6 featured-service">
                                <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;">
                                    <div class="feature-16-gd-info px-3 text-center">
                                        <div class="text-center"><img src="{{asset('images/resume.png')}}"  style="height: 50px; width: 50px;"></div>
                                         <h4 class="mt-4 mb-4 px-2 text-link fw-600">Admissions Manager</h4> 
                                         <p>We receive and  transmit admission application files to learning institutions</p>

                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;"> 
                                <div class="feature-16-gd-info px-3 text-center">
                                            <div class="text-center"><img src="{{asset('images/businessman.png')}}"  style="height: 50px; width: 50px;"></div>
                                            <h4 class="mt-4 mb-4 text-link fw-600">Staff Recruitment</h4>
                                            <p>We build online admissions platforms for learning institutions to facilitate applications</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;">
                                <div class="feature-16-gd-info px-3 text-center">
                                        <div class="text-center"><img src="{{asset('images/itsupport.png')}}"  style="height: 50px; width: 50px;"></div>
                                        <h4 class="mt-4 mb-4 text-link fw-600">IT Training</h4>
                                        <p>We train staff of institutions on Information Technologies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <br>
        </div>
    </div>
    <br>
</section>
<!--  //servcies section -->
    <section class="w3l-services2">
        <div class="feature-16-main py-2 mt-4">
            <div class="container py-lg-3">
                <div class="header-section text-center">
                    <h1 class="text-dark">Our Pricing Plan</h1>
                    <br>
                    <h6>Choose a Payment Plan  </h6>
                </div>
                <div class="features-grids">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 featured-service mt-5 pt-5">
                            <div class="feature-16-gd" id="demo3">
                                <div class="feature-16-gd-info">
                                    <p class="text-center text-blue" style="font-size: 28px;"><b>XAF 0/year</b></p>
                                    <h6 class="mt-4 mb-2 text-center text-danger">Trial Account</h6>
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
                                    <p align="center"><a href="{{route('subscription')}}" class="btn btn-primary "><span class="icon-basket fa-2x px-2"></span>Add to Cart </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd" id="demo2">
                                <div class="feature-16-gd-info">
                                <p class="text-center text-blue" style="font-size: 28px;"><b>XAF 5,000/year</b></p>
                                    <p class="mt-4 mb-2 text-center text-success" text-center>Premium Account</p>
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
                                    <p align="center"><a href="{{route('subscription')}}" class="btn btn-theme"><span class="icon-basket fa-2x px-2"></span>Add to Cart </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service mt-5 pt-5">
                            <div class="feature-16-gd" id="demo3">
                                <div class="feature-16-gd-info">
                                <p class="text-center text-blue" style="font-size: 28px;"><b>XAF 10,000/year</b></p>
                                    <h6 class="mt-4 mb-2 text-center text-primary">VIP Account</h6>
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
                                    <p align="center"><a href="{{route('subscription')}}" class="btn btn-primary"><span class="icon-basket fa-2x px-2"></span>Add to Cart </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                <div class="header-section text-center mb-5 py-5">
                    <h5 class="text-danger"> Student pays for associated third party fees </h5>
                </div>

        <div class="w3l-services1 aboutbottom py-5 mt-5" style="background-color:#090909;">
            <div class="container py-lg-3 text-center">
            <h5 class="text-white" style="text-align: center; padding:10px;">OUR RESOURCES </h5>
            <hr style="width: 10%; border:3px solid #ff8f07; border-radius: 5px;">
                <div class="bottomgrids row no-gutters">
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0">
                        <h4><a class="service-title badge badge-primary" href="#url">0</a></h4>
                        <h5><a class="service-title" href="#url">Online Courses</a></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-md-0 mt-5">
                        <h4><a class="service-title badge badge-primary" href="#url">{{$number_of_teachers}}</a></h4>
                        <h5><a class="service-title" href="#url">StudPort Teachers</a></h5>
                        
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-5">
                        <h4><a class="service-title badge badge-primary" href="#url">0</a></h4>
                        <h5><a class="service-title" href="#url">Books in Library</a></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                         <h4><a class="service-title badge badge-primary" href="#url">{{$number_of_jobs}}</a></h4>
                         <h5><a class="service-title" href="#url">Jobs</a></h5>
                        
                    </div>
                     <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <h4><a class="service-title badge badge-primary" href="#url">0</a></h4>
                        <h5><a class="service-title" href="#url">StudPort Partners</a></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <h4><a class="service-title badge badge-primary" href="#url">12</a></h4>
                        <h5><a class="service-title" href="#url">Online Assistance Agents</a></h5>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>


@stop


