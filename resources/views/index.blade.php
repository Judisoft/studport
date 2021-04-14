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
.icon-circle{
  height: 100px;
  width: 100px;
  border-radius: 50%;
  background-color: var(--warning);
  padding: 30px;
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
            <h3 class="mb-5"><span class="text-secondary">Have Questions?</span><b><span class="text-success"> We have Answers</span></b></h3>
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
                    <h1 class="text-dark">For Institutions,by IT Specialists</h1>
                    <hr style="width: 10%; border:3px solid #ff8f07; border-radius: 5px;">
                    <p>StudPort equips learning institutions with appropriate technologies to facilitate the teaching & learning processes.
                        We offer training and Staff capacity building in Information Technologies to increase performance and success. 
                    </p>
                </div>
            </div>          
            <div class="row">
                            <div class="col-lg-4 col-md-6 featured-service">
                                <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 bg-light shadow" style="border-radius: 5px !important;">
                                    <div class="feature-16-gd-info px-3 text-center">
                                        <div class="text-center"><img src="{{asset('images/web.png')}}"  style="height: 100px; width: 100px;"></div>
                                         <h4 class="mt-4 mb-4 px-2 text-index">StudPort Admit</h4> 
                                         <p>We receive and  transmit admission application files to learning institutions</p>

                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 bg-light shadow" style="border-radius: 5px !important;"> 
                                <div class="feature-16-gd-info px-3 text-center">
                                            <div class="text-center"><img src="{{asset('images/headhunting.png')}}"  style="height: 100px; width: 100px;"></div>
                                            <h4 class="mt-4 mb-4 text-index">StudPort Recruit</h4>
                                            <p>We receive and  transmit job application files to learning institutions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 bg-light shadow" style="border-radius: 5px !important;">
                                <div class="feature-16-gd-info px-3 text-center">
                                        <div class="text-center"><img src="{{asset('images/education.png')}}"  style="height: 100px; width: 100px;"></div>
                                        <h4 class="mt-4 mb-4 text-index">StudPort Scholarships</h4>
                                        <p>We partner with educational institutions to help students find scholarships.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <br>
        </div>
    </div>
    <br>
</section>

<!-- //subscribe -->
<section class="w3l-get-started">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
                <div class="section-width">
                    <h2 class="text-warning">StudPort Library & Bookshop <span class="text-white"><br></span></h2>
                </div>
                <div class="link-list-menu">
                    <p class="mb-5" style="font-weight: 200;">Visit our E-Library and Bookshop with over 1000+ e-books and lecture notes available for downloads
                    <a href="{{route('register')}}"><u>Register</u></a> now and get access to StudPort Library</p>
                    <a href="#" class="btn btn-outline-warning">Learn More</a>
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
                    <h1 class="text-dark">StudPort Business</h1>
                    <hr style="width: 10%; border:3px solid #ff8f07; border-radius: 5px;">
                    <p>StudPort equips students and learning institutions with books and targeted learning resources 

                    </p>
                </div>
            </div>          
           <div class="row">
                            <div class="col-lg-4 col-md-6 featured-service">
                                <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 bg-index shadow" style="border-radius: 5px !important;">
                                    <div class="feature-16-gd-info">
                                        <div class="text-center"><img src="{{asset('images/discount.png')}}"  style="height: 100px; width: 100px;"></div>
                                        <h6 class="mt-4 mb-4 text-light text-center">We sell text-books on the Curriculum at cheap and affordable prices</h6>
                                        <div class="text-center"> 
                                            <a class="btn btn-info theme-button text-light">Checkout our prices</a>
                                        </div>                              
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 bg-index shadow" style="border-radius: 5px !important;"> 
                                <div class="feature-16-gd-info">
                                            <div class="text-center"><img src="{{asset('images/ads.png')}}"  style="height: 100px; width: 100px;"></div>
                                            <h6 class="mt-4 mb-4 text-light text-center">Are you a writer? Advertise on StudPort and reach out to over 1000+ {{--$users->count()--}} students</h6>
                                            <div class="text-center"> 
                                            <a class="btn btn-primary theme-button text-light">Start Advertising with StudPort</a>
                                        </div>

                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 bg-index shadow" style="border-radius: 5px !important;">
                                <div class="feature-16-gd-info">
                                        <div class="text-center"><img src="{{asset('images/laboratory.png')}}"  style="height: 100px; width: 100px;"></div>
                                        <h6 class="mt-4 mb-4 text-center text-light">We supply schools with science kits to facilitate the CBA teaching of science </h6>
                                        <div class="text-center"> 
                                            <a class="btn btn-success theme-button text-light">Contact Us</a>
                                        </div>
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
            <div class="row mt-4 bg-transparent">
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
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(function () {
  count = 0;
  wordsArray = ["Science", "Arts", "Technology"];
  setInterval(function () {
    count++;
    $("#word").fadeIn(400, function () {
      $(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
    });
  }, 1000);
});
</script>
@stop

