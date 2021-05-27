@extends('layouts/default')

{{-- Page title --}}
@section('title')
About
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
<!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
<!-- Container Section Strat -->
 <!--  Intro section -->
 <section class="w3l-get-started-index" id="intro">
    <div class="new-block-about top-bottom"  style="max-height:calc(20vh - 0px) !important;">
      <div class="container">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <div class="header-section">
            <h1 class="text-left text-white">About Us </h1>
            <br>
            <h6 class="text-left"><a href="{{route('home')}}">Home</a>&nbsp;/&nbsp;<a class="text-white">About Us</a></h6>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  //Main banner section -->
<section class="w3l-index5" id="about" style="background-color: #fff !important;">
    <div class="new-block py-5">
        <div class="container py-lg-3">
        <div class="header-section text-center mt-5">
            <h1 class="text-dark text-center">Who We Are</h1>
                <img src="{{asset('images/who_we_are.jpg')}}" class="img-fluid">
                  <p>We are a team of software engineers, university professors, certified secondary and high school teachers.
                  </p>
            </div>
            <div class="header-section text-center">
            <h1 class="text-dark text-center mt-5">What We seek to Accomplish - <b class="text-success">Digital Communities</b></h1>
                <img src="{{asset('images/background6.jpg')}}" class="img-fluid">
                  <p>Our goal is to build virtual communities where students and teachers connect. 
                    We equally seek to empower learners with academic resources and connect them to solutions
                    that enable academic growth, discovery, and success.
                  </p>
            </div>
            <div class="header-section text-center mt-5">
            <h1 class="text-dark text-center">How to Join the StudPort Community </h1>
            <img src="{{asset('images/register2.jpg')}}" class="img-fluid">
            <p class="blog-text mt-3">StudPort is an open community for every student.
            Create your account, It's free, It only takes three simple steps </p>
              <div class="d-flex flex-column justify-content-center mt-3">
                <div class="p-3">
                    <div class="d-flex flex-row justify-content-center">
                      <div class="p-2"><img src="{{asset('images/one.png')}}" style="height: 50px; width: 50px;"></div>
                      <div class="p-2 mt-2"><h4>Fill the registration <a href="{{ URL::to('register') }}" >form</a></h4></div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="d-flex flex-row justify-content-center">
                      <div class="p-2"><img src="{{asset('images/two.png')}}" style="height: 50px; width: 50px;"></div>
                      <div class="p-2 mt-2">
                      <h4>Verify your email address</h4>
                      </div>
                    </div>
                </div>
                <div class="p-3">
                  <div class="d-flex flex-row justify-content-center">
                      <div class="p-2"><img src="{{asset('images/three.png')}}" style="height: 50px; width: 50px;"></div>
                      <div class="p-2 mt-2"><h4>Your account is now set.</h4></div>
                    </div>
                </div>
            </div>
                  
            </div>
        </div>
    </div>
</section>
  <!--  //about section -->
<!-- team -->
<section class="w3l-team" id="team">
  <div class="team-block">
    <div class="container">
      <div class="wthree-title">
        <div class="header-section text-center mt-5">
          <h1 class="text-dark">Our Team</h1>
          <p>We are true to ourselves, and commit to always perform at our best.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 mt-5">
          <div class="box16">
            <a href="#url"><img src="{{asset('images/student1.jpg')}}" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url">StudPort</a></h3>
              <span class="post">CEO/Founder</span>
              <ul class="social">
                <li>
                  <p class="text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                <li>
                  <a href="#" class="facebook py-2">
                <i class="livicon" data-name="facebook" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
                <li>
                  <a href="#" class="facebook py-2">
                  <i class="livicon" data-name="twitter" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5">
          <div class="box16">
            <a href="#url"><img src="{{asset('images/student1.jpg')}}" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url">StudPort</a></h3>
              <span class="post">CTO/Managing Director</span>
              <ul class="social">
                <li>
                  <p class="text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                <li>
                   <a href="#" class="facebook py-2">
                <i class="livicon" data-name="facebook" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
                <li>
               <a href="#" class="facebook py-2">
                  <i class="livicon" data-name="twitter" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5">
          <div class="box16">
            <a href="#url"><img src="{{asset('images/student1.jpg')}}" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url">StudPort</a></h3>
              <span class="post">Academic Director</a></span>
              <ul class="social">
               <li>
                  <p class="text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                <li>
                    <a href="#" class="facebook py-2">
                <i class="livicon" data-name="facebook" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
                <li>
                 <a href="#" class="facebook py-2">
                  <i class="livicon" data-name="twitter" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5">
          <div class="box16">
            <a href="#url"><img src="{{asset('images/student1.jpg')}}" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url">StudPort</a></h3>
              <span class="post">Partnerships Manager</a></span>
              <ul class="social">
               <li>
                  <p class="text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                <li>
                    <a href="#" class="facebook py-2">
                <i class="livicon" data-name="facebook" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
                <li>
                  <a href="#" class="facebook py-2">
                  <i class="livicon" data-name="twitter" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5">
          <div class="box16">
            <a href="#url"><img src="{{asset('images/student1.jpg')}}" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url">StudPort</a></h3>
              <span class="post">Financial Director</span>
              <ul class="social">
              <li>
                  <p class="text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                <li>
                    <a href="#" class="facebook py-2">
                <i class="livicon" data-name="facebook" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
                <li>
                  <a href="#" class="facebook py-2">
                  <i class="livicon" data-name="twitter" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5">
          <div class="box16">
            <a href="#url"><img src="{{asset('images/student1.jpg')}}" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url">StudPort</a></h3>
              <span class="post">Developer/Consultant</span>
              <ul class="social">
               <li>
                  <p class="text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                <li>
                    <a href="#" class="facebook py-2">
                <i class="livicon" data-name="facebook" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
                <li>
                <a href="#" class="facebook py-2">
                  <i class="livicon" data-name="twitter" data-size="30" data-c="#fff" data-hc="#fff" data-loop="false" data-animate="false"></i>
                </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- stats -->
<section class="w3l-stats py-lg-5 mt-4" id="stats">
  <div class="gallery-inner container py-md-5 py-4">
    <div class="row stats-con text-white">
      <div class="col-md-3 col-6 stats_info counter_grid">
        <span class="fa fa-institution"></span>
        <p class="counter">{{$number_of_institutions}}</p>
        <h4>Institutions</h4>
      </div>
      <div class="col-md-3 col-6 stats_info counter_grid1">
        <span class="fa fa-users"></span>
        <p class="counter">{{$number_of_teachers}}</p>
        <h4>Certified Teachers</h4>
      </div>
      <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
        <span class="fa fa-history"></span>
        <p class="counter">{{$experience}}</p>
        <h4>Years of Experience</h4>
      </div>
      <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
        <span class="fa fa-graduation-cap"></span>
        <p class="counter">{{$number_of_students}}</p>
        <h4>Students Enrolled</h4>
      </div>
    </div>
  </div>
</section>
<!-- //stats -->
<!-- //team -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
