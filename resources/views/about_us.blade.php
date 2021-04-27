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
    <div class="new-block-about top-bottom">
      <div class="container">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <div class="header-section">
            <h1 class="text-center text-warning">Welcome to StudPort! </h1>
            <br>
            <h5 class="text-center text-light">The No. 1 Portal for Academic Excellence in Cameroon!</h5>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  //Main banner section -->
<section class="w3l-index5" id="about">
    <div class="new-block py-5">
        <div class="container py-lg-3">
            <div class="header-section text-center">
            <h1 class="text-dark text-center">StudPort Community </h1>
                <hr style="width: 10%; border:3px solid #ff8f07; border-radius: 5px;">
                  <p>We build virtual learning communities from the traditional existing in-person institution that empower Students and connect them to solutions
                    that enable academic growth, discovery, and success.
                  </p>
            </div>

            <div class="list-single-view mt-5">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info" >
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/p4.jpg')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <h1 class="p-3 text-dark text-center">&nbsp;&nbsp; Join the StudPort Community</h1>
                                <br>
                                <p class="blog-text">StudPort is an open community for every student.
                                    We help students obtain answers to all their questions ( even the toughest ones, yeah! ) and to share knowledge with other students.
                                    You can join the StudPort Community by signing up for a StudPort account.
                                    Click the link below to Create your StudPort Account. <br>
                                    Our <a href="#" id="btn1" class="text-blue">privacy policies</a> apply to all StudPort users. 

                                    <div style="height: 20px;"></div>
                                    <h5 style="color: #147E83;"><span class="fa fa-pencil fa-2x"></span> How to  Register:</h5>
                                    <p class="block-text">

                                    <ul class="color-with-marker">
                                        <li><span class="fa fa-arrow-right" style="color: #147E83"></span> Fill in the registration form.</li>
                                        <li><span class="fa fa-arrow-right" style="color: #147E83"></span> Activate your account: An activation link shall be sent to the &nbsp;&nbsp;&nbsp;&nbsp; registered email. Make sure you enter a valid e-mail address </li>
                                        <li><span class="fa fa-arrow-right" style="color: #147E83"></span> Sign into your e-mail account and click the activation link. </li>
                                        <li><span class="fa fa-arrow-right" style="color: #147E83"></span> Your account shall be activated automatically.</li>
                                    </ul>
                                    </p>
                                    <div style="text-align: center !important;"><a  class="btn btn-info theme-button mr-3 text-white" href="{{ URL::to('register') }}" >Create My StudPort Account</a></div>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-single-view mt-3">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/p1.jpg')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <h1 class="p-3 text-dark text-center">&nbsp;&nbsp; Personalised Q&A Manager </h1>
                                <br>
                                <p class="blog-text">Once you activate your StudPort Account, you are granted access to your Personal Portal where
                                    you can ask questions in any course/subject. If your school/institution is registered with StudPort,
                                    your teachers will be able to view your questions and provide answers to your questions, nevertheless, StudPort Teachers offer 
                                    help to all its users. Other Students will be able to view and propose answers to your questions.
                                    <div style="height: 20px;"></div>
                                    <h5>In your StudPort Dashboard, you will be able to: </h5>
                                    <div style="height: 20px;"></div>
                                    <ul class="color-with-marker">
                                    <li><span class="fa fa-check-circle" style="color: #00bc8c;"></span> Ask questions </li>
                                    <li><span class="fa fa-check-circle" style="color: #00bc8c;"></span> View question history</li>
                                    <li><span class="fa fa-check-circle" style="color: #00bc8c;"></span> Meet a teacher for one-on-one tutoring</li>
                                    <li><span class="fa fa-check-circle" style="color: #00bc8c;"></span> Request for a book or lecture notes.</li>
                                </ul>
                                 <div style="height: 20px;"></div>     
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-single-view mt-3">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/pic11.jpg')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <h1 class="p-3 text-dark text-center">&nbsp;&nbsp; Request Personalised Tutoring</h1>
                                <br>
                                <p class="blog-text">Our Teachers are available to offer one-on-one tutoring to meet your individual need. You will be able to see Teachers who
                                    are online and available to tutor you, either online or arrange for an in-person tutoring session. You shall be charged a fee for one-on-one sessions.
                                    You may ask for a refund, in case your needs are not met.
                                    <a class="text-primary" href="#"> Our refund policies apply</a>
                                    <div style="height: 50px;"></div>
                                    <div style="text-align: center !important;"><a  class="btn btn-secondary theme-button mr-3 text-white" href="{{ URL::to('register') }}" >Request a Home Teacher</a></div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-single-view mt-3">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/about.jpg')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info text-center">
                                <h1 class="p-3 text-dark text-center">&nbsp;StudPort Connect</h1>
                                <br>
                                <p class="blog-text">With StudPort Connect, You can join study groups within your institution as well as those of
                                other institutions. You can create your own study group and invite participants to join</p>
                                <br>
                                    <div style="text-align: center !important;"><a  class="btn btn-primary theme-button mr-3 text-white" href="#" > Find a Study Group and Connect</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!--  //Intro section -->
<!-- team -->
<section class="w3l-team" id="team">
  <div class="team-block">
    <div class="container">
      <div class="wthree-title">
        <div class="header-section text-center">
          <h1 class="text-dark">StudPort Team</h1>
          <hr style="width: 10%; border:3px solid #ff8f07; border-radius: 5px;">
          <p style="font-weight: 200;">We are true to ourselves, and commit to always perform at our best.</p>
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
 <section class="w3l-quote py-5">
    <div class="container py-lg-3">
      <h3>Want to Join?</h3>
      <p>You can join the StudPort Community and make a positive contribution!</p>
      <a href="{{route('register')}}" class="btn btn-primary theme-button">Become a Teacher</a>
      <a href="{{route('register')}}" class="btn btn-outline-primary theme-button ml-2">Sign Up</a>
    </div>
  </section>
<section class="w3l-stats py-lg-5 py-4" id="stats">
  <div class="gallery-inner container py-md-5 py-4">
    <div class="row stats-con text-white">
      <div class="col-md-3 col-6 stats_info counter_grid">
        <span class="fa fa-smile-o"></span>
        <p class="counter">0</p>
        <h4>Complete Courses</h4>
      </div>
      <div class="col-md-3 col-6 stats_info counter_grid1">
        <span class="fa fa-graduation-cap"></span>
        <p class="counter">{{$number_of_teachers}}</p>
        <h4>Certified Teachers</h4>
      </div>
      <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
        <span class="fa fa-history"></span>
        <p class="counter">{{$experience}}</p>
        <h4>Years of Experience</h4>
      </div>
      <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
        <span class="fa fa-users"></span>
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
