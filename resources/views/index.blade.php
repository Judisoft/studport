@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Home |
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500&display=swap" rel="stylesheet">
    <!--end of page level css-->
@stop
<style>
    p{
        font-weight: 300 !important;
    }
</style>
<!--  Main banner section -->
@section('content')
  <section class="w3l-intro" id="intro">
    <div class="new-block top-bottom" style="min-height:calc(10vh - 0px) !important;">
      <div class="container-fluid" style="overflow-x: hidden;">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <div class="float-left" style="margin-left: -100px;">
                <img src="{{asset('images/start2.png')}}" style="height:300px; width:300px;" />
            </div>
            <h2 class="mb-5 text-dark" style="font-weight: 600 !important;">Find the best answer to your questions</h2>
            <h3 class="mb-5 text-success">Ask Anything, Anytime!</h3>
            <a href="{{route('register')}}" class="btn btn-dark theme-btn px-5"><img src="{{asset('images/start.png')}}" style="width: 50px; height: 50px; padding: 5px 5px;" /><span class="text-uppercase px-2">Start Asking, It's Free </span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

       <!--  //servcies section -->
    <section class="w3l-services2">
        <div class="feature-16-main py-3">
            <div class="container py-lg-3">
                <div class="header-section text-center mb-4">
                    <h1 class="text-dark">For Students, by Teachers</h1>
                    <hr style="width: 10%; border:3px solid #ff8f07; border-radius: 5px;">
                    <p>Student-focused, Teacher-assisted Platform. StudPort is a digital platform developed to facilitate the teaching-learning process.
                        It is a community for learners with teacher-assistance.
                    </p>
                </div>
                <div class="features-grids">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-5 shadow">
                                <div class="feature-16-gd-info">
                                    <h4 class="text-center text-gray"><span class="fa fa-question-circle fa-2x"></span></h4>
                                    <h4 class="mt-4 mb-4 text-center text-dark">Public Q&A</h4>
                                    <p class="text-center">StudPort allows students to ask questions in an open community where every studport user can view, answer or Comment</p>
                                    <p align="center"><a class="btn  btn-theme" href="{{route('blog')}}">Browse Questions</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd shadow">
                                <div class="feature-16-gd-info">
                                <h4 class="text-center text-gray"><span class="fa fa-user-lock fa-2x"></span></h4>
                                    <h4 class="mt-4 mb-4 text-center" text-center>Private Q&A</h4>
                                    <p class="text-center">StudPort allows students to ask questions privately to specific teachers or users. Here, Questions and Answers are kept from public view</p>
                                    <p align="center"><a class="btn  btn-primary" href="#url">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-5 shadow">
                                <div class="feature-16-gd-info">
                                <h4 class="text-center text-gray"><span class="fa fa-chalkboard-teacher fa-2x"></span></h4>
                                    <h4 class="mt-4 mb-4 text-center">Tutoring Jobs</h4>
                                    <p>Tutoring Jobs are published on our Job Portal. Users can view and  apply for jobs that match their competence directly from their portal</p>
                                    <p align="center"><a class="btn  btn-theme" href="{{route('news')}}">Find A Job</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
<section class="w3l-get-started-index" style="background-color: #F0F5F7 !important; min-height: 400px;">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
            <div class="header-section text-center mb-4 p-5">
                    <h1 class="text-dark">For Institutions, by Technologists</h1>
                    <hr style="width: 10%; border:3px solid #ff8f07; border-radius: 5px;">
                    <p>StudPort equips learning institutions with appropriate technologies to facilitate the teaching & learning processes.
                        We offer training and Staff capacity building in Information Technologies to increase performance and success. 
                    </p>
                </div>
            </div>          
            <div class="row">
                            <div class="col-lg-4 col-md-6 featured-service mb-5 pb-5">
                                <div class="feature-16-gd mt-3 pt-3 pl-3 pb-5 bg-light shadow">
                                    <div class="feature-16-gd-info">
                                        <p class="mt-4 mb-4">
                                        <h4 class="text-primary float-left"><span class="fa fa-graduation-cap fa-2x px-3"></span></h4>
                                        Scholarships & Study Abroad Programs
                                        </p>                                    
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-5 bg-light shadow">
                                <div class="feature-16-gd-info">
                                        <p class="mt-4 mb-4">
                                            <h4 class="text-primary float-left"><span class="fa fa-users fa-2x px-3"></span></h4>
                                            Student Mentorship and Entrepreneurship 
                                        </p>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-5 bg-light shadow">
                                <div class="feature-16-gd-info">
                                        <p class="mt-4 mb-4"><h4 class="text-primary float-left"><span class="fa fa-rocket fa-2x px-3"></span></h4>Student Admissions and Staff Recruitment Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>
<br>
<!-- //subscribe -->
<section class="w3l-get-started">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
                <div class="section-width">
                    <h2 class="text-primary">StudPort Library & Bookshop <span class="text-white"><br></span></h2>
                </div>
                <div class="link-list-menu">
                    <p class="mb-5" style="font-weight: 200;">Visit our E-Library and Bookshop with over 1000+ e-books and lecture notes available for downloads
                    <a href="{{route('register')}}">Register</a> now and get access to StudPort Library</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-get-started-index" style="background-color: #F0F5F7 !important; min-height: 400px;">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
            <div class="header-section text-center mb-4 p-5">
                    <h1 class="text-dark">Learn and grow with Us</h1>
                    <hr style="width: 10%; border:3px solid #ff8f07; border-radius: 5px;">
                    <p>StudPort equips learning institutions with appropriate technologies to facilitate the teaching & learning processes
                        We offer training and Staff capacity building in new age technologies to increase performance and success 
                    </p>
                </div>
            </div>          
           <div class="row">
                            <div class="col-lg-4 col-md-6 featured-service mb-5 pb-5">
                                <div class="feature-16-gd mt-3 pt-3 pl-3 pb-5 bg-light shadow">
                                    <div class="feature-16-gd-info">
                                        <p class="mt-4 mb-4">
                                        <h4 class="text-primary float-left"><span class="fa fa-graduation-cap fa-2x px-3"></span></h4>
                                        Scholarships & Study Abroad Programs
                                        </p>                                    
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-5 bg-light shadow">
                                <div class="feature-16-gd-info">
                                        <p class="mt-4 mb-4">
                                        <h4 class="text-primary float-left"><span class="fa fa-users fa-2x px-3"></span></h4>
                                            Student Mentorship and Entrepreneurship 
                                        </p>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-5 bg-light shadow">
                                <div class="feature-16-gd-info">
                                        <p class="mt-4 mb-4"><h4 class="text-primary float-left"><span class="fa fa-rocket fa-2x px-3"></span></h4>Student Admissions and Staff Recruitment Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>

<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5" >
        <div class="container py-lg-5">
            <div class="header-section text-center">
              <h1 class="text-dark">What Students Say About Us</h1>
                <hr style="width: 10%; border:3px solid #ff8f07; border-radius: 5px;">
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 mx-auto">
                    <div class="owl-one owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/student1.jpg')}}" class="img-fluid testimonial-img shadow" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Message</p>
                                    <div class="name mt-4">
                                        <h4>Nji Awah</h4>
                                        <p>Designation goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/student2.jpg')}}" class="img-fluid testimonial-img shadow" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Message</p>
                                    <div class="name mt-4">
                                        <h4>Jayford</h4>
                                        <p>Designation goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/avatar3.png')}}" class="img-fluid testimonial-img shadow" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Message</p>
                                    <div class="name mt-4">
                                        <h4>Avatar</h4>
                                        <p>Designation goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/avatar3.png')}}" class="img-fluid testimonial-img shadow" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Message</p>
                                    <div class="name mt-4">
                                        <h4>Avatar</h4>
                                        <p>Designation goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-subscribe">
    <div class="subscription-infhny">
        <div class="container"><br>
            <div class="subscription-grids row mb-5">
                <div class="subscription-right form-right-inf col-lg-12 p-md-5 p-4 shadow">
                    <div class="px-lg-5 py-md-0 py-1">
                        <div class="header-section">
                            <img src="{{asset('images/features-icon-3.png')}}" class="float-left" />
                            <h3 class="text-primary text-center" style="font-weight: 200;">Join us for FREE to get instant <span>email updates!</span></h3>
                            <p class="text-center mt-3 py-2">Subscribe and get notified at first on the latest update and offers!</p>
                             <div class="card-body">
                                                @if(session()->has('success'))
                                                     <div class="alert alert-success px-10 py-10 text-center">
                                                        {{ session()->get('success') }}
                                                    </div>
                                                @endif
                                                    @if(session()->has('error'))
                                                        <div class="alert alert-danger px-10 py-10 text-center">
                                                            {{ session()->get('error') }}
                                                        </div>
                                                    @endif
                            </div>
                        <form action="{{route('my-account')}}" method="POST" class="signin-form mt-lg-4 mt-2">
                            <div class="forms-gds">
                                <div class="form-input">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="email" name="email" placeholder="Your email here" class="text-center" required>
                                </div>
                                <div class="form-input"><button type="submit" class="btn btn-primary theme-button">Subscribe</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@stop

